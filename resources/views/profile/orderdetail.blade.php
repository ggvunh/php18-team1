@extends('layouts.front-end.master')
@section('content')
<div class="container">
  <div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Chi tiết<small>hóa đơn</small></h2>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">
        <div class="table-responsive">
          <table class="table table-bordered jambo_table bulk_action">
              <tr class="headings">
                <th class="column-title">Mã đơn hàng</th>
                <td class=" ">{{ $orderdetail->id }}</td>
              </tr>
              <tr>
                <th class="column-title">Số lượng </th>
                <td class=" ">{{ $orderdetail->quantity }}</td>
              </tr>
              <tr>
                <th class="column-title">Đơn giá</th>
                <td class=" ">{{ $orderdetail->price}}</td>
              </tr>
              <tr>
                <th class="column-title">Tên sách</th>
                <td class=" ">{{ $orderdetail->book->name }}</td>
              </tr>
              <tr>
                <th class="column-title">Ngày đặt</th>

                <td class=" ">{{ $orderdetail->order->created_at}}</td>
              </tr>
              <tr>
                <th class="column-title">Update_at</th>
                <td class=" ">{{ $orderdetail->updated_at }}</td> 
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- /page content -->
</div>  
@stop