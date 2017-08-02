	<div class="form-group">
	  {!! Form::label('name', 'Name Author') !!}
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
	  {!! Form::label('phone', 'Phone Author') !!}
	  <div class="form-controls">
	    {!! Form::tel('phone', null, ['class' => 'form-control']) !!}
	  </div>
	</div>
	<div class="form-group">
	  {!! Form::label('address', 'Address Author') !!}
	  <div class="form-controls">
	    {!! Form::text('address', null, ['class' => 'form-control']) !!}
	  </div>
	</div>
	<div class="form-group">
	  {!! Form::label('story', 'Story') !!}
	  <div class="form-controls">
	    {!! Form::textarea('story', null, ['class' => 'form-control']) !!}
	  </div>
	</div>
	<div class="padright">
	{!! Form::submit('Save Author', ['class' => 'btn btn-primary pull-right btn-lg']) !!}
	</div>