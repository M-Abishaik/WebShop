@extends('main')

@section('body')

<div class="row">
<div id="sidebar" class="span3">
<div class="well well-small">
	<ul class="nav nav-list">
		<li><a href="/products"><span class="icon-chevron-right"></span>Modern Jewelry</a></li>
		<li><a href="/products"><span class="icon-chevron-right"></span>Watches</a></li>
		<li><a href="/products"><span class="icon-chevron-right"></span>Fine Jewelry</a></li>
		<li><a href="/products"><span class="icon-chevron-right"></span>Fashion Jewelry</a></li>
		<li><a href="/products"><span class="icon-chevron-right"></span>Engagement & Wedding</a></li>
		<li><a href="/products"><span class="icon-chevron-right"></span>Men's Jewelry</a></li>
		<li><a href="/products"><span class="icon-chevron-right"></span>Vintage & Antique</a></li>
		<li><a href="/products"><span class="icon-chevron-right"></span>Loose Diamonds </a></li>
		<li><a href="/products"><span class="icon-chevron-right"></span>Loose Beads</a></li>
		<li><a href="/products"><span class="icon-chevron-right"></span>See All Jewelry & Watches</a></li>
		<li style="border:0"> &nbsp;</li>
		<li> <a class="totalInCart" href="/cart"><strong>Total Amount  <span class="badge badge-warning pull-right" style="line-height:18px;">$448.42</span></strong></a></li>
	</ul>
</div>
			  <div class="well well-small" ><img src="{{ url('/img/paypal.jpg') }}" alt="payment method paypal"></div>
			
			<a class="shopBtn btn-block" href="/fourView">Upcoming products <br><small>Click to view</small></a>
			<br>
			<br>
			<ul class="nav nav-list promowrapper">
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src=" {{ url('/img/bootstrap-ecommerce-templates.png') }}" alt="Product 1">
				<div class="caption">
				  <h4><a class="defaultBtn" href="/productDetails">VIEW</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
		  </ul>

	</div>
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="/home">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>
	<h3> Create your Glosys Account!</h3>	
	<hr class="soft"/>
	<div class="well">
	<form method="post" class="form-horizontal" action="/registerUser">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<h3>Your Personal Details</h3>
		<div class="control-group">
			<label class="control-label" for="inputFname">First name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="first_name" placeholder="First Name">
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLname">Last name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="last_name" placeholder="Last Name">
			</div>
		 </div>
		 <div class="control-group">
		<label class="control-label" for="inputPhone">Phone <sup>*</sup></label>
		<div class="controls">
		  <input type="tel" name="mobile_no" placeholder="Contact number">
		</div>
	  </div>	
		<div class="control-group">
		<label class="control-label" for="inputEmail">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="text" name="email" placeholder="Email">
		</div>
	  </div>	  
		<div class="control-group">
		<label class="control-label">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" name="password" placeholder="Password">
		</div>
	  </div>
		<div class="control-group">
		<label class="control-label">Date of Birth <sup>*</sup></label>
		<div class="controls">
		  <select class="span1" name="days">
				<option value="">-</option>
					<option value="1">1&nbsp;&nbsp;</option>
					<option value="2">2&nbsp;&nbsp;</option>
					<option value="3">3&nbsp;&nbsp;</option>
					<option value="4">4&nbsp;&nbsp;</option>
					<option value="5">5&nbsp;&nbsp;</option>
					<option value="6">6&nbsp;&nbsp;</option>
					<option value="7">7&nbsp;&nbsp;</option>
			</select>
			<select class="span1" name="days">
				<option value="">-</option>
					<option value="1">1&nbsp;&nbsp;</option>
					<option value="2">2&nbsp;&nbsp;</option>
					<option value="3">3&nbsp;&nbsp;</option>
					<option value="4">4&nbsp;&nbsp;</option>
					<option value="5">5&nbsp;&nbsp;</option>
					<option value="6">6&nbsp;&nbsp;</option>
					<option value="7">7&nbsp;&nbsp;</option>
			</select>
			<select class="span1" name="days">
				<option value="">-</option>
					<option value="1">1&nbsp;&nbsp;</option>
					<option value="2">2&nbsp;&nbsp;</option>
					<option value="3">3&nbsp;&nbsp;</option>
					<option value="4">4&nbsp;&nbsp;</option>
					<option value="5">5&nbsp;&nbsp;</option>
					<option value="6">6&nbsp;&nbsp;</option>
					<option value="7">7&nbsp;&nbsp;</option>
			</select>
		</div>
	  </div>
	<div class="control-group">
		<div class="controls">
		 <input type="submit" name="registerAccount" value="Register" class="exclusive shopBtn">
		</div>
	</div>
	</form>
	@if ($message = Session::get('existsError'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
@endif

@if ($message = Session::get('regError'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
@endif
</div>

<div class="well">
	<form method="post" action="/loginUser" class="form-horizontal" >
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<h3>Already have an account?<br/>Login</h3>
		<div class="control-group">
			<label class="control-label"> E-mail <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="email" placeholder=" E-mail ">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label"> Password <sup>*</sup></label>
			<div class="controls">
			  <input type="password" name="password" placeholder=" Password ">
			</div>
		</div>
		<div class="control-group">
		<div class="controls">
		 <input type="submit" name="loginAccount" value="Login" class="shopBtn exclusive">
		</div>
	</div>
	</form>
@if ($message = Session::get('loginError'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
@endif
</div>
</div>
</div>

@stop
