@extends('layouts.admin.master')
@section('header')
<div class="container">
  <div class="row">
    <div class="col-md-5">
      <h1>
        List Author
      </h1>
    </div>
    <div class="col-md-2">
      <div class="btn-group export" align="center">
        <button type="button" class="btn btn-info">Export</button>
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
          <span class="caret"></span>
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu" role"menu" id="export-menu">
          <li id="export-to-exel"><a href="{{ url('listauthors/getExport') }}">Export to Exel</a></li>
          <li id="export-to-PDF"><a href="{{ url('listauthors/getPDF') }}">Export to PDF</a></li>
          <li class="divider"></li>
          <li></li>
        </ul>
      </div>
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
      <p class="h5"><a href="{{url('/authoredit/'.$author->id)}}" class="glyphicon glyphicon-edit">Edit</a>&nbsp&nbsp&nbsp&nbsp<a href="{{url('/authordelete/'.$author->id)}}" class="glyphicon glyphicon-trash">Delete</a></p>
    </div> 
  </div> 
  @endforeach
</div>
@stop
