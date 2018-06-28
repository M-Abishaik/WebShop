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
					 only valid for online order. <br><br><b>Stay Tuned!</b>
				  </p>
			  </div>
			  <div class="well well-small" ><img src = "{{ url('/img/paypal.jpg') }}" alt="payment method paypal"></div>
			
			<a class="shopBtn btn-block" href="threeView">Upcoming products <br><small>Click to view</small></a>
			<br>
			<br>
			<ul class="nav nav-list promowrapper">
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src = "{{ url('/img/bootstrap-ecommerce-templates.PNG') }}" alt="bootstrap ecommerce templates">
				<div class="caption">
				  <h4><a class="defaultBtn" href="#">Add to cart</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="{{ url('/img/shopping-cart-template.png') }}" alt="shopping cart template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="#">Add to cart</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="{{ url('/img/bootstrap-template.png') }}" alt="bootstrap template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="#">Add to cart</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
		  </ul>

	</div>
	<div class="span9">
	<div class="well np">
		<div id="myCarousel" class="carousel slide homCar">
            <div class="carousel-inner">
			  <div class="item active">
                <img style="width:100%" src="{{ url('/img/bootstrap_free-ecommerce.png') }}" alt="bootstrap ecommerce templates">
                <div class="carousel-caption">
                      <h4>Gold Ornaments</h4>
                      <p><span>Pretty flexible to use</span></p>
                </div>
              </div>
			  <div class="item">
                <img style="width:100%" src="{{ url('/img/carousel1.png') }}" alt="bootstrap ecommerce templates">
                <div class="carousel-caption">
                      <h4>Gold Watches</h4>
                      <p><span>Highly Google seo friendly</span></p>
                </div>
              </div>
			  <div class="item">
                <img style="width:100%" src="{{ url('/img/carousel3.png') }}" alt="bootstrap ecommerce templates">
                <div class="carousel-caption">
                      <h4>Platinum Rings</h4>
                      <p><span>Very easy to integrate and expand</span></p>
                </div>
              </div>
              <div class="item">
                <img style="width:100%" src="{{ url('/img/bootstrap-templates.png') }}" alt="bootstrap templates">
                <div class="carousel-caption">
                      <h4>Chocolate Diamonds</h4>
                      <p><span>Compatible to many more opensource carts</span></p>
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div>
        </div>

<!--
New Products
-->
	<div class="well well-small">
	<h3>New Products </h3>
	<hr class="soften"/>
		<div class="row-fluid">
		<div id="newProductCar" class="carousel slide">
            <div class="carousel-inner">
			<div class="item active">
			  <ul class="thumbnails">
				<li class="span3">
				<div class="thumbnail">
					<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
					<a href="#" class="tag"></a>
					<a href="/productDetails"><img src="{{ url('/img/bootstrap-ring.png') }}" alt="bootstrap-ring"></a>
					<div class="caption cntr">
					<p>Chocolate Diamond</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<br class="clr">
				</div>
				</div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
					<a href="#" class="tag"></a>
					<a  href="/productDetails"><img src="{{ url('/img/i.jpg') }}" alt=""></a>
					<div class="caption cntr">
					<p>Platinum Necklace</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<br class="clr">
				</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
					<a href="#" class="tag"></a>
					<a  href="/productDetails"><img src="{{ url('/img/g.jpg') }}" alt=""></a>
					<div class="caption cntr">
					<p>Gold Ring</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<br class="clr">
				</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
					<a  href="/productDetails"><img src="{{ url('/img/s.png') }}" alt=""></a>
					<div class="caption cntr">
					<p>Pearl Necklace</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<br class="clr">
				</div>
				  </div>
				</li>
			  </ul>
			  </div>
		   <div class="item">
		  <ul class="thumbnails">
			<li class="span3">
			  <div class="thumbnail">
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a  href="/productDetails"><img src="{{ url('/img/i.jpg') }}" alt=""></a>
				<div class="caption cntr">
					<p>Platinum Necklace</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a  href="/productDetails"><img src="{{ url('/img/f.jpg') }}" alt=""></a>
				<div class="caption cntr">
					<p>Gold Necklace</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a  href="/productDetails"><img src="{{ url('/img/h.jpg') }}" alt=""></a>
				<div class="caption cntr">
					<p>Engagement Ring</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a  href="/productDetails"><img src="{{ url('/img/j.jpg') }}" alt=""></a>
				<div class="caption cntr">
					<p>Vintage Ring</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<br class="clr">
				</div>
			  </div>
			</li>
		  </ul>
		  </div>
		   </div>
		  <a class="left carousel-control" href="#newProductCar" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#newProductCar" data-slide="next">&rsaquo;</a>
		  </div>
		  </div>

		<div class="row-fluid">
		  <ul class="thumbnails">
			<li class="span4">
			  <div class="thumbnail">
				 
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="/productDetails"><img src="{{ url('/img/b.jpg') }}" alt=""></a>
				<div class="caption cntr">
					<p>Gold Bracelets</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="{{ route('cartLogic', ['Gold Bracelets', 22]) }}" title="add to cart"> Add to cart </a></h4>
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="/productDetails"><img src="{{ url('/img/c.jpg') }}" alt=""></a>
				<div class="caption cntr">
					<p>Wrist Bands</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="{{ route('cartLogic', ['Gold Bracelets', 30]) }}" title="add to cart"> Add to cart </a></h4>
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="/productDetails"><img src="{{ url('/img/a.jpg') }}" alt=""></a>
				<div class="caption cntr">
					<p>Rado Watch</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="{{ route('cartLogic', ['Gold Bracelets', 40]) }}" title="add to cart"> Add to cart </a></h4>
					<br class="clr">
				</div>
			  </div>
			</li>
		  </ul>
		</div>
	</div>

	<!--
	Featured Products
	-->
		<div class="well well-small">
		  <h3><a class="btn btn-mini pull-right" href="/products" title="View more">VIew More<span class="icon-plus"></span></a> Featured Products  </h3>
		  <hr class="soften"/>
		  <div class="row-fluid">
		  <ul class="thumbnails">
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a  href="/productDetails"><img src=" {{ url('/img/d.jpg') }}" alt=""></a>
				<div class="caption">
				  <h5>Silver Bracelets</h5>
				  <h4>
					  <a class="defaultBtn" href="/productDetails" title="Click to view"><span class="icon-zoom-in"></span></a>
					  <span class="pull-right">$22.00</span>
				  </h4>
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a  href="/productDetails"><img src="{{ url('/img/e.jpg') }}" alt=""></a>
				<div class="caption">
				  <h5>Engagement Ring</h5>
				  <h4>
					  <a class="defaultBtn" href="/productDetails" title="Click to view"><span class="icon-zoom-in"></span></a>
					  <span class="pull-right">$22.00</span>
				  </h4>
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="/productDetails" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a  href="/productDetails"><img src="{{ url('/img/f.jpg') }}" alt=""/></a>
				<div class="caption">
				  <h5>Gold Necklace</h5>
				  <h4>
					  <a class="defaultBtn" href="/productDetails" title="Click to view"><span class="icon-zoom-in"></span></a>
					  <span class="pull-right">$22.00</span>
				  </h4>
				</div>
			  </div>
			</li>
		  </ul>	
	</div>
	</div>
	
	<div class="well well-small">
	<a class="btn btn-mini pull-right" href="/listView">View more <span class="icon-plus"></span></a>
	Popular Products 
	</div>
	<hr>
	<div class="well well-small">
	<a class="btn btn-mini pull-right" href="/gridView">View more <span class="icon-plus"></span></a>
	Best selling Products 
	</div>
	</div>
	</div>

@stop