<div class="form-group">
    {!! Form::label('name', 'Select a Movie:') !!}
    {!! Form::select('name', $theater->movies, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('seats', 'Select the number of seats:') !!}
    {!! Form::number('seats', '', ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('price', 'Select the Price:') !!}
    {!! Form::selectRange('price', 1, 20, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($btn_submit, ['class'=>'btn btn-primary']) !!}
</div>
