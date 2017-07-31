	<div class="form-group">
	  {!! Form::label('name', 'Name') !!}
	  <div class="form-controls">
	    {!! Form::text('name', null, ['class' => 'form-control']) !!}
	  </div>
	</div>
	<div class="form-group">
	  {!! Form::label('email', 'E-Mail Address') !!}
	  <div class="form-controls">
	    {!! Form::email('email', null, ['class' => 'form-control']) !!}
	  </div>
	</div>
	<div class="form-group">
	  {!! Form::label('phone', 'Phone Company') !!}
	  <div class="form-controls">
	    {!! Form::tel('phone', null, ['class' => 'form-control']) !!}
	  </div>
	</div>
	<div class="form-group">
	  {!! Form::label('address', 'Address Company') !!}
	  <div class="form-controls">
	    {!! Form::text('address', null, ['class' => 'form-control']) !!}
	  </div>
	</div>
	<div class="padright">
	{!! Form::submit('Save Publish Company', ['class' => 'btn btn-primary pull-right']) !!}
	</div>