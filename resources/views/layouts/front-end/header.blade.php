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
  				<li><a href="{{ url('register') }}">Đăng kí</a></li>
  				<li><a href="{{ url('login') }}">Đăng nhập</a></li>
  			</ul>
  		</div>
  		<div class="clearfix"></div>
  	</div> <!-- .container -->
  </div> <!-- .header-top -->
  <div class="header-body">
  	<div class="container beta-relative">
  		<div class="pull-left">
  			 <a href="index.html" id="logo"><img src="front-end/assets/dest/images/logo-book.jpg" width="200px" alt=""></a>
  		</div>
  		<div class="pull-right beta-components space-left ov">
    			 <div class="space10">&nbsp;</div>
    			 <div class="beta-comp">
    				    <form role="search" method="get" id="searchform" action="/books/search">
    			           <input type="text" value="" name="key" id="s" placeholder="Nhập từ khóa..." />
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
  				<li><a href=" {{ url('/books') }} ">Trang chủ</a></li>
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
