<!DOCTYPE html>
<html lang="">
	<head>
		<base href="{{asset('')}}">
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<meta name="description" value="Using the build-in cover-, scroll- and uncover-effects, these three jQuery carousels placed on top of each other create a pretty cool effect." />
		<meta name="keywords" value="sequence, carousel, uncover, uncovering, jquery" />
		{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
		<link rel="stylesheet" type="text/css" href="css/Index.css">
		<link rel="stylesheet" href="css/contact.css"/>
		<link rel="stylesheet" type="text/css" href="css/news.css">
		<link rel="stylesheet" type="text/css" href="css/partner.css">
		<link rel="stylesheet" type="text/css" href="css/test.css" />
		<link rel="stylesheet" type="text/css" href="css/topic_infor.css" />
		<link rel="stylesheet"  href="{{asset('css/app.css')}}">
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/jquery.countdown.js')}}"></script>

	</head>
	<body>
		@include('layouts.header')
        @yield('content')
        @include('layouts.footer')
    </body>
</html>
