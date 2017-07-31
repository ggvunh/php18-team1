  @extends('layouts.admin.master')
  @section('header')
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h3 class="paddtop">
            Create a new Book
          </h3>
        </div>
        <div class="col-md-4">
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
        </div>  
      </div>
    </div>   
  @stop
  @section('content')
    <section class="content padtop">
      <div class="row">
        <div class="col-md-12">
          {!! Form::open(['url' => '/createbook','method'=>'post', 'enctype' => 'multipart/form-data']) !!}
            @include('paticals.forms.bookform')
          {!! Form::close() !!}
        </div> 
      </div>
    </section>       
  @stop
