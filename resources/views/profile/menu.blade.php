<div class="col-sm-3 well">
	<ol class="nav navbar"> 
		<h3 class="nav-header">Danh sách</h3>
		<li><a href="{{ url('order/profile') }}">Trang cá nhân</a></li>
		<li><a href="{{ url('order/list/'.Auth::user()->id)}}">Danh sách đơn hàng</a></li>
		<li><a href="{{ url('user/info/'.Auth::user()->id)}}">Thay đổi thông tin</a></li>
	</ol>
</div>