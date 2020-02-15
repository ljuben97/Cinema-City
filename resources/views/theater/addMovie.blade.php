<html>
@include('partials.head')
<body>
@include('partials.navbar')
<br/>
<section class="container">
    <div style="width: 45%; float:left;">

        <h2>{{$theater->name}}</h2>

        <img src="{{$theater->imageLink}}" style="width: 40%" />

        <h3>Year released: {{$theater->year}}</h3>

        <p style="width:70%">{{$theater->description}}</p>

    </div>

    <div style="width:45%; float: left">
        {!! Form::model($theater, ['route'=>['theater.movieAdded', $theater->id]]) !!}
        @include('theater.partial.form_add', ['btn_submit'=>'Add Movie'])
        {!! Form::close() !!}
    </div>
</section>

</body>
</html>
