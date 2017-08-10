@extends('layouts.admin.master')
  @section('header')
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <h3 class="paddtop">
            List Author
          </h3>
        </div>
        <div class="col-md-4">
          <div class="pull-right">
            <p class="btn btn-primary"><a href="/createauthor" class="h4">Create new Author</a></p>
          </div>  
        </div>  
        <div class="col-md-2 len">
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
                    <th>Name Author</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th class="text-center">Features</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($authors as $author)
                    <tr>
                      <td class="text-center">{{ $loop->iteration }}</td>
                      <td><a href="{{ url('/books/authors/'.$author->id) }}">{{$author->name}}</a></td>
                      <td>{{$author->email}}</td>
                      <td>0{{$author->phone}}</td>
                      <td>{{$author->address}}</td>
                      <td class="text-center"><a href="{{url('/authoredit/'.$author->id)}}" class="glyphicon glyphicon-edit">Edit</a>&nbsp&nbsp&nbsp&nbsp<a href="{{url('/authordelete/'.$author->id)}}" class="glyphicon glyphicon-trash">Delete</a></td>
                    </tr>
                  @endforeach  
                </tbody>
                  <tfoot>
                    <tr>
                      <th></th>
                      <th>Name Author</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th class="text-center">Features</th>
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
            {!! $authors->links() !!}
          </div>
      </div>
    </section>
  @stop    
