@extends('layouts.front-end.master')
@section('content')
<section>
  <div class="container">
    <div class="breadcrumbs">
      <ol class="breadcrumb" id="breadcrumb">
        <li><a href="{{ url('/books') }}">Trang chủ</a></li>
        <li class=>Mât khẩu</li>
      </ol>
    </div>
    <div class="row">
      @include('profile.menu');
      <div class="col-sm-9">
        <h2 class="page-header" align="center"><span style='color:green'>{{ucwords(Auth::user()->name)}}</span>,Mật khẩu của bạn</h2>
      </div>
    </div>
  </div>
  @endsection