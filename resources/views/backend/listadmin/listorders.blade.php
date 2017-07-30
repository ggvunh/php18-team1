@extends('layouts.admin.master')
  @section('header')
    <section class="content-header">
    	<div class="col-md-6">
	      <h3>
	        List Orders
	        <small>All </small>
	      </h3>
	    </div>
	    <div class="col-md-6">
	    	<div class="form-group">
               {!! Form::open(['url' => '/searchsinceto','method'=>'post']) !!}
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
	                  <th>Account</th>
	                  <th>Order Date</th>
	                  <th>Order ID</th>
	                  <th>Address</th>
	                  <th>Note</th>
	                  <th>Status Order</th>
	                  <th>Shipping Status</th>
	                </tr>
	                </thead>
	                <tbody>
	                	@foreach ($orders as $order)
			                <tr>
			                  <td><a href="{{url('/listordersuserid/'.$order->user->id)}}"> {{$order->user->name}}</a></td>
			                  <td><a href="{{url('listorderdate/'.$order->order_date)}}"> {{$order->order_date}}</a></td>
			                  <td><a href="{{url('/orderdetailorderid/'.$order->id)}}">{{$order->id}}</a></td>
			                  <td>{{$order->address}}</td>
			                  <td>{{$order->note}}</td>
			                  <td>{{$order->status_order}}</td>
			                  <td>{{$order->shipping_status}}</td>
			                </tr>
			            @endforeach
	                </tbody>
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