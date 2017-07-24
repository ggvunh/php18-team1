@extends('layouts.admin.master')
  @section('header')
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1>
            Soft Delete List Author
          </h1>
        </div>
        <div class="col-md-3">
	        <div class="pull-right">
	          <p class="btn btn-primary"><a href="/createauthor" class="h4">Create new Author</a></p>
	        </div>  
        </div>  
      </div>
    </div>   
  @stop
  @section('content')
     <div class="col-md-10 col-md-offset-1 border">
      @foreach ($authors as $author)
        <div class="row borderlist">
          <div class="col-sm-2">
            <p class="h5">{{$author->name}}</p>
          </div>
          <div class="col-sm-3">
            <p class="h5">{{$author->email}}</p>
          </div>
          <div class="col-sm-2">
            <p class="h5">0{{$author->phone}}</p>
          </div>
          <div class="col-sm-3">
            <p class="h5">{{$author->address}}</p>
          </div>
          <div class="col-sm-2">
            <p class="h5"><a href="{{url('/restoreauthor/'.$author->id)}}" class="glyphicon glyphicon-refresh">Restore</a></p>
          </div> 
        </div> 
      @endforeach
    </div>  
  @stop