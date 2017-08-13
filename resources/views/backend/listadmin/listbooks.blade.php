@extends('layouts.admin.master')
@section('header')
<div class="container">
  <div class="row">
    <div class="col-md-5">
      <h3 class="paddtop">
        List Books
      </h3>
    </div>
    <div class="col-md-4">
     <div class="pull-right">
       <p class="btn btn-primary"><a href="/createbook" class="h4">Create new Book</a></p>
     </div>  
   </div> 
   <div class="col-md-2">
      <div class="btn-group" align="center">
        <button type="button" class="btn btn-info">Export</button>
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
          <span class="caret"></span>
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu" role"menu" id="export-menu">
        <li id="export-to-exel"><a href="{{ url('listbooks/getExport') }}">Export to Exel</a></li>
        <li id="export-to-PDF"><a href="{{ url('listbooks/getPDF') }}">Export to PDF</a></li>
          <li class="divider"></li>
          <li></li>
        </ul>
      </div>
    </div> 
 </div>
</div>   
@stop
@section('content')
<section class="content padtop">
  <div class="row">
    <div class="col-xs-12">
      <!-- /.box -->
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Table With Full Features</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped ">
            <thead>
              <tr>
                <th></th>
                <th>Name Book</th>
                <th>Name Author</th>
                <th>Features</th>
              </tr>
            </thead>
            <tbody>
              @foreach($books as $book)
              <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td><a href="{{url('/books/'.$book->id)}}">{{$book->name}}</a></td>
                <td><a href="{{url('/books/authors/'.$book->author->id)}}">{{$book->author->name}}</a></td>
                <td><a href="{{url('/bookedit/'.$book->id)}}" class="glyphicon glyphicon-edit">Edit</a>&nbsp&nbsp&nbsp&nbsp<a href="{{url('/bookdelete/'.$book->id)}}" class="glyphicon glyphicon-trash">Delete</a></td>
              </tr>
              @endforeach  
            </tbody>
            <tfoot>
              <tr>
                <th></th>
                <th>Name Book</th>
                <th>Name Author</th>
                <th>Features</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-xs-4 col-xs-offset-8 paginate">
      {!! $books->render() !!}
    </div>
  </div>
</section>
@stop