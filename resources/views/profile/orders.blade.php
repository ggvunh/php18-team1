@extends('layouts.front-end.master')
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
				<li class="active">Đặt hàng</li>
			</ol>
		</div>
		<div class="row">
     @if(session('thongbao'))
            <div class="alert alert-success">
                {{ session('thongbao') }}
            </div>
            @endif
		@include('profile.menu');
		<div class="col-sm-9">
		<h2 class="page-header" align="center"><span style='color:green'>{{ucwords(Auth::user()->name)}}</span>, đây là đơn hàng của bạn</h2>
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
              <th class="column-title">Ngày đặt hàng</th>
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
               @else
               {{ "Chưa chuyển" }}
               @endif
             </td>
             <td class=" ">{{ $od->note }}</td>
             <td class=" ">{{ $od->address }}</td>
             <td class=" ">{{ ucwords($od->user->name) }}</td>
             <td class=" ">{{ $od->created_at }}</td>
             <td class=" ">{{ $od->updated_at }}</td>
             <td class=" last"><a href="{{ url('order/listdetail/'.$od->order_detail->id) }}">Chi tiết</a>
             <td class=" last"><a href="order/delete/{{ $od->id }}">Hủy</a>
             </td>     
           </tr>
            @endforeach
           </tbody>                   
       </table>
	</div>
	</div>
	</div>
@endsection