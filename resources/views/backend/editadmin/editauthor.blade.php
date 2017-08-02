 @extends('layouts.admin.master')
  @section('header')
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h3 class="paddtop">
            Edit Author
          </h3>
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
    <section class="content padtop">
      <div class="row">
        <div class="col-md-12">
          {!! Form::model($author, ['url' => 'edit/author/' . $author->id,'method'=>'put']) !!}
             @include('paticals.forms.authorform')         
          {!! Form::close() !!}
        </div> 
      </div>
    </section> 
  @stop