<?php
/*
Template Name: Homepage
*/

require("header.php");
?>
<div class="homepage-banner-wrapper">
    <div id="" class="container">
		<div class="row ">
			<div class="col-lg-12 col-md-12 col-xs-12">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    <div class="item active">
			      <img src="/wp-content/images/slide1.png" alt="...">
			      	<div class="carousel-caption">
			        	...
			      	</div>
			    </div>
			    <div class="item ">
			      <img src="/wp-content/images/slide2.png" alt="...">
			      	<div class="carousel-caption">
			        	...
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
<div id="" class="container">
	<div class="row">
		<div class="col-lg-7 col-md-7 col-xs-7">
			<p class="homepage-available">Trinity Pines is home to people who want independent living with neighbors of a similar age. Only minutes from Interstate 94, Trinity Pines is located in beautiful Lake Mills, Wisconsin, between Madison and Milwaukee.  "The Pines" is a friendly community of carefully designed, spacious apartments and elegantly appointed facilities serving today's independent seniors.</p>
		</div>
		<div class="col-lg-5 col-md-5 col-xs-5">
			<img src="/wp-content/images/Old-People.jpg" class='img-responsive' />
		</div>
	</div>
</div>
<div class="homepage-testimonial-wrapper">
	<div id="" class="container">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-xs-5">
				<img src="/wp-content/images/Old-People.jpg" class='img-responsive' style="border-right: 15px solid white; border-left: 15px solid white"/>
			</div>
			<div class="col-lg-7 col-md-7 col-xs-7">
				<h2>Close.<br />
					Community. <br />
					Home.
				</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>
	</div>
</div>


<?php
require("footer.php");
?>