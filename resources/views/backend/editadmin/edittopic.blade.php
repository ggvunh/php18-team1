  @extends('layouts.admin.master')
  @section('header')
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1>
            Edit Topic
          </h1>
        </div>
        <div class="col-md-3">
	        <div class="pull-right">
	          <p class="btn btn-primary"><a href="{{url('/createtopic')}}" class="h4">Create new Topic</a></p>
	        </div>  
        </div>  
      </div>
    </div>  
  @stop
  @section('content')
    <div class="col-md-8 col-md-offset-2 border">
      {!! Form::model($topic, ['url' => 'edit/topic/' . $topic->id,'method'=>'put']) !!}
        @include('paticals.forms.topicform')
      {!! Form::close() !!}
    </div>  
  @stop