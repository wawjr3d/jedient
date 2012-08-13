<?php
	require_once "../config/config.php";
	
	$eventDAO = new EventDAO();
	$events = $eventDAO->getAllActive();
?>
<!DOCTYPE HTML>
<html>
<head>
<? $pageTitle = "Events"; ?>
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
        <h2 class="intitle"> <span class="title">Events</span> <span class="title_text"></span> </h2>
        <div id="content" class="middle-inner">
        	<div class="main_container">
        		<div class="clear"></div>
        	
        		<ol class="olstyle_01"> 
        			<?php
        				foreach($events as $event) {
									$date = date("F j, Y \a\\t g:ia", strtotime($event->getDate()));
									$venue = $event->getVenue();
									$address = $event->getAddress();
									$mapLink = $event->getMapLink();
									$additionalDetails = $event->getAdditionalDetails();
							?>
							<li>
								<h2><?=$venue?></h2>
								Where: <?=$address?> (<a href="<?=$mapLink?>" class="clrpink">Map It!</a>)<br/>
								When: <?=$date?>
								
								<h4>Additional Details</h4>
								<p><?=$additionalDetails?></p>
							</li>
							<?php	} ?>
        		</ol>
        	</div>
        	<?php include "includes/sidebar_events.php"; ?>
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