<!DOCTYPE HTML>
<html>
<head>
<? $pageTitle = "Gallery"; ?>
<?php include_once "includes/common-head.php"; ?>

<!--[if IE]>
        <link rel="stylesheet" type="text/css" href="css/style_ie.css" />
<![endif]-->
<!-- Js Files -->
<script src="library/js/jquery.min.js" type="text/javascript"></script>
<script src="library/js/custom.js" type="text/javascript"></script>
<!-- Portfolio Effect -->
<script type="text/javascript" src="library/js/jquery.easing.1.2.js"></script>
<script type="text/javascript" src="library/js/jquery.quicksand.js"></script>
<!-- PrettyPhoto -->
<link rel="stylesheet" href="library/prettyphotos/css/prettyPhoto.css" type="text/css" />
<script src="library/prettyphotos/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script src="library/js/custom-imp.js" type="text/javascript"></script>
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
        <h2 class="intitle"> <span class="title">My Work Gallery</span> <span class="title_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</span> </h2>
        <ul class="intercont">
          <li>
            <ul>
              <li class="segment-0 selected-0"><a href="#" data-value="all">All</a></li>
              <li class="segment-1"><a href="#" data-value="webapps">Web Apps</a></li>
              <li class="segment-2"><a href="#" data-value="corporate">Corporate</a></li>
              <li class="segment-3"><a href="#" data-value="advertisements">Advertisements</a></li>
            </ul>
          </li>
        </ul>
        <div class="clear"></div>
        <div class="ptpgallery" id="maingallery">
          <!--read the documentation to understand what's going on here -->
          <ul id="list" class="liststgrid">
            <li data-id="id-1" class="webapps"><a href="images/bigimages/preview_1.jpg" rel="prettyPhoto[gallery1]"><img src="images/data_img_1.jpg" alt="Title Here" /></a> </li>
            <li data-id="id-2" class="corporate"><a href="images/bigimages/preview_2.jpg" rel="prettyPhoto[gallery1]"><img src="images/data_img_2.jpg" alt="Title Here" /></a> </li>
            <li data-id="id-3" class="webapps"><a href="images/bigimages/preview_3.jpg" rel="prettyPhoto[gallery1]"><img src="images/data_img_3.jpg" alt="Title Here" /></a> </li>
            <li data-id="id-4" class="webapps"><a href="images/bigimages/preview_4.jpg" rel="prettyPhoto[gallery1]"><img src="images/data_img_4.jpg" alt="Title Here" /></a> </li>
            <li data-id="id-5" class="webapps"><a href="images/bigimages/preview_5.jpg" rel="prettyPhoto[gallery1]"><img src="images/data_img_5.jpg" alt="Title Here" /></a> </li>
            <li data-id="id-6" class="advertisements"><a href="images/bigimages/preview_6.jpg" rel="prettyPhoto[gallery1]"><img src="images/data_img_6.jpg" alt="Title Here" /></a> </li>
            <li data-id="id-7" class="advertisements"><a href="images/bigimages/preview_7.jpg" rel="prettyPhoto[gallery1]"><img src="images/data_img_7.jpg" alt="Title Here" /></a> </li>
            <li data-id="id-8" class="advertisements"><a href="images/bigimages/preview_8.jpg" rel="prettyPhoto[gallery1]"><img src="images/data_img_8.jpg" alt="Title Here" /></a> </li>
            <li data-id="id-9" class="corporate"><a href="images/bigimages/preview_9.jpg" rel="prettyPhoto[gallery1]"><img src="images/data_img_9.jpg" alt="Title Here" /></a> </li>
            <li data-id="id-10" class="corporate"><a href="images/bigimages/preview_10.jpg" rel="prettyPhoto[gallery1]"><img src="images/data_img_10.jpg" alt="Title Here" /></a> </li>
            <li data-id="id-11" class="webapps"><a href="images/bigimages/preview_6.jpg" rel="prettyPhoto[gallery1]"><img src="images/data_img_11.jpg" alt="Title Here" /></a> </li>
            <li data-id="id-14" class="graphic"><a href="images/bigimages/preview_5.jpg" rel="prettyPhoto[gallery1]"><img src="images/data_img_12.jpg" alt="Title Here" /></a> </li>
          </ul>
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
</body>
</html>
