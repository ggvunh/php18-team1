  @extends('layouts.admin.master')
  @section('header')
    <h3 class="paddtop">
      Create a new Author
    </h3>
  @stop
  @section('content')
    <section class="content padtop">
      <div class="row">
        <div class="col-md-12">
          {!! Form::open(['url' => '/createauthor','method'=>'post']) !!}
             @include('paticals.forms.authorform')
          {!! Form::close() !!}
        </div>
      </div>
    </section>
  @stop
