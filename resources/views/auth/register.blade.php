@extends('layouts.front-end.master')
@section('content')
<div class="container">
	<div id="content">

		<form action="user/register" method="post" class="beta-form-checkout">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="row">
				<div class="col-sm-3"></div>
				@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				<div class="col-sm-6">
					<h4>Đăng kí</h4>
					<div class="space20">&nbsp;</div>


					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control"  name="email" required>
					</div>

					<div class="form-group">
						<label for="name">Tên</label>
						<input type="text" class="form-control" name="name" required>
					</div>

					<div class="form-group">
						<label for="adress">Địa chỉ</label>
						<input type="text" class="form-control" name="address"  required>
					</div>


					<div class="form-group">
						<label for="phone">Số điện thoại</label>
						<input type="text" class="form-control" name="phone" required>
					</div>
					<div class="form-group">
						<label for="phone">Mật khẩu</label>
						<input type="password" class="form-control" name="password" required>
					</div>
					<div class="form-group">
						<label for="phone">Nhập lại mật khẩu</label>
						<input type="password" class="form-control" name="re_password" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-info btn-primary">Đăng kí</button>
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</form>
	</div> <!-- #content -->
</div> <!-- .container -->
@endsection
