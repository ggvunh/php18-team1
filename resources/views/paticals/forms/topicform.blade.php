	<div class="form-group">
	  {!! Form::label('name', 'Name') !!}
	  <div class="form-controls">
	    {!! Form::text('name', null, ['class' => 'form-control']) !!}
	  </div>
	</div>
	<div class="padright">
	{!! Form::submit('Save Topic', ['class' => 'btn btn-primary pull-right btn-lg']) !!}
	</div>