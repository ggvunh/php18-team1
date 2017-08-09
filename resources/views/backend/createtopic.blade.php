  @extends('layouts.admin.master')
  @section('header')
    <h1>
      Create a new Topic
    </h1>
  @stop
  @section('content')
<section class="content padtop">
  <div class="row">
    <div class="col-md-12">
      {!! Form::open(['url' => '/createtopic','method'=>'post']) !!}
        @include('paticals.forms.topicform')
      {!! Form::close() !!}
    </div>
  </div>
</section>
  @stop
