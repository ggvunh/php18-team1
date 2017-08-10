@extends('layouts.front-end.master')

@section('content')
    <div class="container">
      <div class="space20">&nbsp;</div>
      <div class="pull-left">
				<h6 class="inner-title">Shopping Cart</h6>
        <div class="space20">&nbsp;</div>
			</div>
      <div class="pull-right">
        <div class="cart-caption">
          <div class="center">
            <a href="{{ url('/') }}" class="beta-btn primary text-center">Tiếp Tục Mua Hàng <i class="fa fa-chevron-right"></i></a>
          </div>
        </div>
			</div>

      <div id="content">
        <div class="table-responsive">
          <!-- Shop Products Table -->
          <table class="shop_table beta-shopping-cart-table" cellspacing="0">
            <thead>
              <tr>
                <th class="product-name">Product</th>
                <th class="product-price">Price</th>
                <th class="product-quantity">Qty</th>
                <th class="product-subtotal">SubTotal</th>
                <th class="product-remove">Remove</th>
              </tr>
            </thead>
            <tbody>
                @foreach(Cart::content() as $item)
                  <tr class="cart_item">
                    <td class="product-name">
                      <div class="media">
                        <img class="pull-left" src="upload/{{$item->options->image}}" width = "10%" alt=""/>
                        <div class="media-body">
                          <p class="font-large table-title">{{ $item->name }}</p>
                        </div>
                      </div>
                    </td>

                    <td class="product-price">
                      <span class="amount">{{ number_format($item->price )}}</span>
                    </td>

                    <td class="product-quantity">
                      <div class="input-group">
                          <span class="input-group-btn">
                            <input class="btn btn-default btn-number" type="button" name="giam" value="-" onclick="down('{{$item->rowId}}')">
                          </span>
                          <input class="text-right" type="text" id="{{ $item->rowId }}" name="quantity" value="{{ $item->qty }}">
                          <span class="input-group-btn">
                            <input class="btn btn-default btn-number" name="tang" type="button" value="+" onclick="up('{{ $item->rowId}}')">
                          </span>
                      </div>

                    </td>

                    <td class="product-subtotal">
                      <span class="amount" id="amount{{ $item->rowId }}">{{ $item->subtotal() }}</span>
                    </td>

                    <td class="product-remove">
                      <a href="{{ url('/deleteCart/' . $item->rowId) }}" class="remove" title="Remove this item" onclick="deleteCart({{ $item->id }})"><i class="fa fa-trash-o"></i></a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
            <thead>
              <tr>
                <th class="product-name">Total</th>
                <th class="product-price"></th>
                <th class="product-quantity"></th>
                <th class="product-subtotal"><span id="total">{{ Cart::total() }}</span></th>
                <th class="product-remove"></th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <td colspan="6" class="actions">
                  <div class="pull-right">
                    <div class="cart-caption">
                      <div class="center">
                          <a href="{{ url('/cartcheckout') }}" class="beta-btn primary text-center">Check Out <i class="fa fa-chevron-right"></i></a>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            </tfoot>
          </table>
          <!-- End of Shop Table Products -->
        </div>
        <!-- End of Cart Collaterals -->
        <div class="clearfix"></div>

      </div> <!-- #content -->
    </div> <!-- .container -->
@stop
