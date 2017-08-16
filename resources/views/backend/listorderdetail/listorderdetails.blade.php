@extends('layouts.admin.master')
  @section('header')
    <section class="content-header">
    	<div class="col-md-6">
	      <h3>
	        List Orders On Date
	        <small>(All)</small>
	      </h3>
	    </div>
	    <div class="col-md-6">
	    	<div class="form-group">
				{!! Form::open(['url' => '/searchsinceto','method'=>'get']) !!}
        			<div>
	        			<div class="form-group input-group-addon">
						  {!! Form::label('since', 'Since') !!}
						  <div class="form-controls">
						    {!! Form::date('since', null, ['class' => 'form-control']) !!}
						  </div>
						</div>
						<div class="form-group input-group-addon">
						  {!! Form::label('to', 'To') !!}
						  <div class="form-controls">
						    {!! Form::date('to', null, ['class' => 'form-control']) !!}
						  </div>
						</div> 
						<div class="form-group input-group-addon">
						  <div class="form-controls">
						  	{!! Form::submit('Search', ['class' => 'btn btn-primary pull-right']) !!}
						  </div>
						</div>   
					</div>
      			{!! Form::close() !!} 
			</div>
	    </div>

    </section>
  @stop
  @section('content')
    	<section class="content padright padleftorder">
	      <div class="row">
	        <div class="col-xs-12">
	          <div class="box">
	            <!-- /.box-header -->
	            <div class="box-body">
	              <table id="example1" class="table table-bordered table-striped">
	                <thead>
	                <tr>
	                  <th class="text-center"></th>
	                  <th class="text-center">Name Books</th>
	                  <th class="text-center">Quantity</th>
	                  <th class="text-center">Price</th>
	                  <th class="text-center">Into money</th>
	                </tr>
	                </thead>
	                <tbody>
	                	@foreach ($orderdetails as $orderdetail)
			                <tr>
			                  <td class="text-center">{{ $loop->iteration }}</td>
			                  <td>{{ $orderdetail->book->name }}</td>
			                  <td class="text-right">{{ $orderdetail->quantity }}</td>
			                  <td class="text-right">{{ $orderdetail->price }}</td>
			                  <td class="text-right">{{ $orderdetail->quantity * $orderdetail->price }}</td>
			                </tr>
			            @endforeach
	                </tbody>
	                <tfoot>
	                	<tr>
	                	  <th class="text-center"></th>
		                  <th></th>
		                  <th></th>
		                  <th class="text-right">Sum Money</th>
		                  <th class="text-right">{{ number_format($sum,0,',',',') }}đ.</th>
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
