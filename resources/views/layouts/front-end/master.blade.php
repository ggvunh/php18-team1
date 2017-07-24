<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Book Shop </title>
		<base href="{{asset('')}}">
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
   </body>
</html>
