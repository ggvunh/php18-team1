@extends('layouts.admin.master')
  @section('header')
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1>
            Edit Books
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
    <div class="col-md-8 col-md-offset-2 border">
      {!! Form::model($book, ['url' => 'edit/book/' . $book->id,'method'=>'put', 'enctype' => 'multipart/form-data']) !!}
        @include('paticals.forms.bookform')
      {!! Form::close() !!}
    </div>  
  @stop