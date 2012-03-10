// JavaScript Document
jQuery(document).ready(function(){
$(".metacafe").click(function() {
				$.fancybox({
						'padding'		: 0,
						'autoScale'		: false,
						'transitionIn'	: 'none',
						'transitionOut'	: 'none',
						'title'			: this.title,
						'width'		: 680,
						'height'		: 495,
						'href'			: this.href.replace(new RegExp("fplayer\\?v=", "i"), 'v/'),
						'type'			: 'swf',
						'swf'			: {
							 'wmode'		: 'transparent',
							'allowfullscreen'	: 'true'
						}
					});
			
				return false;
			});

//PrettyPhotos
$("area[rel^='prettyPhoto']").prettyPhoto();

$(".ptpgallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'pp_default',slideshow:3000, autoplay_slideshow: false});
$(".ptpgallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});

$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
	custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
	changepicturecallback: function(){ initialize(); }
});

});