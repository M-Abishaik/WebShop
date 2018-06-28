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
					 only valid for online order. <br><br>Stay tuned!
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
				<img src=" {{ url('/img/bootstrap-template.png') }}" alt="bootstrap template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="/productDetails">VIEW</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
		  </ul>

	</div>
	<div class="span9">
<!--
New Products
-->
	<div class="well well-small">
	<h3>Our Products </h3>
		<div class="row-fluid">
		  <ul class="thumbnails">
			<li class="span4">
			  <div class="thumbnail">
				<a href="/productDetails" class="overlay"></a>
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="/productDetails"><img src=" {{ url('/img/a.jpg') }}" alt=""></a>
				<div class="caption cntr">
					<p>Rado Watch</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a href="/productDetails" class="overlay"></a>
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="/productDetails"><img src=" {{ url('/img/b.jpg') }}" alt=""></a>
				<div class="caption cntr">
					<p>Gold Bracelets</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a href="/productDetails" class="overlay"></a>
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="/productDetails"><img src=" {{ url('/img/c.jpg') }}" alt=""></a>
				<div class="caption cntr">
					<p>Wrist Bands</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<br class="clr">
				</div>
			  </div>
			</li>
		  </ul>
		</div>
	<div class="row-fluid">
		  <ul class="thumbnails">
			<li class="span4">
			  <div class="thumbnail">
				<a href="/productDetails" class="overlay"></a>
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="/productDetails"><img src=" {{ url('/img/d.jpg') }} " alt=""></a>
				<div class="caption cntr">
					<p>Silver Bracelets</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a href="/productDetails" class="overlay"></a>
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="/productDetails"><img src=" {{ url('/img/e.jpg') }}" alt=""></a>
				<div class="caption cntr">
					<p>Engagement Ring</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a href="/productDetails" class="overlay"></a>
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="/productDetails"><img src=" {{ url('/img/f.jpg') }} " alt=""></a>
				<div class="caption cntr">
					<p>Gold Necklace</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<br class="clr">
				</div>
			  </div>
			</li>
		  </ul>
		</div>
	<div class="row-fluid">
		  <ul class="thumbnails">
			<li class="span4">
			  <div class="thumbnail">
				<a href="/productDetails" class="overlay"></a>
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="/productDetails"><img src=" {{ url('/img/g.jpg') }}" alt=""></a>
				<div class="caption cntr">
					<p>Gold Ring</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a href="/productDetails" class="overlay"></a>
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="/productDetails"><img src=" {{ url('/img/h.jpg') }}" alt=""></a>
				<div class="caption cntr">
					<p>Engagement Ring</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a href="/productDetails" class="overlay"></a>
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="/productDetails"><img src=" {{ url('/img/i.jpg') }} " alt=""></a>
				<div class="caption cntr">
					<p>Platinum Necklace</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<br class="clr">
				</div>
			  </div>
			</li>
		  </ul>
		</div>
	<div class="row-fluid">
		  <ul class="thumbnails">
			<li class="span4">
			  <div class="thumbnail">
				<a href="/productDetails" class="overlay"></a>
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="/productDetails"><img src=" {{ url('/img/a.jpg') }}" alt=""></a>
				<div class="caption cntr">
					<p>Rado Watch</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a href="/productDetails" class="overlay"></a>
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="/productDetails"><img src=" {{ url('/img/b.jpg') }} " alt=""></a>
				<div class="caption cntr">
					<p>Gold Bracelets</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a href="/productDetails" class="overlay"></a>
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="/productDetails"><img src=" {{ url('/img/c.jpg') }} " alt=""></a>
				<div class="caption cntr">
					<p>Wrist Bands</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<br class="clr">
				</div>
			  </div>
			</li>
		  </ul>
		</div>
	
	</div>
	</div>
	</div>
@stop
