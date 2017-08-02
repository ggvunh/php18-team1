	<div class="form-group">
	  {!! Form::label('name', 'Name book') !!}
	  <div class="form-controls">
	    {!! Form::text('name', null, ['class' => 'form-control']) !!}
	  </div>
	</div>
	<div class="form-group">
	  {!! Form::label('image', 'Image Book') !!}
	  <div class="form-controls">
	    {!! Form::file('image', null, ['class' => 'form-control']) !!}
	  </div>
	</div>
	<div class="form-group">
	  {!! Form::label('language', 'Language') !!}
	  <div class="form-controls">
	    {!! Form::text('language', null, ['class' => 'form-control']) !!}
	  </div>
	</div>
	<div class="form-group">
	  {!! Form::label('price', 'Price') !!}
	  <div class="form-controls">
	    {!! Form::number('price', null, ['class' => 'form-control']) !!}
	  </div>
	</div>
	<div class="form-group">
	  {!! Form::label('quantity', 'Quantity') !!}
	  <div class="form-controls">
	    {!! Form::number('quantity', null, ['class' => 'form-control']) !!}
	  </div>
	</div>
	<div class="form-group">
	  {!! Form::label('detail', 'Description') !!}
	  <div class="form-controls">
	    {!! Form::textarea('detail', null, ['class' => 'form-control']) !!}
	  </div>
	</div>
	<div class="form-group">
	  {!! Form::label('topic_id', 'Topic') !!}
	  <div class="form-controls">
	    {!! Form::select('topic_id',$topic, null, ['class' => 'form-control']) !!}
	  </div>
	</div>
	<div class="form-group">
	  {!! Form::label('author_id', 'Author') !!}
	  <div class="form-controls">
	    {!! Form::select('author_id',$author, null, ['class' => 'form-control']) !!}
	  </div>
	</div>
	<div class="form-group">
	  {!! Form::label('publish_id', 'Publish Company') !!}
	  <div class="form-controls">
	    {!! Form::select('publish_id',$publish, null, ['class' => 'form-control']) !!}
	  </div>
	</div>
	<div class="padright">
	{!! Form::submit('Save Book', ['class' => 'btn btn-primary pull-right btn-lg']) !!}
	</div>