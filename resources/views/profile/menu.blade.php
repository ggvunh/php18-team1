<div class="col-sm-3 well">
	{{-- <ol class="nav navbar"> 
		<h3 class="nav-header">Danh sách</h3>
		<li class="{{ active_menu(Route::currentRouteName(), 'order/profile', 0, 8) }}"><a href="{{ url('order/profile') }}">Trang cá nhân</a></li>
		<li class="{{ active_menu(Route::currentRouteName(), 'order/list/*', 0, 8) }}"><a href="{{ url('order/list/'.Auth::user()->id)}}">Danh sách đơn hàng</a></li>
		<li class="{{ active_menu(Route::currentRouteName(), 'user/info/*', 0, 8) }}"><a href="{{ url('user/info/'.Auth::user()->id)}}">Thay đổi thông tin</a></li>
		<li><a href="{{ url('user/changepass/'.Auth::user()->id)}}">Thay đổi mật khẩu</a></li>
	</ol>
 --}}

	<ol class="nav navbar"> 
	<h3 class="nav-header">Danh sách</h3>
	 <li class="{{is_current_route('order/profile')}}"><a href="{{ url('order/profile') }}">Trang cá nhân</a></li>
	<li class="{{is_current_route('order/list/*')}}"><a href="{{ url('order/list/'.Auth::user()->id)}}">Danh sách đơn hàng</a></li>
	<li class="{{is_current_route('user/info/*')}}"><a href="{{ url('user/info/'.Auth::user()->id)}}">Thay đổi thông tin</a></li>
	<li><a href="{{ url('user/changepass/'.Auth::user()->id)}}">Thay đổi mật khẩu</a></li>
	</ol>
</div>