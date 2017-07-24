@extends('layouts.admin.master')
  @section('header')
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1>
            List Users
          </h1>
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