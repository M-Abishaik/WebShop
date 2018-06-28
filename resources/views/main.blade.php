<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Glosys Shopping</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="e-Commerce website for Glosys">
    <meta name="author" content="Abishaik Mohan">
    <!-- Bootstrap styles -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.css') }}" />
    <!-- Customize styles -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <!-- font awesome styles -->
	<link rel="stylesheet" href="{{ url('/font-awesome/css/font-awesome.css') }}" />
		<!--[if IE 7]>
			<link href="css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicons -->
    <link rel="shortcut icon" href="{{ url('/ico/favicon.ico') }}" />
  </head>
<body>

	<?php $quantity=0; ?>
	<?php $price=0; ?>

@if(Session::has('itemName'))
		@php 
		$singleItem = Session::get('itemName');
		$singlePrice = Session::get('itemPrice');
		@endphp

		{{ $quantity = $quantity + 5 }}
		{{ $price = $price + 1000 }}

@endif
<!-- 
	Upper Header Section 
-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					<a href="https://twitter.com/login?lang=en" target="_blank"><span class="icon-twitter"></span></a>
					<a href="https://www.facebook.com/" target="_blank"><span class="icon-facebook"></span></a>
					<a href="https://www.youtube.com/" target="_blank"><span class="icon-youtube"></span></a>
					<a href="https://www.tumblr.com/" target="_blank"><span class="icon-tumblr"></span></a>
				</div>
				<a href="/home"> <span class="icon-home"></span> Home</a> 
				<a href="/register"><span class="icon-edit"></span> Register/Login </a> 
				<a href="/contact"><span class="icon-envelope"></span> Contact </a>
				<a href="/cart"><span class="icon-shopping-cart"></span> {{ $quantity }} Item(s) - <span class="badge badge-warning"> {{ $price }}$</span></a>
			</div>
		</div>
	</div>
</div>

<!--
Lower Header Section 
-->
<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span4">
	<h1>
	<a class="logo" href="/home">
		<img src = "{{ url('/img/logo-bootstrap-shoping-cart.png') }}" alt="Glosys shop">
	</a>
	</h1>
	</div>
	<div class="span4">
	<div class="offerNoteWrapper">
	<h1 class="dotmark">
	<i class="icon-cut"></i>
	<center>Glosys Shopping</center>
	</h1>
	</div>
	</div>
	<div class="span4 alignR">
	<p><br> <strong> Support (24/7) :  +91-8939407365 </strong><br><br></p>
	<span class="btn btn-mini">{{ $quantity }} <span class="icon-shopping-cart"></span></span>
	<span class="btn btn-warning btn-mini">$</span>
	<span class="btn btn-mini">&pound;</span>
	<span class="btn btn-mini">&euro;</span>
	</div>
</div>
</header>

<!--
Navigation Bar Section 
-->
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse">
			<ul class="nav">
			  <li class=""><a href="/home"> Home </a></li>
			  <li class=""><a href="/listView">List View</a></li>
			  <li class=""><a href="/gridView">Grid View</a></li>
			  <li class=""><a href="/threeView">Three Column</a></li>
			  <li class=""><a href="/fourView">Four Column</a></li>
			  <li class=""><a href="/generalView">About us</a></li>
			</ul>
			<form action="#" class="navbar-search pull-left">
			  <input type="text" placeholder="Search" class="search-query span4">
			</form>
		  </div>
		</div>
	  </div>
	</div>

	@if(Session::has('userMail'))
		@php ($mail = Session::get('userMail'))
		<p>Hello, {{ $mail }} </p>
	@endif

	@yield('body')


<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=" {{ url('/js/jquery.js') }}"></script>
	<script src=" {{ url('/js/bootstrap.min.js') }}"></script>
	<script src=" {{ url('/js/jquery.easing-1.3.min.js') }}"></script>
    <script src=" {{ url('/js/jquery.scrollTo-1.4.3.1-min.js') }}"></script>
    <script src=" {{ url('/js/shop.js') }}"></script>

  </body>
</html>