<div id="header">
  <div class="header-top">
  	<div class="container">
  		<div class="pull-left auto-width-left">
  			<ul class="top-menu menu-beta l-inline">
  				<li><a href=""><i class="fa fa-home"></i> Địa chỉ cửa hàng </a></li>
  				<li><a href=""><i class="fa fa-phone"></i> số điện thoại</a></li>
  			</ul>
  		</div>
  		<div class="pull-right auto-width-right">
  			<ul class="top-details menu-beta l-inline">

        {{-- @if(Auth::chech()->is_admin ==1)
        <a href="{{ url('/listorders') }}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> --}}
         @if(Auth::check())
         <li><a href="{{ url('order/profile') }}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>{{Auth::user()->name}}</a></li>
         <li><a href="{{ url('/logout') }}"></span>Đăng xuất</a></li>
         @else
         <li><a href="{{ url('user/register') }}"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>Đăng kí</a></li>
         <li><a href="{{ url('/login') }}">Đăng nhập</a></li>
         @endif
       </ul>
  		</div>
  		<div class="clearfix"></div>
  	</div> <!-- .container -->
 </div> <!-- .header-top -->
 <div class="header-body">
   <div class="container beta-relative">
    <div class="pull-left">
      <a href="{{ url('/') }}" id="logo"><img src="front-end/assets/dest/images/logo-book.png" width="200px" alt=""></a>
    </div>
    <div class="pull-right beta-components space-left ov">
     <div class="space10">&nbsp;</div>
     <div class="beta-comp">
      <form role="search" method="get" id="searchform" action="/">
       <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
       <button class="fa fa-search" type="submit" id="searchsubmit"></button>
     </form>
   </div>

            <div class="beta-comp">
              <div class="cart">
                  <div class="beta-select" id = "cart"><i class="fa fa-shopping-cart"></i><span id="count">Giỏ Hàng ({{ \Cart::count() }})</span> <i class="fa fa-chevron-down"></i></div>
                  <ul class="beta-dropdown cart-body">
                        <div class="cart-item">

                        </div>
                        <div class="cart-caption">
                          <div class="center">
                            <div class="space10">&nbsp;</div>
                            <a href="{{ url('/cartshow') }}" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
                          </div>
                        </div>
                  </ul>
                </div>
            </div>
  		</div>
  		<div class="clearfix"></div>
  	</div> <!-- .container -->
  </div> <!-- .header-body -->
  <div class="header-bottom" style="background-color: #0277b8;">
  	<div class="container">
  		<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
  		<div class="visible-xs clearfix"></div>
  		<nav class="main-menu">
  			<ul class="l-inline ov">
  				<li><a href=" {{ url('/') }} ">Trang chủ</a></li>
  				<li><a href="#">Chủ Đề</a>
  					<ul class="sub-menu">
                @foreach($topics as $topic)
  						      <li><a href="{{url('/books/topics/' . $topic->id)}}">{{ $topic->name }}</a></li>
                @endforeach
  					</ul>
  				</li>
  				<li><a href="about.html">Giới thiệu</a></li>
  				<li><a href="contacts.html">Liên hệ</a></li>
  			</ul>
  			<div class="clearfix"></div>
  		</nav>
  	</div> <!-- .container -->
  </div> <!-- .header-bottom -->
</div>
