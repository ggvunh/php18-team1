@extends('layouts.front-end.master')
@section('content')
<div class="container">
  <div class="breadcrumbs">
    <ol class="breadcrumb" id="breadcrumb">
      <li><a href="{{ url('/') }}">Trang chủ</a></li>
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
      <h2 class="page-header" align="center"><span style='color:green'>{{ucwords(Auth::user()->name)}}</span>, Mật khẩu của bạn</h2>
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <form action="user/changepass/{{ Auth::user()->id }}" method="post" class="beta-form-checkout">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <h4>Thay đổi mật khẩu</h4>
            <div class="space20">&nbsp;</div>
            <div class="form-group">
              <label>Mật khẩu hiện tại</label>
              <input type="password" class="form-control" name="oldPassword" required>
              <span style="color:red">{{ $errors->first('old_password') }}</span>
            </div>
            <div class="form-group">
              <label>Mật khẩu mới</label>
              <input type="password" class="form-control" name="newPassword" required>
              <span style="color:red">{{ $errors->first('newPassword') }}</span>
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
