@extends('layouts.admin.master')
  @section('header')
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1>
            Edit Public Company
          </h1>
        </div>
        <div class="col-md-3">
	        <div class="pull-right">
	          <p class="btn btn-primary"><a href="{{url('/createpublishcompany')}}" class="h4">Create new Public Company</a></p>
	        </div>  
        </div>  
      </div>
    </div>
  @stop
  @section('content')
    <div class="col-md-8 col-md-offset-2 border">
      {!! Form::model($publishcompany, ['url' => 'edit/publishcompany/' . $publishcompany->id,'method'=>'put']) !!}
         @include('paticals.forms.publishcompanyform')   
      {!! Form::close() !!}
    </div>
  @stop