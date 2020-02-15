<div class="form-group">
    {!! Form::label('name', 'Name: ', ['class'=>'']) !!}
    {!! Form::text('name', $movie->name, ['class'=>'form-control', 'style'=>'width:40%']) !!}
</div>

<div class="form-group">
    {!! Form::label('imageLink', 'Link for the Image: ') !!}
    {!! Form::text('imageLink', $movie->imageLink, ['class'=>'form-control', 'style'=>'width:40%']) !!}
</div>

<div class="form-group">
    {!! Form::label('year', 'Year: ') !!}
    {!! Form::text('year', $movie->year, ['class'=>'form-control', 'style'=>'width:40%']) !!}
</div>

<div class="form-group">
    {!! Form::label('director', 'Director: ') !!}
    {!! Form::text('director', $movie->director, ['class'=>'form-control', 'style'=>'width:40%']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description: ') !!}
    {!! Form::textarea('description', $movie->description, ['class'=>'form-control', 'style'=>'width:40%']) !!}
</div>

<div class="form-group">
    {!! Form::submit($btn_submit, ['class'=>'btn btn-primary']) !!}
</div>
