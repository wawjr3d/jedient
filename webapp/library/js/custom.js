//jQuery.noConflict();	

jQuery(document).ready(function(){
								  
 jQuery('#list li a img').animate({'opacity' : 1}).hover(function() {
	jQuery(this).animate({'opacity' : .6});
 }, function() {
	jQuery(this).animate({'opacity' : 1});
 });
 
 jQuery('.button').animate({'opacity' : 1}).hover(function() {
	jQuery(this).animate({'opacity' : .8});
 }, function() {
	jQuery(this).animate({'opacity' : 1});
 });

 jQuery('.imgthumb li a img').animate({'opacity' : 1}).hover(function() {
	jQuery(this).animate({'opacity' : .6});
 }, function() {
	jQuery(this).animate({'opacity' : 1});
 });
 
 jQuery('.one_third img, .one_fourth img').animate({'opacity' : 1}).hover(function() {
	jQuery(this).animate({'opacity' : .6});
 }, function() {
	jQuery(this).animate({'opacity' : 1});
 });
   
  $('.blogicon_hover').hover(function() { 
		$(this).animate({ marginTop: '0px', opacity : '1' }, 200);
	 }, function() { 
		$(this).animate({ marginTop: '-50px', opacity : '.0' }, 200);
	 });
  
   jQuery('.post-img').animate({'opacity' : .5}).hover(function() {
	jQuery(this).animate({'opacity' : 1});
	 }, function() {
		jQuery(this).animate({'opacity' : .5});
	 });
 
 jQuery('.btn_readmore').animate({'opacity' : .8}).hover(function() {
	jQuery(this).animate({'opacity' : 1});
 }, function() {
	jQuery(this).animate({'opacity' : .8});
 });
  
  jQuery('.bigimg2 img').animate({'opacity' : 1}).hover(function() {
	jQuery(this).animate({'opacity' : .6});
 }, function() {
	jQuery(this).animate({'opacity' : 1});
 });
  
  jQuery('.switcher_box_m').animate({'opacity' : .5}).hover(function() {
	jQuery(this).animate({'opacity' : 1});
 }, function() {
	jQuery(this).animate({'opacity' : .5});
 });
    
 jQuery('.home-slogan-box-inner, .subscribe_btn').animate({'opacity' : .6}).hover(function() {
	jQuery(this).animate({'opacity' : 1});
 }, function() {
	jQuery(this).animate({'opacity' : .6});
 });
  
 jQuery('.imgthumb img').animate({'opacity' : 1}).hover(function() {
	jQuery(this).animate({'opacity' : .6});
 }, function() {
	jQuery(this).animate({'opacity' : 1});
 });
 
 jQuery('.heffect, .ad-125 img, .ad-254 img, .gallery .nivo-controlNav img').animate({'opacity' : 1}).hover(function() {
	jQuery(this).animate({'opacity' : .6});
 }, function() {
	jQuery(this).animate({'opacity' : 1});
 });
 
 jQuery('.full-next,.full-previous').animate({'opacity' : .4}).hover(function() {
	jQuery(this).animate({'opacity' : 1});
 }, function() {
	jQuery(this).animate({'opacity' : .4});
 });
  
 jQuery('.videobox img').animate({'opacity' : 1}).hover(function() {
	jQuery(this).animate({'opacity' : .6});
 }, function() {
	jQuery(this).animate({'opacity' : 1});
 });
 
jQuery("#logo,").hover(function(){
		jQuery("#logo").stop().fadeTo("slow", 0.5); 
		},function(){
		jQuery("#logo").stop().fadeTo("slow", 1); 

});

jQuery("#nav ul li ul").hover(function(){
		jQuery("#nav ul li ul").stop().fadeTo("slow", 1); 
		},function(){
		jQuery("#nav ul li ul:hover").stop().fadeTo("slow", 0.2); 

});

jQuery("#social-icons-tp ").hover(function(){
		jQuery("#social-icons-tp img").stop().fadeTo("slow", 1); 
		},function(){
		jQuery("#social-icons-tp img").stop().fadeTo("slow", 0.7); 

});	

$('.blogfeed ul li a').hover(function() { 
		$(this).animate({ paddingLeft: '8px' }, 200);
	 }, function() { 
		$(this).animate({ paddingLeft: '0px' }, 200);
	 });

$('.#navigation-main ul ul li a').hover(function() { 
		$(this).animate({ marginRight: '-8px' }, 200);
	 }, function() { 
		$(this).animate({ marginRight: '0px' }, 200);
	 });


$("ul.thumb li").hover(function() {
			$(this).css({'z-index' : '10'}); /*Add a higher z-index value so this image stays on top*/ 
			$(this).find('img').addClass("hover").stop() /* Add class of "hover", then stop animation queue buildup*/
				.animate({
					marginTop: '-40px', /* The next 4 lines will vertically align this image */ 
					marginLeft: '-44px',
					top: '50%',
					left: '50%',
					width: '69px', /* Set new width */
					height: '60px', /* Set new height */
					padding: '3px'
				}, 200); /* this value of "200" is the speed of how fast/slow this hover animates */
		
			} , function() {
			$(this).css({'z-index' : '0'}); /* Set z-index back to 0 */
			$(this).find('img').removeClass("hover").stop()  /* Remove the "hover" class , then stop animation queue buildup*/
				.animate({
					marginTop: '0', /* Set alignment back to default */
					marginLeft: '0',
					top: '0',
					left: '0',
					width: '65px', /* Set width back to default */
					height: '56px', /* Set height back to default */
					padding: '0px'
				}, 400);
		});

// hide #back-top first
	$("#top-menu2").hide();
	
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#top-menu2').fadeIn();
			} else {
				$('#top-menu2').fadeOut();
			}
		});

		
	});

