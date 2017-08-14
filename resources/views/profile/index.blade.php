@extends('layouts.front-end.master')
@section('content')

<section>
	<div class="container">
		<div class="row">
			<h1>Xin chào <span style="color: green" >{{Auth::user()->name}}</span></h1>

		</div>
	</div>
</section>
<div class="container">
<section>
	<div class="breadcrumbs">
		<ol class="breadcrumb" id="breadcrumb">
			<li><a href="{{ url('/books') }}">Trang chủ</a></li>
		</ol>
	</div>
	<div class="row">
		@include('profile.menu')
		<div class="col-sm-9">
		<?php
			// <table border="0" align="center" class="table-responsive">
			// 	<tr>
			// 		<td><a href="{{ url('/order/list') }}" class="btn btn-success">Danh sách đơn hàng</a></td>
			// 		<td><a href="" class="btn btn-success">Địa chỉ của bạn</a></td>
			// 		<td><a href="" class="btn btn-success">Thay đổi mật khẩu</a></td>
			// 	</tr>
			// </table>
		?>
		<h2 class="page-header" align="center"><span style='color:green'>{{ucwords(Auth::user()->name)}}</span></h2>
		<p align="center">Đây là trang cá nhân của bạn</p>
		</div>
	</div>
</div>
</section>
@endsection
