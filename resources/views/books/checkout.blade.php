@extends('layouts.front-end.master')

@section('content')
    <div class="inner-header">
      <div class="container">
        <div class="pull-left">
          <h6 class="inner-title">Đặt hàng</h6>
        </div>
        <div class="pull-right">

        </div>
        <div class="clearfix"></div>
      </div>
    </div>

    <div class="container">
      <div id="content">
        <form action="{{ url('/cartsave') }}"  method="post" class="beta-form-checkout">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-sm-6">
              <h4>Đặt hàng</h4>
              <div class="space20">&nbsp;</div>

              <div class="form-block">
                <label for="adress">Địa chỉ*</label>
                <input type="text" id="adress" name="adress" placeholder="Street Address">
              </div>

              <div class="form-block">
                <label for="phone">Điện thoại*</label>
                <input type="text" id="phone" name="phone">
              </div>

              <div class="form-block">
                <label for="notes">Ghi chú</label>
                <textarea id="notes" name="notes"></textarea>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="your-order">
                <div class="your-order-head"><h5>Đơn hàng của bạn</h5></div>
                <div class="your-order-body" style="padding: 0px 10px">
                  <div class="your-order-item">
                    <div>
                    <!--  one item	 -->
                        @foreach(Cart::content() as $item)
                          <div class="media">
                            <img width="10%" src="{{$item->options->image}}" alt="" class="pull-left">
                            <div class="media-body">
                              <p class="font-large">{{$item->name}}</p>
                              <span class="color-gray your-order-info">Sô Lượng : {{ $item->qty }} </span>
                            </div>
                          </div>
                        @endforeach
                    <!-- end one item -->
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="your-order-item">
                    <div class="pull-left"><p class="your-order-f18">Tổng tiền : </p></div>
                    <div class="pull-right"><h5 class="color-black">{{ Cart::total() }}</h5></div>
                    <div class="clearfix"></div>
                  </div>
                </div>
                <div class="text-center">
                    <button type="destroy" name="submit" value="destroy" class="beta-btn primary"><i class="fa fa-chevron-left"></i> Hủy đơn hàng </button>
                    <button type = "submit" name="submit" value="submit" class="beta-btn primary">Đặt hàng <i class="fa fa-chevron-right"></i></button>
                </div>
              </div> <!-- .your-order -->
            </div>
          </div>
        </form>
      </div> <!-- #content -->
    </div> <!-- .container -->
@stop
