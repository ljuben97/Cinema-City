<html>
@include('partials.head')
<body>
@include('partials.navbar')
<div class="container">
    <br/>
    @include('partials.errors')
    {!! Form::model($theater, ['route'=>['theater.store']]) !!}
    @include('theater.partial.form', ['btn_submit'=>'Create Theater'])
    {!! Form::close() !!}
</div>
</body>
</html>
