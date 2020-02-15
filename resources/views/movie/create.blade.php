<html>
@include('partials.head')
<body>
@include('partials.navbar')
<div class="container">
    <br/>
    @include('partials.errors')
    {!! Form::model($movie, ['route'=>['movie.store']]) !!}
    @include('movie.partial.form', ['btn_submit'=>'Create Movie'])
    {!! Form::close() !!}
</div>
</body>
</html>
