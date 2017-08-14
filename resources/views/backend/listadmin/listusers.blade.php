@extends('layouts.admin.master')
@section('header')
<div class="container">
  <div class="row">
    <div class="col-md-5">
      <h3 class="paddtop">
        List Users
      </h3>
    </div>
    <div class="col-md-4">
      {!! Form::open(['url' => '/searchuser','method'=>'get']) !!}
        <div class="input-group">
          {!! Form::text('key', null, ['class' => 'form-control','placeholder'=>'seach user...']) !!}
          <span class="input-group-btn">
            {{ Form::button('<i class="fa fa-search"></i>', ['type' => 'submit', 'class' => 'btn btn-default'] )  }}
          </span>
        </div>
      {!! Form::close() !!}
    </div>
    <div class="col-md-2">
      <div class="btn-group" align="center">
        <button type="button" class="btn btn-info">Export</button>
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
          <span class="caret"></span>
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu" role"menu" id="export-menu">
        <li id="export-to-exel"><a href="{{ url('listusers/getExport') }}">Export to Exel</a></li>
        <li id="export-to-PDF"><a href="{{ url('listusers/getPDF') }}">Export to PDF</a></li>
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
                  <th>Name User</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Account</th>
                  <th class="text-center">Features</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                  <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td><a href="{{ url('/listordersuserid/'.$user->id) }}">{{ $user->name }}</a></td>
                    <td>{{ $user->email }}</td>
                    <td>0{{ $user->phone }}</td>
                    <td>{{ $user->address }}</td>
                    <td>
                      @if ($user->is_admin==1)
                        Admin
                      @else
                        User
                      @endif    
                    </td>
                    <td class="text-center"><a href="{{ url('/userdelete/'.$user->id) }}" class="glyphicon glyphicon-trash">Delete</a></td>
                  </tr>
                @endforeach  
              </tbody>
                <tfoot>
                  <tr>
                    <th></th>
                    <th>Name User</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Account</th>
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
        @if(isset($key))
          {!! $users->appends(['key'=> $key])->links() !!}
        @else
          {!! $users->links() !!}
        @endif  
      </div>
    </div>
  </section>
@stop