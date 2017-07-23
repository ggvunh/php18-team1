@extends('layouts.admin.master')
  @section('header')
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1>
            List Books
          </h1>
        </div>
        <div class="col-md-3">
	        <div class="pull-right">
	          <p class="btn btn-primary"><a href="/createbook" class="h4">Create new Book</a></p>
	        </div>  
        </div>  
      </div>
    </div>   
  @stop
  @section('content')
    <div class="col-md-10 col-md-offset-1 border">
    @foreach ($books as $book)
        <div class="row borderlist">
          <div class="col-sm-7">
            <p class="h5">{{$book->name}}</p>
          </div>
          <div class="col-sm-3">
            <p class="h5">{{$book->author->name}}</p>
          </div>
          <div class="col-sm-2">
            <p class="h5"><a href="{{url('/bookedit/'.$book->id)}}" class="glyphicon glyphicon-edit">Edit</a>&nbsp&nbsp&nbsp&nbsp<a href="" class="glyphicon glyphicon-trash">Delete</a></p>
          </div> 
        </div> 
    @endforeach
    </div>  
  @stop