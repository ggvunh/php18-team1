@extends('layouts.admin.master')
@section('header')
<div class="container">
  <div class="row">
      <div class="col-md-7">
          <h3 class="paddtop">
            List Publics Companies
          </h3>
      </div>
    <div class="col-md-2">
        <div class="btn-group" align="center">
          <button type="button" class="btn btn-info">Export</button>
          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu" role"menu" id="export-menu">
            <li id="export-to-exel"><a href="{{ url('listpublishcompanies/getExport') }}">Export to Exel</a></li>
            <li id="export-to-PDF"><a href="{{ url('listpublishcompanies/getPDF') }}">Export to PDF</a></li>
            <li class="divider"></li>
            <li></li>
          </ul>
        </div>
    </div>
    <div class="col-md-3">
     <div class="pull-right">
       <p class="btn btn-primary"><a href="{{url('/createpublishcompany')}}" class="h4">Create new Public Company</a></p>
     </div>  
   </div>  
 </div>
</div>   
@stop
@section('content')
<div class="col-md-10 col-md-offset-1 border">
  @foreach ($publishcompanies as $publishcompany)
  <div class="row borderlist">
    <div class="col-sm-2">
      <p class="h5">{{$publishcompany->name}}</p>
    </div>
    <div class="col-sm-3">
      <p class="h5">{{$publishcompany->email}}</p>
    </div>
    <div class="col-sm-2">
      <p class="h5">0{{$publishcompany->phone}}</p>
    </div>
    <div class="col-sm-3">
      <p class="h5">{{$publishcompany->address}}</p>
    </div>
    <div class="col-sm-2">
      <p class="h5"><a href="{{url('/editpublishcompany/'.$publishcompany->id)}}" class="glyphicon glyphicon-edit">Edit</a>&nbsp&nbsp&nbsp&nbsp<a href="{{url('/publishcompanydelete/'. $publishcompany->id)}}" class="glyphicon glyphicon-trash">Delete</a></p>
    </div> 
  </div> 
  @endforeach
</div>  
@stop
