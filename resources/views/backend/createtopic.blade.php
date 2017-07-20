  @extends('layouts.admin.master')
  @section('header')
    <h1>
      Create a new Topic
    </h1>
  @stop
  @section('content')
    <div class="col-md-8 col-md-offset-2 border">
      {!! Form::open(['url' => '/createtopic','method'=>'post']) !!}
        @include('paticals.forms.topicform')
      {!! Form::close() !!}
    </div>  
  @stop