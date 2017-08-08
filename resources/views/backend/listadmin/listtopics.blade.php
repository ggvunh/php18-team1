@extends('layouts.admin.master')
@section('header')
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h1>
        List Topics
      </h1>
    </div>
    <div class="col-md-8 col=col-sm-offset-2">
      <div class="btn-group" align="center">
        <button type="button" class="btn btn-info">Export</button>
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
          <span class="caret"></span>
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu" role"menu" id="export-menu">
          <li id="export-to-exel"><a href="{{ url('listtopics/getExport') }}">Export to Exel</a></li>
          <li id="export-to-PDF"><a href="{{ url('listtopics/getPDF') }}">Export to PDF</a></li>
          <li class="divider"></li>
          <li></li>
        </ul>
      </div>
      <div class="col-md-3">
       <div class="pull-right">
         <p class="btn btn-primary"><a href="{{url('/createtopic')}}" class="h4">Create new Topic</a></p>
       </div>  
     </div>  
   </div>
 </div>   
 @stop
 @section('content')
 <div class="col-md-10 col-md-offset-1 border">
  @foreach ($topics as $topic)
  <div class="row borderlist">
    <div class="col-sm-7">
      <p class="h5">{{$topic->name}}</p>
    </div>
    <div class="col-sm-3">
    </div>
    <div class="col-sm-2">
      <p class="h5"><a href="{{url('/topicedit/'.$topic->id)}}" class="glyphicon glyphicon-edit">Edit</a>&nbsp&nbsp&nbsp&nbsp<a href="{{url('/topicdelete/'.$topic->id)}}" class="glyphicon glyphicon-trash">Delete</a></p>
    </div> 
  </div> 
  @endforeach
</div>  
@stop