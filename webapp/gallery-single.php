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

<script src="thirdparty/flowplayer/flowplayer-3.2.8.min.js"></script>
<script src="thirdparty/flowplayer/flowplayer.controls-3.2.8.min.js"></script>
<style type="text/css">
	#player {
		width: 400px;
		height: 122px;
	}
	
	/* root element should be positioned relatively so that
    child elements can be positioned absolutely */
#controls {
    position:relative;
    height:40px;

    /* black background with a gradient */
    background:#000 url(images/hulu.png) repeat-x 0 -4px;
    width:500px;
}

/* play/pause button */
#controls .play, #controls .pause {
    position:absolute;
    width: 46px;
    height: 40px;
    display:block;
    text-indent:-9999em;
    background:url(images/hulu.png) no-repeat 10px -61px;
    cursor:pointer;
    border-right:1px solid #000;
}

#controls .play:hover {
    background-position:10px -105px;
}

/* pause state */
#controls .pause {
    background-position:11px -148px;
}

#controls .pause:hover {
    background-position:11px -192px;
}

/* the timeline (or "scrubber")  */
#controls .track {
    left:47px;
    position:absolute;
    cursor:pointer;
    width:285px;
    border-left:1px solid #999;
    height:40px;
}

/* the draggable playhead */
#controls .playhead {
    position:absolute;
    cursor:pointer;
    background-color:#4ff;
    opacity:0.3;
    filter: alpha(opacity=30);
    width:3px;
    height:40px;
    border-right:1px solid #444;
}

/* buffer- and progress bars. upon runtime the width of these elements grows */
#controls .progress, #controls .buffer {
    position:absolute;
    background-color:#4ff;
    filter: alpha(opacity=10);
    opacity:0.1;
    width:0px;
    height:40px;
}

#controls .buffer {
    background-color:#fff;
    opacity:0.1;
    filter: alpha(opacity=10);
}

/* time display */
#controls .time {
    position:absolute;
    width:129px;
    left:330px;
    padding:12px 0;
    text-align:center;
    border:1px solid #999;
    border-width:0 1px;
    font-size:12px;
    color:#fff;
}

/* total duration in time display */
#controls .time strong {
    font-weight:normal;
    color:#666;
}

/* mute / unmute buttons */
#controls .mute, #controls .unmute {
    position:absolute;
    left:460px;
    width:40px;
    height:40px;
    text-align:center;
    padding:8px 0;
    cursor:pointer;
    text-indent:-9999em;
    background:url(images/hulu.png) no-repeat 5px -323px;
}

#controls .mute:hover {
    background-position:5px -367px;
}

/* unmute state */
#controls .unmute {
    background-position:5px -235px;
}

#controls .unmute:hover {
    background-position:5px -279px;
}
	
</style>
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
              	<div id="player"></div>
              	<div id="controls"></div>
              	<script type="text/javascript">
$f("player", "thirdparty/flowplayer/flowplayer-3.2.9.swf", {
 
    // playlist with five entries
    playlist: [
 
 
        // another image. works as splash for the audio clip
        {url: "images/ad_244-122.jpg", duration: 0},


        {url: "media/audio/test.mp3"}

    ],
 
    // show playlist buttons in controlbar
    plugins:  {
        audio: {
            url: 'thirdparty/flowplayer/plugins/flowplayer.audio-3.2.8.swf'
        },
        controls: null
    }
 
}).controls("controls", {duration: 25});
              	</script>
              
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
</body>
</html>
