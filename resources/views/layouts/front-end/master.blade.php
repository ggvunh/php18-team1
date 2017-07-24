<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Book Shop </title>
	<base href="{{ asset('') }}" target="_blank, _self, _parent, _top">
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
	<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>
<body>
	@include('layouts.front-end.header')
	@include('themes.alert')
	@yield('content')
	@include('layouts.front-end.footer')
</body>
</html>
