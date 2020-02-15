<div class="form-group">
    {!! Form::label('seats', 'Select Number of Seats:') !!}
    {!! Form::number('seats', '', ['class'=>'form-control', 'style'=>'width:50%']) !!}
</div>

<div class="form-group">
    {!! Form::submit($btn_submit, ['class'=>'btn btn-primary']) !!}
</div>
