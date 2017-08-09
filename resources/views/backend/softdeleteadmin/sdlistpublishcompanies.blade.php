@extends('layouts.admin.master')
  @section('header')
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1>
            Soft Delete List Publics Companies
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
    <div class="col-md-10 col-md-offset-1 border">
      @foreach ($publishcompanies as $publishcompany)
        <div class="row borderlist">
          <div class="col-sm-2">
            <p class="h5">{{$publishcompany->name}}</p>
          </div>
          <div class="col-sm-3">
            <p class="h5">{{$publishcompany->email}}</p>
          </div>
          <div class="col-sm-2">
            <p class="h5">0{{$publishcompany->phone}}</p>
          </div>
          <div class="col-sm-3">
            <p class="h5">{{$publishcompany->address}}</p>
          </div>
          <div class="col-sm-2">
            <p class="h5"><a href="{{url('/restorepublishcompany/'. $publishcompany->id)}}" class="glyphicon glyphicon-refresh">Restore</a></p>
          </div>
        </div>
      @endforeach
    </div>
  @stop
