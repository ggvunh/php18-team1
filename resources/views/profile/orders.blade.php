@extends('layouts.front-end.master')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <script src="//code.jquery.com/jquery.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <link rel="stylesheet" title="style" href="front-end/assets/dest/css/huong-style.css">
@section('content')
<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-lg-offset-3">
      </div>
    </div>
  </section>
  <div class="container">
    <div class="breadcrumbs">
     <ol class="breadcrumb" id="breadcrumb">
      <li><a href="{{ url('/books') }}">Trang chủ</a></li>
    </ol>
  </div>
  @include('profile.menu');
  <div class="col-sm-9">
    <h2 class="page-header" align="center"><span style='color:green'>{{ucwords(Auth::user()->name)}}</span>, đây là đơn hàng của bạn</h2>
    <div class="col-md-2">
      <div class="btn-group export" align="center">
        <button type="button" class="btn btn-info">Export</button>
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
          <span class="caret"></span>
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu" role"menu" id="export-menu">
          <li id="export-to-exel"><a href="{{ url('ordersinfo/'.Auth::user()->id.'/getExport') }}">Export to Exel</a></li>
          <li id="export-to-PDF"><a href="{{ url('orderinfo/getPDF') }}">Export to PDF</a></li>
          <li class="divider"></li>
          <li></li>
        </ul>
      </div>
    </div>
    <div class="space10">&nbsp;</div>
    <div>
      <table class="table table-bordered table-responsive jambo_table bulk_action">
        <thead>
          <tr class="headings">
            <th class="column-title">ID </th>
            <th class="column-title">Ngày đặt hàng </th>
            <th class="column-title">Tình trạng đơn hàng </th>
            <th class="column-title">Số điện thoại</th>
            <th class="column-title">Tình trạng chuyển hàng</th>
            <th class="column-title">Ghi chứ</th>
            <th class="column-title">Điạ chỉ</th>
            <th class="column-title">Tên người đặt</th>
            <th class="column-title">Ngày tạo hóa đơn</th>
            <th class="column-title">Ngày sửa</th>
            <th class="column-title no-link last"><span class="nobr">Chi tiết hóa đơn</span> </th>
            <th class="column-title no-link last"><span class="nobr">Hủy đơn hàng</span> </th>
          </thead>

          <tbody>
           @foreach($order as $od)
           <tr class="even pointer">
            <td class=" ">{{ $od->id }}</td>
            <td class=" ">{{ $od->order_date }}</td>
            <td class=" ">
              @if ($od->status_order == 1)
              {{ "Đã thanh toán" }}
              @else
              {{ "Chưa thanh toán" }}
              @endif
            </td>
            <td class=" ">{{ $od->user->phone}}</td>
            <td class=" ">
             @if ($od->shipping_status == 1)
             {{ "Đã chuyển" }}
             @elseif($od->status_order == 0)
             {{ "Chưa chuyển" }}
             @else
             {{ "Chưa chuyển" }}
             @endif
           </td>
           @php
           $url=url('order/'.$od->id).'/orderdetail';
           @endphp
           <td class=" ">{{ $od->note }}</td>
           <td class=" ">{{ $od->address }}</td>
           <td class=" ">{{ ucwords($od->user->name) }}</td>
           <td class=" ">{{ $od->created_at }}</td>
           <td class=" ">{{ $od->updated_at }}</td>
           <td class=" last"><a href="{{$url}}">Chi tiết</a>
             <td class=" onClick="delete">
              @if ($od->deleted_at != null)
              <p>Đã hủy</p>
              @else
              <a href="order/delete/{{ $od->id }}">Hủy</a>
              @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

    </div>
  </div>
</div>
<div>
</div>
</div>
@endsection
@section('script')
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{  asset('sweetalert.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="sweetalert.css">
<script src="/javascripts/application.js" type="text/javascript" charset="utf-8" async defer>
  function delete()
  {
    swal("Good job!", "You clicked the button!", "success")
  }
</script>
@endsection
