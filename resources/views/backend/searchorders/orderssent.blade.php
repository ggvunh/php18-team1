@extends('layouts.admin.master')
@section('header')
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h3>
					List Orders Have Shipped
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
			<div class="col-md-2">
				<div class="btn-group export" align="center">
					<button type="button" class="btn btn-info">Export</button>
					<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
						<span class="caret"></span>
						<span class="sr-only">Toggle Dropdown</span>
					</button>
					<ul class="dropdown-menu" role"menu" id="export-menu">
						<li id="export-to-exel"><a href="{{ url('orderssent/getExport') }}">Export to Exel</a></li>
						<li id="export-to-PDF"><a href="{{ url('orderssent/getPDF') }}">Export to PDF</a></li>
						<li class="divider"></li>
						<li></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
@stop
@section('content')
<div class="content padright padleftorder">
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
								<th>Edit Status</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($orders as $order)
							<tr>
								<td><a href="{{ url('/listordersuserid/'.$order->user->id) }}"> {{ $order->user->name }}</a></td>
								<td><a href="{{ url('listorderdate/'.$order->order_date) }}">{{ $order->order_date }}</a></td>
								<td><a href="{{ url('/orderdetailorderid/'.$order->id) }}"> {{ $order->id }}</a></td>
								<td>{{ $order->address }}</td>
								<td>{{ $order->note }}</td>
								<td class="text-center">	
									<a href="{{ url('statusorder0/'. $order->id) }}"><p class="btn btn-primary btn-sm">Not Shipped</p></a>
								</td>
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
	<div class="row">
      	<div class="col-xs-4 col-xs-offset-8 paginate">
      		{!! $orders->links() !!}
      	</div>
    </div>
</div>
@stop
