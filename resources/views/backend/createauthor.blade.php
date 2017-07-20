  @extends('layouts.admin.master')
  @section('header')
    <h1>
      Create a new Author
    </h1>
  @stop
  @section('content')
    <div class="col-md-8 col-md-offset-2 border">
      {!! Form::open(['url' => '/createauthor','method'=>'post']) !!}
         @include('paticals.forms.authorform')         
      {!! Form::close() !!}
    </div>  
  @stop