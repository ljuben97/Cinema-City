<html>
@include('partials.head')
<body>
@include('partials.navbar')
<div class="container">
    <br/>
    @include('partials.errors')
    {!! Form::model($theater, ['method'=>'PATCH', 'route'=>['theater.update', $theater->id]]) !!}
    @include('theater.partial.form', ['btn_submit'=>'Edit Theater'])
    {!! Form::close() !!}
</div>
</body>
</html>
