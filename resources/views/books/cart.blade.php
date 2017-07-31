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
            <a href="{{ url('/books') }}" class="beta-btn primary text-center">Tiếp Tục Mua Hàng <i class="fa fa-chevron-right"></i></a>
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
                        <img class="pull-left" src="{{$item->options->image}}" width = "10%" alt=""/>
                        <div class="media-body">
                          <p class="font-large table-title">{{ $item->name }}</p>
                        </div>
                      </div>
                    </td>

                    <td class="product-price">
                      <span class="amount">{{ number_format($item->price )}}</span>
                    </td>

                    <td class="product-quantity">
                      <div class="input-group"> <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number" data-type="minus" data-field="quantity"> <span class="glyphicon glyphicon-minus"></span> </button>
                          </span>
                          <input type="text" name="quantity" class="form-control input-number" value="{{ $item->qty }}">
                          <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quantity"> <span class="glyphicon glyphicon-plus"></span> </button>
                          </span>
                      </div>
                      <!-- <form>
                          <button type="button" name="giam" value=" - "></button>
                          <span class="amount">{{ $item->qty }}</span>
                          <button name="tang" type="button" value=" + "></button>
                      </form> -->
                    </td>

                    <td class="product-subtotal">
                      <span class="amount" id="amount">{{ $item->subtotal() }}</span>
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
                <th class="product-subtotal">{{ Cart::total() }}</th>
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
    <!-- <script type="text/javascript">
      (function(){
        $('.btn-number').click(function(e){
              e.preventDefault();

              var fieldName = $(this).attr('data-field');
              var type      = $(this).attr('data-type');
              var input = $("input[name='"+fieldName+"']");
              var currentVal = parseInt(input.val());
              if (!isNaN(currentVal)) {
                  if(type == 'minus') {
                      var minValue = parseInt(input.attr('min'));
                      if(!minValue) minValue = 1;
                      if(currentVal > minValue) {
                          input.val(currentVal - 1).change();
                      }
                      if(parseInt(input.val()) == minValue) {
                          $(this).attr('disabled', true);
                      }

                  } else if(type == 'plus') {
                      var maxValue = parseInt(input.attr('max'));
                      if(!maxValue) maxValue = 9999999999999;
                      if(currentVal < maxValue) {
                          input.val(currentVal + 1).change();
                      }
                      if(parseInt(input.val()) == maxValue) {
                          $(this).attr('disabled', true);
                      }

                  }
              } else {
                  input.val(0);
              }
          });
          $('.input-number').focusin(function(){
             $(this).data('oldValue', $(this).val());
          });
          $('.input-number').change(function() {

              var minValue =  parseInt($(this).attr('min'));
              var maxValue =  parseInt($(this).attr('max'));
              if(!minValue) minValue = 1;
              if(!maxValue) maxValue = 9999999999999;
              var valueCurrent = parseInt($(this).val());

              var name = $(this).attr('name');
              if(valueCurrent >= minValue) {
                  $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
              } else {
                  alert('Sorry, the minimum value was reached');
                  $(this).val($(this).data('oldValue'));
              }
              if(valueCurrent <= maxValue) {
                  $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
              } else {
                  alert('Sorry, the maximum value was reached');
                  $(this).val($(this).data('oldValue'));
              }


          });
          $(".input-number").keydown(function (e) {
                  // Allow: backspace, delete, tab, escape, enter and .
                  if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                       // Allow: Ctrl+A
                      (e.keyCode == 65 && e.ctrlKey === true) ||
                       // Allow: home, end, left, right
                      (e.keyCode >= 35 && e.keyCode <= 39)) {
                           // let it happen, don't do anything
                           return;
                  }
                  // Ensure that it is a number and stop the keypress
                  if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                      e.preventDefault();
                  }
          });
      });
    </script> -->

@stop
