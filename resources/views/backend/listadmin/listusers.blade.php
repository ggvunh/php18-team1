@extends('layouts.admin.master')
@section('header')
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h1>
        List Users
      </h1>
    </div>
    <div class="col-md-8 col=col-sm-offset-2">
      <div class="btn-group" align="center">
        <button type="button" class="btn btn-info">Export</button>
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
          <span class="caret"></span>
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu" role"menu" id="export-menu">
        <li id="export-to-exel"><a href="{{ url('listusers/getExport') }}">Export to Exel</a></li>
        <li id="export-to-PDF"><a href="{{ url('listusers/getPDF') }}">Export to PDF</a></li>
          <li class="divider"></li>
          <li></li>
        </ul>
        <div class="col-md-3">
          {!! Form::open(['url' => '/searchuser','method'=>'get']) !!}
            <div class="input-group">
              {!! Form::text('key', null, ['class' => 'form-control','placeholder'=>'seach user...']) !!}
              <span class="input-group-btn">
                {{ Form::button('<i class="fa fa-search"></i>', ['type' => 'submit', 'class' => 'btn btn-default'] )  }}
              </span>
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>   
@stop
@section('content')
<div class="col-md-10 col-md-offset-1 border">
  @foreach ($users as $user)
  <div class="row borderlist">
    <div class="col-sm-2">
      <p class="h5">{{$user->name}}</p>
    </div>
    <div class="col-sm-3">
      <p class="h5">{{$user->email}}</p>
    </div>
    <div class="col-sm-2">
      <p class="h5">0{{$user->phone}}</p>
    </div>
    <div class="col-sm-3">
      <p class="h5">{{$user->address}}</p>
    </div>
    <div class="col-sm-2">
      <p class="h5"><a href="{{url('/userdelete/'.$user->id)}}" class="glyphicon glyphicon-trash">Delete</a></p>
    </div> 
  </div> 
  @endforeach
</div>  
@stop
