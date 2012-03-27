<!DOCTYPE HTML>
<html>
<head>
	<?php include_once "includes/common-head.php"; ?>

	<style type="text/css">body { background-attachment: scroll;}</style>
	<!--[if IE]>
	        <link rel="stylesheet" type="text/css" href="css/style_ie.css" />
	<![endif]-->
	<!-- Js Files -->
	<script src="library/js/jquery.min.js" type="text/javascript"></script>
	<script src="library/js/custom.js" type="text/javascript"></script>
	<!-- PrettyPhoto -->
	<link rel="stylesheet" href="library/prettyphotos/css/prettyPhoto.css" type="text/css" />
	<script src="library/prettyphotos/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	<script src="library/js/custom-imp.js" type="text/javascript"></script>
	<!-- Nivo Sldier -->
	<script type="text/javascript" src="library/slider/jquery.nivo.slider.pack.js"></script>
	<link href="css/nivo-slider.css" type="text/css" rel="stylesheet">
	<style type="text/css">
		.home-slogan-box-inner {
			padding: 18px 50px;
		}
	
		.home-slogan-box-inner h2 {
			overflow: hidden;
			text-overflow: ellipsis;
			white-space: nowrap;
		}
	</style>
</head>
<body>
	<?php include_once "includes/top-menu.php"; ?>
          
	<!-- Page Full Container -->
	<div id="page">
	  <!-- Page Middle Container -->
		<?php include_once "includes/header.php"; ?>
		
	  <div class="cont_round_center home">
	    
	    <div class="clear"></div>
	    <!-- Mid Area - Start Here -->
	    <div class="midarea mzr_01">
	      <div class="clear"></div>
	      <!-- Slider - Start here -->
	      <div class="slider_mbg">
	        <div class="sldier-left"><a class="nivo-prevNav">Prev</a></div>
	        <div id="slider_wrap" class="mzrtop_20 theme-default">
	          <div id="slider" class="nivoSlider"> 
	          <img src="images/slider1.jpg" alt="" width="930px" /> <a href="#"><img src="images/slider2.jpg" width="930px" alt="" title="This is an example of a caption" /></a> <img src="images/slider3.jpg" width="930px" alt="" /> <img src="images/slider4.jpg" width="930px" alt="" /> </div>
	          <script type="text/javascript">
					    $(window).load(function() {
					        $('#slider').nivoSlider();
					    });
				    </script>
	        </div>
	        <div class="sldier-right"><a class="nivo-nextNav">Next</a></div>
	      </div>
	      <!-- Slider - End here -->
	      <div class="banner_bottom_shadow"></div>
	      <!-- Home Slogan Box - Start here -->
	      <div id="home-slogan-box">
	        <div class="home-slogan-box-inner txtalctr">
	          <h2><?php include "includes/latest-tweets.php"; ?></h2>
	        </div>
	      </div>
	      <!-- Home Slogan Box - End here -->
	      <!-- Services - Start here -->
	      <div id="services">
	        <div id="wrapper-content">
					<div id="content">
						<div class="one_fourth">
							<h1 class="valignmiddle uppercase title-bold"><img src="./images/icons/icon1.png" alt=""  class="alignleft"/>Jealousy.</h1>
							<span>In life you will experience Jealousy in at least two ways, your jealousy toward others or others jealousy toward you. If you have what they don't keep working because someone is coming for it. If what you want is what they have, keep working and maybe you can get.</span>
						</div>
						<div class="one_fourth">
							<h1 class="valignmiddle uppercase title-bold"><img src="./images/icons/icon2.png" alt=""  class="alignleft"/>Encouraged.</h1>
							<span>Whether you push yourself, or you have the support of others, always have hope in yourself and move forward. Your encouragement starts within and the belief that you are capable of anything.</span>
						</div>
						<div class="one_fourth">
							<h1 class="valignmiddle uppercase title-bold"><img src="./images/icons/icon3.png" alt=""  class="alignleft"/>Driven.</h1>
							<span>The will to push forward when things are not moving around you is what will make the difference when you are stuck between a rock and a hard place.</span>
						</div>
						<div class="one_fourth last">
							<h1 class="valignmiddle uppercase title-bold"><img src="./images/icons/icon4.png" alt=""  class="alignleft"/>Intelligence.</h1>
							<span>True power lies in knowledge, knowledge of self and the things around you, gain knowledge to gain power.</span>
						</div>
						<div class="clear"></div>
					</div><!-- #content -->
			</div>
	        <div class="clear"></div>
	      </div>
	      <!-- Services - End here -->
	      <div class="clearboth"></div>
	     
	      <!-- Blockquote - Start here -->
	      <div class="clearboth">
	        <blockquote class="home">
	          <div class="quoteb">Seeing is believing, impossible is nothing, and the future is now.
	            <div class="author">JEDI</div>
	          </div>
	        </blockquote>
	      </div>
	      <!-- Blockquote - End here -->
	    </div>
	    <!-- Mid Area - End Here -->
	  </div>
	  
	  <?php include_once "includes/footer.php"; ?>
	  <div class="clear"></div>
	</div>
	<!-- Page Full Container - End -->
</body>
</html>