$('.accordian li:odd:gt(0)').hide();
			
	// Add a padding to the first link
	$('.accordian li:first').animate( {
		paddingLeft:"15px"
	} );
	
	// Add the dimension class to all the content
	$('.accordian li:first').addClass('current');
	
	// Add the dimension class to all the content
	$('.accordian li:odd').addClass('dimension');
	
	// Set the even links with an 'even' class
	$('.accordian li:even:even').addClass('even');
	
	// Set the odd links with a 'odd' class
	$('.accordian li:even:odd').addClass('odd');
	
	// Show the correct cursor for the links
	$('.accordian li:even').css('cursor', 'pointer');
	
	// Handle the click event
	$('.accordian li:even').click( function() {
		// Get the content that needs to be shown
		var cur = $(this).next();
		
		// Get the content that needs to be hidden
		var old = $('.accordian li:odd:visible');
		
		// Make sure the content that needs to be shown 
		// isn't already visible
		if ( cur.is(':visible') )
			return false;
		
		// Hide the old content
		old.slideToggle(500);
		
		// Show the new content
		cur.stop().slideToggle(500);
		
		// Animate (add) the padding in the new link
		$(this).stop().animate( {
			paddingLeft:"15px"
		} );
		
		// Animate (remove) the padding in the old link
		old.prev().stop().animate( {
			paddingLeft:"10px"
		} );
	} );
	
//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

function primaryHover(){
	
		jQuery("#navigation ul ul").hover(function(){
			jQuery(this).parent().find("a").addClass("nav");
			},function(){
			jQuery(this).parent().find("a").removeClass("nav");
			
		});
	
}

function secondaryHover(){
	
		jQuery("#secondary-menu ul ul").hover(function(){
			jQuery(this).parent().find("a").addClass("secondary-active");
			},function(){
			jQuery(this).parent().find("a").removeClass("secondary-active");
			
		});
	
}


var arrowimages={down:['', ''], right:['', '']}

