@extends('layouts.admin.master')
  @section('header')
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <h3 class="paddtop">
            List Publics Companies
          </h3>
        </div>
        <div class="col-md-4">
          <div class="pull-right">
            <p class="btn btn-primary"><a href="{{ url('/createpublishcompany') }}" class="h4">Create new Public Company</a></p>
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
              <li id="export-to-exel"><a href="{{ url('listpublishcompanies/getExport') }}">Export to Exel</a></li>
              <li id="export-to-PDF"><a href="{{ url('listpublishcompanies/getPDF') }}">Export to PDF</a></li>
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
                    <th>Name Public Company</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th class="text-center">Features</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($publishcompanies as $publishcompany)
                    <tr>
                      <td class="text-center">{{ $loop->iteration }}</td>
                      <td>{{ $publishcompany->name }}</td>
                      <td>{{ $publishcompany->email }}</td>
                      <td>0{{ $publishcompany->phone }}</td>
                      <td>{{ $publishcompany->address }}</td>
                      <td class="text-center"><a href="{{ url('/editpublishcompany/'.$publishcompany->id) }}" class="glyphicon glyphicon-edit">Edit</a>&nbsp&nbsp&nbsp&nbsp<a href="{{ url('/publishcompanydelete/'. $publishcompany->id) }}" class="glyphicon glyphicon-trash">Delete</a></td>
                    </tr>
                  @endforeach  
                </tbody>
                  <tfoot>
                    <tr>
                      <th></th>
                      <th>Name Public Company</th>
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
            {!! $publishcompanies->links() !!}
          </div>
      </div>
    </section>
  @stop
