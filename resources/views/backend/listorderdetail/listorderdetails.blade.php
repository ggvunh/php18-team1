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
               {!! Form::open(['url' => '/createbook','method'=>'post', 'enctype' => 'multipart/form-data']) !!}
        			<div>
	        			<div class="form-group input-group-addon">
						  {!! Form::label('from', 'From') !!}
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
	                  <th>Order ID</th>
	                  <th>Name Books</th>
	                  <th>Quantity</th>
	                  <th>Price</th>
	                  <th>Into money</th>
	                </tr>
	                </thead>
	                <tbody>
	                	@foreach ($orderdetails as $orderdetail)
			                <tr>
			                  <td>{{$orderdetail->order->id}}</td>
			                  <td>{{$orderdetail->book->name}}</td>
			                  <td class="text-right">{{$orderdetail->quantity}}</td>
			                  <td class="text-right">{{$orderdetail->price}}</td>
			                  <td class="text-right">{{$orderdetail->quantity * $orderdetail->price}}</td> 
			                </tr>
			            @endforeach
	                </tbody>
	                <tfoot>
	                	<tr>
		                  <th></th>
		                  <th></th>
		                  <th></th>
		                  <th>Sum Money</th>
		                  <th class="text-right">{{$sum}}</th>
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