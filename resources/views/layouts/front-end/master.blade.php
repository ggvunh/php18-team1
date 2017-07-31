<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Book Shop </title>
		<base href="{{ asset('') }}">
		<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="front-end/assets/dest/css/font-awesome.min.css">
		<link rel="stylesheet" href="front-end/assets/dest/vendors/colorbox/example3/colorbox.css">
		<link rel="stylesheet" href="front-end/assets/dest/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="front-end/assets/dest/rs-plugin/css/responsive.css">
		<link rel="stylesheet" title="style" href="front-end/assets/dest/css/style.css">
		<link rel="stylesheet" href="front-end/assets/dest/css/animate.css">
		<link rel="stylesheet" title="style" href="front-end/assets/dest/css/huong-style.css">

	</head>
  <body>
    	@include('layouts.front-end.header')
			<div>
      		@if(Session::has('success'))
      			<div class="alert alert-success">
      				{{ Session::get('success') }}
      			</div>
      		@endif
      		@yield('content')
  	  </div>
			@include('layouts.front-end.footer')

			<script src="front-end/assets/dest/js/jquery-3.2.1.min.js"></script>
			<script src="front-end/assets/dest/js/cart.js"></script>
			<script src="front-end/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
			<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
			<script src="front-end/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
			<script src="front-end/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
			<script src="front-end/assets/dest/vendors/animo/Animo.js"></script>
			<script src="front-end/assets/dest/vendors/dug/dug.js"></script>
			<script src="front-end/assets/dest/js/scripts.min.js"></script>
			<script src="front-end/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
			<script src="front-end/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
			<script src="front-end/assets/dest/js/jquery-ui.min.js"></script>
			<script src="front-end/assets/dest/js/wow.min.js"></script>
			<script type="text/javascript">
					(function(){
							$("#cart").on("click", function() {

									var root = '{{url('/')}}';
									var str = "";
									$.get(root + '/loadCarts', function(data, status){
											 //console.log(data);

											$.each(data.data, function (key, value) {

												 //console.log(value);
												 str += '<span class="pull-right"><button class="btn btn-xs btn-danger pull-right" onclick="deleteCart(' + value.rowId + ')">x</button></span>\
												 <div class="media">\
			 										<a class="pull-left" href="#"><img src="' + value.options.image + '" alt=""></a>\
			 										<div class="media-body">\
			 											<span class="cart-item-title">' + value.name + '</span></br>\
			 											<span class="cart-item-amount">Số Lượng :' + value.qty + '</span>\
			 										</div>\
			 									</div>';
											});


									}).then(function(){
										 	//console.log(str);
											$('.cart-item').replaceWith('<div class="cart-item">' + str + '</div>');
											// $('#cart-list').append(str);
											$(".shopping-cart").fadeToggle( "fast");
									});
							});
					})();

					function addCart(id)
					{
							var root = '{{url('/books')}}';
							$.get(root + '/' + id + '/' + 'addcart', function(data, status){

								//console.log(data);
							//   $('#count').replaceWith('<span id="count">' + data.count +'</span> ');
								$('#count').replaceWith('<span id="count">Giỏ Hàng (' + data.count +')</span> ');
								alert("Đã Thêm Vào Giỏ Hàng!");
							});
					}

					function deleteCart(rowId)
					{
						var root = '{{url('/')}}';
						$.get(root + 'deleteCart/' + rowId, function(data, status){

								//console.log(data);
						//   $('#count').replaceWith('<span id="count">' + data.count +'</span> ');
							$('#count').replaceWith('<span id="count">Giỏ Hàng (' + data.count +')</span> ');
							alert("Đã Xóa Khỏi Giỏ Hàng!");
						});
					}
			</script>
   </body>
</html>
