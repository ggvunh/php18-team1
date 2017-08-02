  @extends('layouts.admin.master')
  @section('header')
    <h1>
      Create a new Publish Company
    </h1>
  @stop
  @section('content')
    <section class="content padtop">
      <div class="row">
        <div class="col-md-12">
          {!! Form::open(['url' => '/createpublishcompany','method'=>'post']) !!}
             @include('paticals.forms.publishcompanyform')   
          {!! Form::close() !!}
        </div> 
      </div>
    </section>   
  @stop