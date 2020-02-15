<?php

namespace App\Http\Controllers;

use App\Theater;
use App\MovieTheater;
use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TheaterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $theaters=Theater::all();
        return view('theater.index', compact('theaters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $theater=new Theater();
        return view('theater.create', compact('theater'));
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
            'year'=>'required'
        ]);
        $theater=new Theater();
        $theater->name=$request->name;
        $theater->imageLink=$request->imageLink;
        $theater->description=$request->description;
        $theater->year=$request->year;
        $theater->save();
        return redirect('theater');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $theater=Theater::find($id);
        $relations=MovieTheater::where('TheaterID', $id)->get();
        $numbers=[];
        foreach ($relations as $relation) array_push($numbers, $relation->MovieID);
        $theater->movies=Movie::whereIn('id', $numbers)->get();
        return view('theater.details', compact('theater'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $theater=Theater::find($id);
        return view('theater.edit', compact('theater'));
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
            'year'=>'required'
        ]);
        $theater=Theater::find($id);
        $theater->name=$request->name;
        $theater->imageLink=$request->imageLink;
        $theater->year=$request->year;
        $theater->description=$request->description;
        $theater->save();
        return redirect('theater/');
    }

    public function buyTickets($theaterId, $movieId){
        $relation=MovieTheater::where('TheaterID', $theaterId)->where('MovieID', $movieId)->get();
        $relation['movie']=Movie::find($movieId);
        $relation['theater']=Theater::find($theaterId);
        return view('theater.buyTickets', compact('relation'));
    }

    public function bought(Request $request, $theaterId, $movieId){
        $relation=MovieTheater::where('TheaterID', $theaterId)->where('MovieID', $movieId)->get();
        $relation[0]->seats-=$request->seats;
        $relation[0]->save();
        return redirect('theater');
    }

    public function addMovie($id){
        $theater=Theater::find($id);
        $theater->movies=DB::table('movies')->pluck('name', 'name');
        return view('theater.addMovie', compact('theater'));
    }

    public function movieAdded(Request $request, $id){
        $relation=new MovieTheater();
        $relation->TheaterID=$id;
        $relation->MovieID=Movie::where('name', $request->name)->get()[0]->id;
        $relation->price=$request->price;
        $relation->seats=$request->seats;
        $relation->save();
        return redirect('/theater/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
