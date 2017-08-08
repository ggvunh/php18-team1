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
         {{--  <table class="table table-bordered jambo_table bulk_action">
          @foreach ($orderdetail as $element)

          <p> 'Mã đơn hàng'.{{$element->id}}</p>
        </br>
              <tr class="headings">
                <th class="column-title">Mã đơn hàng</th>
                <td class=" ">{{ $element->id }}</td>
              </tr>
              <tr>
                <th class="column-title">Số lượng </th>
                <td class=" ">{{ $element->quantity }}</td>
              </tr>
              <tr>
                <th class="column-title">Đơn giá</th>
                <td class=" ">{{ $element->price}}</td>
              </tr>
              <tr>
                <th class="column-title">Tên sách</th>
                <td class=" ">{{ $element->book->name }}</td>
              </tr>
              <tr>
                <th class="column-title">Ngày đặt</th>

                <td class=" ">{{ $element->order->created_at}}</td>
              </tr>
              <tr>
                <th class="column-title">Update_at</th>
                <td class=" ">{{ $element->updated_at }}</td> 
              </tr>
          @endforeach
        </table> --}}
        <table class="table table-bordered table-responsive jambo_table bulk_action">
          <thead>
            <tr class="headings">
              <th class="column-title">Mã đơn hàng</th>
              <th class="column-title">Số lượng</th>
              <th class="column-title">Đơn giá</th>
              <th class="column-title">Tên sách</th>
              <th class="column-title">Ngày đặt hàng</th>
              <th class="column-title">Ngày sửa</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($orderdetail as $element)
            <tr>
             <td class=" ">{{ $element->id }}</td>
             <td class=" ">{{ $element->quantity }}</td>
             <td class=" ">{{ $element->price}}</td>
             <td class=" ">{{ $element->book->name }}</td>
             <td class=" ">{{ $element->order->created_at}}</td>
             <td class=" ">{{ $element->updated_at }}</td>   
           </tr>
           @endforeach
         </tbody>                   
       </table>
     </div>
   </div>
 </div>
</div>
</div>
<!-- /page content -->
</div>  
@stop