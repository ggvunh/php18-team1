  @extends('layouts.admin.master')
  @section('header')
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1>
            Create a new Book
          </h1>
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
    <div class="col-md-8 col-md-offset-2 border">
      {!! Form::open(['url' => '/createbook','method'=>'post', 'enctype' => 'multipart/form-data']) !!}
        @include('paticals.forms.bookform')
      {!! Form::close() !!}
    </div>  
  @stop
