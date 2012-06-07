<?php
	require_once "../config/config.php";
	
	$photoDAO = new PhotoDAO();
	$photos = $photoDAO->getAll();
	
	$eventIds = array();
	
	foreach($photos as $photo) {
		$eventIds["" . $photo->getEventId()] = 1;
	}
?>
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
        <h2 class="intitle"> <span class="title">Gallery</span> <span class="title_text">View the images belpw and feel free to share the images below on Twitter or Facebook</span> </h2>
        <ul class="intercont">
          <li>
            <ul>
              <li class="segment-0 selected-0"><a href="#" data-value="all">All</a></li>
              <?php
              	$i = 1;
              	foreach($eventIds as $eventId => $count) {
              		echo "<li class='segment-$i'><a href='#' data-value='event-$eventId'>Event $eventId</a></li>";
              		$i++;
              	}
              ?>
            </ul>
          </li>
        </ul>
        <div class="clear"></div>
        <div class="ptpgallery" id="maingallery">
          <!--read the documentation to understand what's going on here -->
          <ul id="list" class="liststgrid">
          	<?php
          		foreach($photos as $photo) {
          			$id = $photo->getId();
          			$title = $photo->getTitle();
          			$image = $photo->getImage();
          			$thumbnail = $photo->getThumbnail();
          			$eventId = $photo->getEventId();
          			echo "<li data-id='id-$id' class='event-$eventId'><a href='$image' rel='prettyPhoto[gallery1]''><img src='$thumbnail' alt='$title' /></a> </li>"; 
          		}
          	?>
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
<?php include_once "includes/common-foot.php"; ?>
</body>
</html>