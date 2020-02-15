<html>
@include('partials.head')
<body>
@include('partials.navbar')
<br/>
<div class="container">
    @include('partials.errors')
    {!! Form::model($movie, ['method'=>'PATCH', 'route'=>['movie.update', $movie->id]]) !!}
    @include('movie.partial.form', ['btn_submit'=>'Edit Movie'])
    {!! Form::close() !!}
</div>
</body>
</html>
