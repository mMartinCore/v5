

<!-- divisions Field -->
<div class="form-group col-sm-6">
    {{ Form::label('rank', 'ranks:') }}
    {{ Form::text('rank', null, ['class' => 'form-control']) }}
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
    <a href="{{ route('ranks.index') }}" class="btn btn-default">Cancel</a>
</div>
