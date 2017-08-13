@extends('layouts.admin.master')
  @section('header')
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h3 class="paddtop">
            Soft Delete List Publics Companies
          </h3>
        </div>
        <div class="col-md-3">
	        <div class="pull-right">
	          <p class="btn btn-primary"><a href="{{ url('/createpublishcompany') }}" class="h4">Create new Public Company</a></p>
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
                      <td class="text-center"><a href="{{ url('/restorepublishcompany/'. $publishcompany->id) }}" class="glyphicon glyphicon-refresh">Restore</a></td>
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
