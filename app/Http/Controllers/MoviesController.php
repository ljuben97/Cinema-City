<?php

namespace App\Http\Controllers;

use App\MovieTheater;
use Illuminate\Http\Request;
use App\Movie;
use App\Theater;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies=Movie::all();
        return view('movie.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movie=new Movie();
        return view('movie.create', compact('movie'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'imageLink'=>'required',
            'director'=>'required',
            'year'=>'required',
        ]);
        $movie=new Movie();
        $movie->name=$request->name;
        $movie->imageLink=$request->imageLink;
        $movie->year=$request->year;
        $movie->description=$request->description;
        $movie->director=$request->director;
        $movie->save();
        return redirect('movie');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie=Movie::find($id);
        $relations=MovieTheater::where('MovieID', $id)->get();
        $numbers=[];
        foreach($relations as $relation){
            array_push($numbers, $relation->TheaterID);
        }
        if(count($numbers)>0) $movie->theaters=Theater::whereIn('id', $numbers)->get();
        return view('movie.details', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie=Movie::find($id);
        return view('movie.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'=>'required',
            'imageLink'=>'required',
            'director'=>'required',
            'year'=>'required',
        ]);
        $movie=Movie::find($id);
        $movie->name=$request->name;
        $movie->imageLink=$request->imageLink;
        $movie->year=$request->year;
        $movie->description=$request->description;
        $movie->director=$request->director;
        $movie->save();
        return redirect('/movie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Movie::destroy($id);
        return redirect('/movie');
    }
}
