<?php
/*
Template Name: Homepage
*/

require("header.php");
?>
<div class="homepage">
<div class="homepage-banner-wrapper">
    <div id="" class="container">
		<div class="row ">
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-xs-10">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    <div class="item active">
			      <img src="/wp-content/images/hero1.jpg" alt="...">
			      	<div class="carousel-caption">
			        	...
			      	</div>
			    </div>
			    <div class="item">
			      <img src="/wp-content/images/hero-2.jpg" alt="...">
			      	<div class="carousel-caption">
			        	
			      	</div>
			    </div>
			    <div class="item">
			      <img src="/wp-content/images/hero-3.jpg" alt="...">
			      	<div class="carousel-caption">
			        	
			      	</div>
			    </div>

			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			  </a>
			</div>
		</div>
		</div>
	</div>
</div>

<div class="homepage-other-wrapper">
	<div id="" class="container">
		<div class="row">
			<div class="col-lg-5 col-lg-offset-1 col-md-7 col-xs-7">
				<p class="homepage-available">Trinity Pines is home to people who want independent living with neighbors of a similar age. Only minutes from Interstate 94, Trinity Pines is located in beautiful Lake Mills, Wisconsin, between Madison and Milwaukee.  "The Pines" is a friendly community of carefully designed, spacious apartments and elegantly appointed facilities serving today's independent seniors.</p>
			</div>
			<div class="col-lg-5 col-md-5 col-xs-5">
				<img src="/wp-content/images/pine-line.png" class='img-responsive' style="padding-top: 20px;" />
			</div>
		</div>
	</div>
</div>
<div class="homepage-home-wrapper">
	<div id="" class="container">
		<div class="row">
			<div class="col-lg-4 col-lg-offset-1 col-md-7 col-xs-7">
				<h2>Our Home.</h2>
				<p class="homepage-available">Trinity Pines is home to people who want independent living with neighbors of a similar age. Only minutes from Interstate 94, Trinity Pines is located in beautiful Lake Mills, Wisconsin, between Madison and Milwaukee.  "The Pines" is a friendly community of carefully designed, spacious apartments and elegantly appointed facilities serving today's independent seniors.</p>
			</div>
			<div class="col-lg-5 col-lg-offset-1 col-md-5 col-xs-5">
				<img src="/wp-content/images/group-ppl.jpg" class='img-responsive img-bordered' />
			</div>
		</div>
	</div>
</div>
<div class="homepage-testimonial-wrapper">
	<div id="" class="container">
		<div class="row">
			<div class="col-lg-5 col-lg-offset-1 col-md-5 col-xs-5">
				<img src="/wp-content/images/4ladies.jpg" class='img-responsive img-bordered' />
			</div>
			<div class="col-lg-4 col-lg-offset-1 col-md-4 col-xs-7">
				<h2>Close.<br />
					Community. <br />
					Home.
				</h2>
				<p>
					"As a family, we feel that Trinity Pines is a nice fit for our Mom. Our Dad was on the board for many years at The Pines, so it always seemed like a natural step."
				</p>
				<p class='caption'>-Patty Dehnert, daughter of Lois Armantrout, 1-year resident
				</p>
			</div>
		</div>
	</div>
</div>
</div>

<?php
require("footer.php");
?>