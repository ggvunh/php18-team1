@extends('layouts.admin.master')
  @section('header')
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h3 class="paddtop">
            Edit Books
          </h3>
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
     <section class="content padtop">
      <div class="row">
        <div class="col-md-12">
          {!! Form::model($book, ['url' => 'edit/book/' . $book->id,'method'=>'put', 'enctype' => 'multipart/form-data']) !!}
            @include('paticals.forms.bookform')
          {!! Form::close() !!}
        </div>
      </div>
    </section>  
  @stop