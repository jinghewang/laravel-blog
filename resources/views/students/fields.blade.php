<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age', 'Age:') !!}
    {!! Form::number('age', null, ['class' => 'form-control']) !!}
</div>

<!-- Cid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cid', 'Cid:') !!}
    {!! Form::number('cid', null, ['class' => 'form-control']) !!}
</div>

<!-- Memo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('memo', 'Memo:') !!}
    {!! Form::text('memo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('students.index') !!}" class="btn btn-default">Cancel</a>
</div>
