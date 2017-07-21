  @extends('layouts.admin.master')
  @section('header')
    <h1>
      Create a new Publish Company
    </h1>
  @stop
  @section('content')
    <div class="col-md-8 col-md-offset-2 border">
      {!! Form::open(['url' => '/createpublishcompany','method'=>'post']) !!}
         @include('paticals.forms.publishcompanyform')   
      {!! Form::close() !!}
    </div>  
  @stop