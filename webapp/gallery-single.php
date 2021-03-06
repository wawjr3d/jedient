<!DOCTYPE HTML>
<html>
<head>
<? $pageTitle = "Single Gallery"; ?>
<?php include_once "includes/common-head.php"; ?>

<!--[if IE]>
        <link rel="stylesheet" type="text/css" href="css/style_ie.css" />
<![endif]-->
<!-- Js Files -->
<script src="library/js/jquery.min.js" type="text/javascript"></script>
<script src="library/js/custom.js" type="text/javascript"></script>
<!-- Nivo Sldier -->
<script type="text/javascript" src="library/slider/jquery.nivo.slider.pack.js"></script>
<link href="css/nivo-slider.css" type="text/css" rel="stylesheet">
</head>
<body>

<?php include_once "includes/top-menu.php"; ?>
          
<!-- Page Full Container -->
<div id="page">
  <!-- Page Middle Container -->
  <?php include_once "includes/header.php"; ?>
  
  <div class="cont_round_center">
    <!-- Content Area - Start Here -->
    <div class="content">
      <div class="midarea">
        <h2 class="intitle"> <span class="title">Gallery Single</span> <span class="title_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</span> </h2>
        <div class="clear"></div>
        <div class="middle-inner" id="content">
          <div class="clearboth">
            <div class="one_fourth">
              <h2>Gallery 1</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis sem nibh.</p>
              <ul class="list_style_01">
                <li>Vestibulum tortor quam, feu.</li>
                <li>Vestibulum tortor quam, feu.</li>
                <li>Vestibulum tortor quam, feu.</li>
                <li>Vestibulum tortor quam, feu.</li>
                <li>Vestibulum tortor quam, feu.<br />
                </li>
              </ul>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis sem nibh.<br />
                <br />
                <span class="txtbggreen">Lolor sit amet Lorem ipsum dolor sit.</span>
              <ul class="list_style_01">
                <li>Vestibulum tortor quam, feu.</li>
                <li>Vestibulum tortor quam, feu.</li>
              </ul>
              </p>
            </div>
            <div class="three_fourth last" style="padding:20px 0 0 0;">
              <div class="theme-default">
              <!--
                <div id="slider" class="nivoSlider gallery"> <img src="images/gallery-inner_01.jpg" alt="" width="726" height="476" rel="images/gallery-inner_01_thumb.jpg"/> <a href="#"><img src="images/gallery-inner_02.jpg" alt="" width="726" height="476" rel="images/gallery-inner_02_thumb.jpg" /></a> <img src="images/gallery-inner_03.jpg" alt="" width="726" height="476" rel="images/gallery-inner_03_thumb.jpg" /> <img src="images/gallery-inner_04.jpg" alt="" width="726" height="476" title="#htmlcaption" rel="images/gallery-inner_04_thumb.jpg" /> <img src="images/gallery-inner_01.jpg" alt="" width="726" height="476" rel="images/gallery-inner_01_thumb.jpg"/> <a href="#"><img src="images/gallery-inner_02.jpg" alt="" width="726" height="476" rel="images/gallery-inner_02_thumb.jpg" /></a> <img src="images/gallery-inner_03.jpg" alt="" width="726" height="476" rel="images/gallery-inner_03_thumb.jpg" /> <img src="images/gallery-inner_04.jpg" alt="" width="726" height="476" title="#htmlcaption" rel="images/gallery-inner_04_thumb.jpg" /> </div>
                <script type="text/javascript" src="library/slider/jquery.nivo.slider.pack.js"></script>
                <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider();
        });
				
		$('#slider').nivoSlider({
			controlNavThumbs:true,
			controlNavThumbsFromRel:true
		});
        </script>
        -->
              </div>
            </div>
          </div>
        </div>
        <div class="clear"></div>
        <div class="clear"></div>
      </div>
      <!-- End Here - .center-->
    </div>
    <!-- Content Area - End Here -->
  </div>

	<?php include_once "includes/footer.php"; ?>
  <div class="clear"></div>
</div>
<?php include_once "includes/common-foot.php"; ?>
</body>
</html>
