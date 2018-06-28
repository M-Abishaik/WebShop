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
	</ul>
</div>

			  <div class="well well-small alert alert-warning cntr">
				  <h2>50% Discount</h2>
				  <p> 
					 only valid for online order. <br><br>Stay Tuned!
				  </p>
			  </div>
			  <div class="well well-small" ><img src=" {{ url('/img/paypal.jpg') }}" alt="payment method paypal"></div>
			
			<a class="shopBtn btn-block" href="/fourView">Upcoming products <br><small>Click to view</small></a>
			<br>
			<br>
			<ul class="nav nav-list promowrapper">
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src=" {{ url('/img/bootstrap-ecommerce-templates.png') }}" alt="bootstrap ecommerce templates">
				<div class="caption">
				  <h4><a class="defaultBtn" href="/productDetails">VIEW</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src=" {{ url('/img/shopping-cart-template.png') }}" alt="shopping cart template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="/productDetails">VIEW</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="{{ url('/img/bootstrap-template.png') }}" alt="bootstrap template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="/productDetails">VIEW</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
		  </ul>

	</div>
<div class="span9">
<div class="well well-small">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="{{ url('/img/a.jpg') }}" alt="">
		</div>
		<div class="span6">
			<h5>Rado Watch</h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<div class="btn-group">
		  <a href="/productDetails" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="/productDetails" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="{{ url('/img/b.jpg') }}" alt="">
		</div>
		<div class="span6">
			<h5>Gold Bracelets</h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<div class="btn-group">
		  <a href="/productDetails" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="/productDetails" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="{{ url('/img/c.jpg') }}" alt="">
		</div>
		<div class="span6">
			<h5>Wrist Bands</h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<div class="btn-group">
		  <a href="/productDetails" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="/productDetails" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="{{ url('/img/d.jpg') }}" alt="">
		</div>
		<div class="span6">
			<h5>Silver Bracelets</h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<div class="btn-group">
		  <a href="/productDetails" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="/productDetails" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="{{ url('/img/e.jpg') }}" alt="">
		</div>
		<div class="span6">
			<h5>Engagement Ring</h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<div class="btn-group">
		  <a href="/productDetails" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="/productDetails" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="{{ url('/img/f.jpg') }}" alt="">
		</div>
		<div class="span6">
			<h5>Gold Necklace</h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<div class="btn-group">
		  <a href="/productDetails" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="/productDetails" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="{{ url('/img/g.jpg') }}" alt="">
		</div>
		<div class="span6">
			<h5>Gold Ring</h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<div class="btn-group">
		  <a href="/productDetails" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="/productDetails" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src=" {{ url('/img/h.jpg') }}" alt="">
		</div>
		<div class="span6">
			<h5>Engagement Ring</h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<div class="btn-group">
		  <a href="/productDetails" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="/productDetails" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src=" {{ url('/img/i.jpg') }}" alt="">
		</div>
		<div class="span6">
			<h5>Platinum Necklace</h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<div class="btn-group">
		  <a href="/productDetails" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="/productDetails" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src=" {{ url('/img/a.jpg') }}" alt="">
		</div>
		<div class="span6">
			<h5>Rado Watch </h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<div class="btn-group">
		  <a href="/productDetails" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="/productDetails" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src=" {{ url('/img/b.jpg') }}" alt="">
		</div>
		<div class="span6">
			<h5>Gold Bracelets</h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<div class="btn-group">
		  <a href="/productDetails" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="/productDetails" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
</div>
</div>
</div>

@stop