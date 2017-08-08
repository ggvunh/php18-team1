@extends('layouts.admin.master')
  @section('header')
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h3 class="paddtop">
            Edit Public Company
          </h3>
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
    <section class="content padtop">
      <div class="row">
        <div class="col-md-12">
          {!! Form::model($publishcompany, ['url' => 'edit/publishcompany/' . $publishcompany->id,'method'=>'put']) !!}
             @include('paticals.forms.publishcompanyform')   
          {!! Form::close() !!}
        </div>
      </div>
    </section>
  @stop