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
	<!-- CU3ER Slider -->
	<script type="text/javascript" language="javascript" src="library/slider/cu3er/js/AC_RunActiveContent.js"></script>
	<script type="text/javascript" src="library/slider/cu3er/js/swfobject/swfobject.js"></script>
	</head>
	<body>

	<?php include_once "includes/top-menu.php"; ?>
			  
	<!-- Page Full Container -->
	<div id="page">
		<!-- Page Middle Container -->
		<?php include_once "includes/header.php"; ?>
	 
	  <div class="cont_round_center home">
		
		<!-- Mid Area - Start Here -->
		<div class="midarea">
		  <div class="clear"></div>
		  
		  <!-- Slider - Start here -->
		  <div id="slider_wrap_main" class="mzr_topbot_01 cu3erslider">
			
			<script language="JavaScript" type="text/javascript">
										if (AC_FL_RunContent == 0) {
											alert("This page requires AC_RunActiveContent.js.");
										} else {
											AC_FL_RunContent(
												'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0',
												'width', '977',
												'height', '400',
												'src', 'library/slider/cu3er/flash/cu3er',
												'quality', 'high',
												'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
												'align', 'middle',
												'play', 'true',
												'loop', 'true',
												'scale', 'showall',
												'wmode', 'transparent',
												'devicefont', 'false',
												'id', 'cu3er',
												'name', 'cu3er',
												'menu', 'true',
												'allowFullScreen', 'false',
												'allowScriptAccess','sameDomain',
												'movie', 'library/slider/cu3er/flash/cu3er',
												'salign', '',
												'flashvars', 'xml=library/slider/cu3er/config.xml'
												); //end AC code
										}
									 </script>
			
		  </div>
		  <!-- Slider - End here -->

		  <div class="banner_bottom_shadow"></div>
		  
		  <!-- Home Slogan Box - Start here -->
		  <div id="home-slogan-box">
			<div class="home-slogan-box-inner txtalctr">
			  <h2><?php include "includes/latest-tweets-1.html"; ?></h2>
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
<?php include_once "includes/common-foot.php"; ?>
</body>
</html>