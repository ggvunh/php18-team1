@extends('layouts.front-end.master')
@section('content')
<div class="container">
  <div class="breadcrumbs">
    <ol class="breadcrumb" id="breadcrumb">
      <li><a href="{{ url('/books') }}">Trang chủ</a></li>
      <li class="">Đặt hàng</li>
    </ol>
  </div>
  @if(count($errors) > 0)
  <div class="alert alert-danger">
    @foreach($errors->all() as $err)
    {{ $err }}<br>
    @endforeach
  </div>
  @endif

  @if(session('thongbao'))
  <div class="alert alert-success">
    {{ session('thongbao') }}
  </div>
  @endif
  <div class="row">
    @include('profile.menu');
    <div class="col-sm-9">
      <h2 class="page-header" align="center"><span style='color:green'>{{ucwords(Auth::user()->name)}}</span>, thông tin của bạn</h2>
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <form action="user/info/{{ Auth::user()->id }}" method="post" class="beta-form-checkout">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <h4>Thay đổi thông tin</h4>
            <div class="space20">&nbsp;</div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control"  name="email" value="{{ $user->email }}" required readonly="">
              <span style="color:red">{{ $errors->first('email') }}</span>
            </div>

            <div class="form-group">
              <label for="name">Tên</label>
              <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
              <span style="color:red">{{ $errors->first('name') }}</span>
            </div>

            <div class="form-group">
              <label for="adress">Địa chỉ</label>
              <input type="text" class="form-control" name="address" value="{{ $user->address }}" required>
              <span style="color:red">{{ $errors->first('address') }}</span>
            </div>
            <div class="form-group">
              <label for="phone">Số điện thoại</label>
              <input type="text" class="form-control" name="phone" value="{{ $user->phone }}" required>
              <span style="color:red">{{ $errors->first('phone') }}</span>
            </div>
            <div class="form-group" align="center">
              <button type="submit" class="btn btn-info btn-primary">Thay đổi</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

{{-- @section('script')
  <script src="/javascripts/application.js" type="text/javascript" charset="utf-8" async defer>
    $(document).ready(function(){
      $("#changepassword").change(function(){
        if($(this).is(":checked"))
        {
          $(".password").removeAttr('disabled');
        }
        else
        {
          $(".password").attr('disabled','');
        }
      });
    });

  </script>
@endsection
 --}}