var jqueryslidemenu={

animateduration: {over: 50, out: 300}, //duration of slide in/ out animation, in milliseconds

buildmenu:function(menuid, arrowsvar){
	jQuery(document).ready(function($){
		$("#main-menu").removeAttr("title");

		var $mainmenu=$(menuid+">ul")
		var $headers=$mainmenu.find("ul").parent()
		$headers.each(function(i){
			var $curobj=$(this)
			var $subul=$(this).find('ul:eq(0)')
			this._dimensions={w:this.offsetWidth, h:this.offsetHeight, subulw:$subul.outerWidth(), subulh:$subul.outerHeight()}
			this.istopheader=$curobj.parents("ul").length==1? true : false
			$subul.css({top:this.istopheader? this._dimensions.h+"px" : 0})
			/*
			$curobj.children("a:eq(0)").css(this.istopheader? {paddingRight: arrowsvar.down[2]} : {}).append(
				'<img src="'+ (this.istopheader? arrowsvar.down[1] : arrowsvar.right[1])
				+'" class="' + (this.istopheader? arrowsvar.down[0] : arrowsvar.right[0])
				+ '" style="border:0;" />'
			)*/
			
			$curobj.hover(
				function(e){
					var $targetul=$(this).children("ul:eq(0)")
					this._offsets={left:$(this).offset().left, top:$(this).offset().top}
					
					if(jQuery.browser.msie){
						var menuleft=this.istopheader? 0 : this._dimensions.w +2
						menuleft=(this._offsets.left+menuleft+this._dimensions.subulw>$(window).width())? (this.istopheader? -this._dimensions.subulw+this._dimensions.w : -this._dimensions.w) -4 : menuleft
					}
					if(!jQuery.browser.msie){
						var menuleft=this.istopheader? 0 : this._dimensions.w
						menuleft=(this._offsets.left+menuleft+this._dimensions.subulw>$(window).width())? (this.istopheader? -this._dimensions.subulw+this._dimensions.w : -this._dimensions.w) : menuleft
					}
					if ($targetul.queue().length<=1) //if 1 or less queued animations
						$targetul.css({left:menuleft+"px", width:this._dimensions.subulw+'px'}).slideDown(jqueryslidemenu.animateduration.over)
				},
				function(e){
					var $targetul=$(this).children("ul:eq(0)")
					$targetul.slideUp(jqueryslidemenu.animateduration.out)
				}
			) //end hover
			$curobj.click(function(){
				$(this).children("ul:eq(0)").hide()
			})
		}) //end $headers.each()
		$mainmenu.find("ul").css({display:'none', visibility:'visible'})
	}) //end document.ready
}
}
var kill_dropdown  = jQuery("meta[name=kill_dropdown]").attr('content');
if(!kill_dropdown){
jqueryslidemenu.buildmenu("#navigation-main", arrowimages),
jqueryslidemenu.buildmenu("#secondary-menu", arrowimages)
};
 
 //$("#list:first a[rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'light_square',slideshow:2000, autoplay_slideshow: false});
 /*fanybox*/
	if(jQuery.fancybox){
		   jQuery("a[rel=image_group]").fancybox({
				'transitionIn'		: 'elastic',
				'transitionOut'		: 'elastic',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
			
			jQuery("a[rel=popup_img]").fancybox({
				'transitionIn'		: 'elastic',
				'transitionOut'		: 'elastic',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
	}
	

	/*DropDown*/
	var drop = jQuery('#top');
	var logo = $('#logo');
	var boolean=false;
	
	drop.click(function(){
		
		if(boolean==false){
			jQuery(this).find('ul').css({
				display: 'block'
			});
			boolean=true;
		}else{
			jQuery(this).find('ul').css({
				display: 'none'
			});
			boolean=false;
		}
	})
	
	logo.click( function(){
		drop.find('.top-link').text('Home');
	})
	
	drop.find('ul li a').click( function() {
	var name = jQuery(this).text();
	drop.find('.top-link').text(name);
	jQuery('#top').find('ul').css({
		display: 'none'
	});
	boolean=false;	
	});
	
	
});


(function($) {
	
	$.fn.sorted = function(customOptions) {
		var options = {
			reversed: false,
			by: function(a) {
				return a.text();
			}
		};
		$.extend(options, customOptions);
	
		$data = $(this);
		arr = $data.get();
		arr.sort(function(a, b) {
			
		   	var valA = options.by($(a));
		   	var valB = options.by($(b));
			if (options.reversed) {
				return (valA < valB) ? 1 : (valA > valB) ? -1 : 0;				
			} else {		
				return (valA < valB) ? -1 : (valA > valB) ? 1 : 0;	
			}
		});
		return $(arr);
	};

})(jQuery);

$(function() {
  
  var read_button = function(class_names) {
    var r = {
      selected: false,
      type: 0
    };
    for (var i=0; i < class_names.length; i++) {
      if (class_names[i].indexOf('selected-') == 0) {
        r.selected = true;
      }
      if (class_names[i].indexOf('segment-') == 0) {
        r.segment = class_names[i].split('-')[1];
      }
    };
    return r;
  };
  
  var determine_sort = function($buttons) {
    var $selected = $buttons.parent().filter('[class*="selected-"]');
    return $selected.find('a').attr('data-value');
  };
  
  var determine_kind = function($buttons) {
    var $selected = $buttons.parent().filter('[class*="selected-"]');
    return $selected.find('a').attr('data-value');
  };
  
  var $preferences = {
    duration: 800,
    easing: 'easeInOutQuad',
    adjustHeight: false
  };
  
  var $list = $('#list');
  var $data = $list.clone();
  
  var $controls = $('ul.intercont ul');
  
  $controls.each(function(i) {
    
    var $control = $(this);
    var $buttons = $control.find('a');
    
    $buttons.bind('click', function(e) {
      
      var $button = $(this);
      var $button_container = $button.parent();
      var button_properties = read_button($button_container.attr('class').split(' '));      
      var selected = button_properties.selected;
      var button_segment = button_properties.segment;

      if (!selected) {

        $buttons.parent().removeClass('selected-0').removeClass('selected-1').removeClass('selected-2').removeClass('selected-3').removeClass('selected-4');
        $button_container.addClass('selected-' + button_segment);
        
        var sorting_type = determine_sort($controls.eq(1).find('a'));
        var sorting_kind = determine_kind($controls.eq(0).find('a'));
        
        if (sorting_kind == 'all') {
          var $filtered_data = $data.find('li');
        } else {
          var $filtered_data = $data.find('li.' + sorting_kind);
        }
        
        if (sorting_type == 'size') {
          var $sorted_data = $filtered_data.sorted({
            by: function(v) {
              return parseFloat($(v).find('span').text());
            }
          });
        } else {
          var $sorted_data = $filtered_data.sorted({
            by: function(v) {
              return $(v).find('strong').text().toLowerCase();
            }
          });
        }
        //// add function for lightbox and fade in and out for image.
        $list.quicksand($sorted_data, $preferences, 
		function(){
			//end callback
			imageHoverFade();
			setLightbox();
			
			}
			);
        
      }
      
      e.preventDefault();
    });
    
  }); 

  var high_performance = true;  
  var $performance_container = $('#performance-toggle');
  var $original_html = $performance_container.html();
  
  $performance_container.find('a').live('click', function(e) {
    if (high_performance) {
      $preferences.useScaling = false;
      $performance_container.html('CSS3 scaling turned off. Try the demo again. <a href="#toggle">Reverse</a>.');
      high_performance = false;
    } else {
      $preferences.useScaling = true;
      $performance_container.html($original_html);
      high_performance = true;
    }
    e.preventDefault();
  });
});


// set the prettyphoto lightbox.
function setLightbox(){
	 //$("#list:first a[rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'light_square',slideshow:2000, autoplay_slideshow: false});
	 /*fanybox*/
	if(jQuery.fancybox){
		   jQuery("a[rel=image_group]").fancybox({
				'transitionIn'		: 'elastic',
				'transitionOut'		: 'elastic',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
	}
}

// set the the fade in and out of images
function imageHoverFade(){
	
	$('#list li a img').animate({'opacity' : 1}).hover(function() {
		$(this).animate({'opacity' : .2});
	}, function() {
		$(this).animate({'opacity' : 1});
	});
}

$(document).ready(function() {
	$("#switcher_box").hide();
	$("#switcher_btn").click(function() {
		$("#switcher_box").animate({width: "toggle", 
                    height: "toggle"}, 1000);
	});
});

