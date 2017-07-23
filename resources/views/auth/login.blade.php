@extends('layouts.front-end.master')
@section('content')
<div class="container">
	<div id="content">
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		@if(session('thongbao'))
		<div class="alert alert-success">
			{{ session('thongbao') }}
		</div>
		@endif
		<form action="login" method="POST" class="beta-form-checkout">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<h4>Đăng nhập</h4>
					<div class="space20">&nbsp;</div>
					<div class="form-group">
						<label for="name">User_name</label>
						<input class="form-control"  name="name" type="text" autofocus>
					</div> 
					<div class="form-group">
						<label for="phone">Email</label>
						<input class="form-control"  name="email" type="email" autofocus>
					</div>
					<div class="form-group">
						<label for="phone">Password</label>
						<input class="form-control"  name="password" type="password" autofocus>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-info btn-primary">Login</button>
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</form>
	</div> <!-- #content -->
</div> <!-- .container -->
@endsection