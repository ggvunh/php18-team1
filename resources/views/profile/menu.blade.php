<div class="col-sm-3 well">
	<ol class="nav navbar"> 
	<h3 class="nav-header">Danh sách</h3>
	 <li class="{{is_current_route('order/profile')}}"><a href="{{ url('order/profile') }}">Trang cá nhân</a></li>
	<li class="{{is_current_route('order/list/*')}}"><a href="{{ url('order/list/'.Auth::user()->id)}}">Danh sách đơn hàng</a></li>
	<li class="{{is_current_route('user/info/*')}}"><a href="{{ url('user/info/'.Auth::user()->id)}}">Thay đổi thông tin</a></li>
	<li class="{{is_current_route('user/changepass/*')}}"><a href="{{ url('user/changepass/'.Auth::user()->id)}}">Thay đổi mật khẩu</a></li>
	</ol>
</div>
