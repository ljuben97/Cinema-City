<div class="form-group">
    {!! Form::label('name', 'Name:', []) !!}
    {!! Form::text('name', $theater->name, ['class'=>'form-control', 'style'=>'width:40%']) !!}
</div>

<div class="form-group">
    {!! Form::label('imageLink', 'Image Link:', ['style'=>'width:40%']) !!}
    {!! Form::text('imageLink', $theater->imageLink, ['class'=>'form-control', 'style'=>'width:40%']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['style'=>'width:40%']) !!}
    {!! Form::textArea('description', $theater->description, ['class'=>'form-control', 'style'=>'width:40%']) !!}
</div>

<div class="form-group">
    {!! Form::label('year', 'Year Released:', ['style'=>'width:40%']) !!}
    {!! Form::number('year', $theater->year, ['class'=>'form-control', 'style'=>'width:40%']) !!}
</div>

<div class="form-group">
    {!! Form::submit($btn_submit, ['class'=>'btn btn-primary']) !!}
</div>
