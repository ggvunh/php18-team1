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
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" title="style" href="front-end/assets/dest/css/huong-style.css">

	<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>
<body>
	@include('layouts.front-end.header')
	@include('themes.alert')
	@yield('content')
	@include('layouts.front-end.footer')

	<!-- <script src="js/jquery.min.js"></script> -->
    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="js/bootstrap.min.js"></script>
    <script src="js/my.js"></script> -->
	@yield('script')
</body>
			<script src="front-end/assets/dest/js/jquery-3.2.1.min.js"></script>
			<!-- <script src="front-end/assets/dest/js/cart.js"></script> -->
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
			 											<span class="cart-item-amount">S? Lu?ng :' + value.qty + '</span>\
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
						console.log(123);
						// var root = '{{url('/')}}';
						// $.get(root + 'deleteCart/' + rowId, function(data, status){
						//
						// 		//console.log(data);
						// //   $('#count').replaceWith('<span id="count">' + data.count +'</span> ');
						// 	$('#count').replaceWith('<span id="count">Gi? H�ng (' + data.count +')</span> ');
						// 	alert("�� X�a Kh?i Gi? H�ng!");
						// });
					}

					// $( document ).ready(function() {
					  function ud_find_text(self) {
					      var children = self.parentNode.getElementsByTagName('input');
					      for (var i = 0; i < children.length; i++) {
					          if (children[i].getAttribute('type') == 'text') {
					              return children[i];
					          }
					      }
					  }

					  function ud_inc(self) {
					      var text = ud_find_text(self);
					      text.value++;
					  }

					  function ud_dec(self) {
					      var text = ud_find_text(self);
					      if (text.value > 0) text.value--;
					  }

					    function down(rowId){
					        $root = '{{ url('/cart') }}';
					        $.get($root + '/' + rowId + '/' + 'downqty', function(data, status){
					            var subtotal = data.subtotal;
											console.log(data);
					            $('#' + rowId).replaceWith('<input type="text" id="' + rowId + '" name="quantity" value="' + data.qty + '">');
					            $('#amount' + rowId).replaceWith('<span class="amount" id="amount' + rowId + '">' + subtotal + '</span>');
											$('#total').replaceWith('<span id="total">' + data.total + '</span>');
									});
					    }

					    function up(rowId){
					        //console.log(rowId);
					        $root = '{{ url('/cart') }}';
					        $.get($root + '/' + rowId + '/' + 'upqty', function(data, status){
					            var subtotal = data.subtotal;
											console.log(data);
					            $('#' + rowId).replaceWith('<input type="text" id="' + rowId + '" name="quantity" value="' + data.qty + '">');
					            $('#amount' + rowId).replaceWith('<span class="amount" id="amount' + rowId + '">' + subtotal + '</span>');
											$('#total').replaceWith('<span id="total">' + data.total + '</span>');
									});
					    }

					// });

			</script>
		</body>
</html>
