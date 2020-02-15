<html>
@include('partials.head')
<body>
@include('partials.navbar')

<br/><br/>
<section class="container">
    <div style="width: 45%; float:left;">

        <h2>{{$relation['theater']->name}}</h2>

        <img src="{{$relation['theater']->imageLink}}" style="width: 40%" />

        <h3>Year released: {{$relation['theater']->year}}</h3>

        <p style="width:70%">{{$relation['theater']->description}}</p>

    </div>

    <div style="width:45%; float: left">
        <h2>{{$relation['movie']->name}}</h2>

        <img src="{{$relation['movie']->imageLink}}" style="width: 40%" />

        <h3>Directed by: {{$relation['movie']->director}}</h3>

        <h3>Year released: {{$relation['movie']->year}}</h3>

        <h4>Price: ${{$relation[0]->price}}</h4>

        <h4>Seats Available: {{$relation[0]->seats}}</h4>

        {!! Form::model($relation, ['route'=>['theater.bought', $relation[0]->TheaterID, $relation[0]->MovieID]]) !!}
        @include('theater.partial.form_buy', ['btn_submit'=>'Buy Tickets'])
        {!! Form::close() !!}
    </div>
</section>

</body>
</html>
