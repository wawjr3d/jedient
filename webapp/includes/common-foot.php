<script src="thirdparty/flowplayer/flowplayer-3.2.8.min.js"></script>
<script src="thirdparty/flowplayer/flowplayer.controls-3.2.8.min.js"></script>

<script type="text/javascript" src="js/jedient.js"></script>
<script type="text/javascript" src="js/jquery.infinite-carousel.js"></script>
<script type="text/javascript">

(function() {
	//The auto-scrolling function
	$("#footer .affiliates .footercontent").carousel("#footer .affiliates .prev", "#footer .affiliates .next");
	
	function slide(){
		$("#footer .affiliates .next").click();
	}
	//Launch the scroll every 2 seconds
	var intervalId = window.setInterval(slide, 5000);
})();

</script>