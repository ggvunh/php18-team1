@extends('layouts.admin.master')
  @section('header')
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h3 class="paddtop">
            List Books
          </h3>
        </div>
        <div class="col-md-3">
	        <div class="pull-right">
	          <p class="btn btn-primary"><a href="/createbook" class="h4">Create new Book</a></p>
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
                    <th>Name Book</th>
                    <th>Name Author</th>
                    <th class="text-center">Features</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($books as $book)
                    <tr>
                      <td>{{$book->name}}</td>
                      <td>{{$book->author->name}}</td>
                      <td class="text-center"><a href="{{url('/bookedit/'.$book->id)}}" class="glyphicon glyphicon-edit">Edit</a>&nbsp&nbsp&nbsp&nbsp<a href="{{url('/bookdelete/'.$book->id)}}" class="glyphicon glyphicon-trash">Delete</a></td>
                    </tr>
                  @endforeach  
                </tbody>
                  <tfoot>
                    <tr>
                      <th>Name Book</th>
                      <th>Name Author</th>
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
    </section>
  @stop
