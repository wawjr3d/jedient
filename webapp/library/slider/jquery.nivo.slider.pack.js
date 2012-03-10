/*
 * jQuery Nivo Slider v2.4
 * http://nivo.dev7studios.com
 *
 * Copyright 2011, Gilbert Pellegrom
 * Free to use and abuse under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 */

(function(a){var A=function(s,v){var f=a.extend({},a.fn.nivoSlider.defaults,v),g={currentSlide:0,currentImage:"",totalSlides:0,randAnim:"",running:false,paused:false,stop:false},e=a(s);e.data("nivo:vars",g);e.css("position","relative");e.addClass("nivoSlider");var j=e.children();j.each(function(){var b=a(this),h="";if(!b.is("img")){if(b.is("a")){b.addClass("nivo-imageLink");h=b}b=b.find("img:first")}var c=b.width();if(c==0)c=b.attr("width");var o=b.height();if(o==0)o=b.attr("height");c>e.width()&&
e.width(c);o>e.height()&&e.height(o);h!=""&&h.css("display","none");b.css("display","none");g.totalSlides++});if(f.startSlide>0){if(f.startSlide>=g.totalSlides)f.startSlide=g.totalSlides-1;g.currentSlide=f.startSlide}g.currentImage=a(j[g.currentSlide]).is("img")?a(j[g.currentSlide]):a(j[g.currentSlide]).find("img:first");a(j[g.currentSlide]).is("a")&&a(j[g.currentSlide]).css("display","block");e.css("background",'url("'+g.currentImage.attr("src")+'") no-repeat');for(var k=0;k<f.slices;k++){var p=
Math.round(e.width()/f.slices);k==f.slices-1?e.append(a('<div class="nivo-slice"></div>').css({left:p*k+"px",width:e.width()-p*k+"px"})):e.append(a('<div class="nivo-slice"></div>').css({left:p*k+"px",width:p+"px"}))}e.append(a('<div class="nivo-caption"><p></p></div>').css({display:"none",opacity:f.captionOpacity}));if(g.currentImage.attr("title")!=""){k=g.currentImage.attr("title");if(k.substr(0,1)=="#")k=a(k).html();a(".nivo-caption p",e).html(k);a(".nivo-caption",e).fadeIn(f.animSpeed)}var l=
0;if(!f.manualAdvance&&j.length>1)l=setInterval(function(){r(e,j,f,false)},f.pauseTime);if(f.directionNav){e.append('<div class="nivo-directionNav"><div class="nivo-directionwidth"><a class="nivo-prevNav">Prev</a><a class="nivo-nextNav">Next</a></div></div>');if(f.directionNavHide){a(".nivo-directionNav",e).hide();e.hover(function(){a(".nivo-directionNav",e).show()},function(){a(".nivo-directionNav",e).hide()})}a("a.nivo-prevNav",e).live("click",function(){if(g.running)return false;clearInterval(l);l="";g.currentSlide-=2;r(e,j,f,"prev")});
a("a.nivo-nextNav",e).live("click",function(){if(g.running)return false;clearInterval(l);l="";r(e,j,f,"next")})}if(f.controlNav){p=a('<div class="nivo-controlNav"></div>');e.append(p);for(k=0;k<j.length;k++)if(f.controlNavThumbs){var t=j.eq(k);t.is("img")||(t=t.find("img:first"));f.controlNavThumbsFromRel?p.append('<a class="nivo-control" rel="'+k+'"><img src="'+t.attr("rel")+'" alt="" /></a>'):p.append('<a class="nivo-control" rel="'+k+'"><img src="'+t.attr("src").replace(f.controlNavThumbsSearch,
f.controlNavThumbsReplace)+'" alt="" /></a>')}else p.append('<a class="nivo-control" rel="'+k+'">'+(k+1)+"</a>");a(".nivo-controlNav a:eq("+g.currentSlide+")",e).addClass("active");a(".nivo-controlNav a",e).live("click",function(){if(g.running)return false;if(a(this).hasClass("active"))return false;clearInterval(l);l="";e.css("background",'url("'+g.currentImage.attr("src")+'") no-repeat');g.currentSlide=a(this).attr("rel")-1;r(e,j,f,"control")})}f.keyboardNav&&a(window).keypress(function(b){if(b.keyCode==
"37"){if(g.running)return false;clearInterval(l);l="";g.currentSlide-=2;r(e,j,f,"prev")}if(b.keyCode=="39"){if(g.running)return false;clearInterval(l);l="";r(e,j,f,"next")}});f.pauseOnHover&&e.hover(function(){g.paused=true;clearInterval(l);l=""},function(){g.paused=false;if(l==""&&!f.manualAdvance)l=setInterval(function(){r(e,j,f,false)},f.pauseTime)});e.bind("nivo:animFinished",function(){g.running=false;a(j).each(function(){a(this).is("a")&&a(this).css("display","none")});a(j[g.currentSlide]).is("a")&&
a(j[g.currentSlide]).css("display","block");if(l==""&&!g.paused&&!f.manualAdvance)l=setInterval(function(){r(e,j,f,false)},f.pauseTime);f.afterChange.call(this)});var w=function(b,h){var c=0;a(".nivo-slice",b).each(function(){var o=a(this),d=Math.round(b.width()/h.slices);c==h.slices-1?o.css("width",b.width()-d*c+"px"):o.css("width",d+"px");c++})},r=function(b,h,c,o){var d=b.data("nivo:vars");d&&d.currentSlide==d.totalSlides-1&&c.lastSlide.call(this);if((!d||d.stop)&&!o)return false;c.beforeChange.call(this);
if(o){o=="prev"&&b.css("background",'url("'+d.currentImage.attr("src")+'") no-repeat');o=="next"&&b.css("background",'url("'+d.currentImage.attr("src")+'") no-repeat')}else b.css("background",'url("'+d.currentImage.attr("src")+'") no-repeat');d.currentSlide++;if(d.currentSlide==d.totalSlides){d.currentSlide=0;c.slideshowEnd.call(this)}if(d.currentSlide<0)d.currentSlide=d.totalSlides-1;d.currentImage=a(h[d.currentSlide]).is("img")?a(h[d.currentSlide]):a(h[d.currentSlide]).find("img:first");if(c.controlNav){a(".nivo-controlNav a",
b).removeClass("active");a(".nivo-controlNav a:eq("+d.currentSlide+")",b).addClass("active")}if(d.currentImage.attr("title")!=""){var u=d.currentImage.attr("title");if(u.substr(0,1)=="#")u=a(u).html();a(".nivo-caption",b).css("display")=="block"?a(".nivo-caption p",b).fadeOut(c.animSpeed,function(){a(this).html(u);a(this).fadeIn(c.animSpeed)}):a(".nivo-caption p",b).html(u);a(".nivo-caption",b).fadeIn(c.animSpeed)}else a(".nivo-caption",b).fadeOut(c.animSpeed);var m=0;a(".nivo-slice",b).each(function(){var i=
Math.round(b.width()/c.slices);a(this).css({height:"0px",opacity:"0",background:'url("'+d.currentImage.attr("src")+'") no-repeat -'+(i+m*i-i)+"px 0%"});m++});if(c.effect=="random"){h=["sliceDownRight","sliceDownLeft","sliceUpRight","sliceUpLeft","sliceUpDown","sliceUpDownLeft","fold","fade","slideInRight","slideInLeft"];d.randAnim=h[Math.floor(Math.random()*(h.length+1))];if(d.randAnim==undefined)d.randAnim="fade"}if(c.effect.indexOf(",")!=-1){h=c.effect.split(",");d.randAnim=h[Math.floor(Math.random()*
h.length)];if(d.randAnim==undefined)d.randAnim="fade"}d.running=true;if(c.effect=="sliceDown"||c.effect=="sliceDownRight"||d.randAnim=="sliceDownRight"||c.effect=="sliceDownLeft"||d.randAnim=="sliceDownLeft"){var n=0;m=0;w(b,c);h=a(".nivo-slice",b);if(c.effect=="sliceDownLeft"||d.randAnim=="sliceDownLeft")h=a(".nivo-slice",b)._reverse();h.each(function(){var i=a(this);i.css({top:"0px"});m==c.slices-1?setTimeout(function(){i.animate({height:"100%",opacity:"1.0"},c.animSpeed,"",function(){b.trigger("nivo:animFinished")})},
100+n):setTimeout(function(){i.animate({height:"100%",opacity:"1.0"},c.animSpeed)},100+n);n+=50;m++})}else if(c.effect=="sliceUp"||c.effect=="sliceUpRight"||d.randAnim=="sliceUpRight"||c.effect=="sliceUpLeft"||d.randAnim=="sliceUpLeft"){m=n=0;w(b,c);h=a(".nivo-slice",b);if(c.effect=="sliceUpLeft"||d.randAnim=="sliceUpLeft")h=a(".nivo-slice",b)._reverse();h.each(function(){var i=a(this);i.css({bottom:"0px"});m==c.slices-1?setTimeout(function(){i.animate({height:"100%",opacity:"1.0"},c.animSpeed,"",
function(){b.trigger("nivo:animFinished")})},100+n):setTimeout(function(){i.animate({height:"100%",opacity:"1.0"},c.animSpeed)},100+n);n+=50;m++})}else if(c.effect=="sliceUpDown"||c.effect=="sliceUpDownRight"||d.randAnim=="sliceUpDown"||c.effect=="sliceUpDownLeft"||d.randAnim=="sliceUpDownLeft"){var x=m=n=0;w(b,c);h=a(".nivo-slice",b);if(c.effect=="sliceUpDownLeft"||d.randAnim=="sliceUpDownLeft")h=a(".nivo-slice",b)._reverse();h.each(function(){var i=a(this);if(m==0){i.css("top","0px");m++}else{i.css("bottom",
"0px");m=0}x==c.slices-1?setTimeout(function(){i.animate({height:"100%",opacity:"1.0"},c.animSpeed,"",function(){b.trigger("nivo:animFinished")})},100+n):setTimeout(function(){i.animate({height:"100%",opacity:"1.0"},c.animSpeed)},100+n);n+=50;x++})}else if(c.effect=="fold"||d.randAnim=="fold"){m=n=0;w(b,c);a(".nivo-slice",b).each(function(){var i=a(this),y=i.width();i.css({top:"0px",height:"100%",width:"0px"});m==c.slices-1?setTimeout(function(){i.animate({width:y,opacity:"1.0"},c.animSpeed,"",function(){b.trigger("nivo:animFinished")})},
100+n):setTimeout(function(){i.animate({width:y,opacity:"1.0"},c.animSpeed)},100+n);n+=50;m++})}else if(c.effect=="fade"||d.randAnim=="fade"){var q=a(".nivo-slice:first",b);q.css({height:"100%",width:b.width()+"px"});q.animate({opacity:"1.0"},c.animSpeed*2,"",function(){b.trigger("nivo:animFinished")})}else if(c.effect=="slideInRight"||d.randAnim=="slideInRight"){q=a(".nivo-slice:first",b);q.css({height:"100%",width:"0px",opacity:"1"});q.animate({width:b.width()+"px"},c.animSpeed*2,"",function(){b.trigger("nivo:animFinished")})}else if(c.effect==
"slideInLeft"||d.randAnim=="slideInLeft"){q=a(".nivo-slice:first",b);q.css({height:"100%",width:"0px",opacity:"1",left:"",right:"0px"});q.animate({width:b.width()+"px"},c.animSpeed*2,"",function(){q.css({left:"0px",right:""});b.trigger("nivo:animFinished")})}},z=function(b){this.console&&typeof console.log!="undefined"&&console.log(b)};this.stop=function(){if(!a(s).data("nivo:vars").stop){a(s).data("nivo:vars").stop=true;z("Stop Slider")}};this.start=function(){if(a(s).data("nivo:vars").stop){a(s).data("nivo:vars").stop=
false;z("Start Slider")}};f.afterLoad.call(this)};a.fn.nivoSlider=function(s){return this.each(function(){var v=a(this);if(!v.data("nivoslider")){var f=new A(this,s);v.data("nivoslider",f)}})};a.fn.nivoSlider.defaults={effect:"random",slices:15,animSpeed:500,pauseTime:3E3,startSlide:0,directionNav:true,directionNavHide:true,controlNav:true,controlNavThumbs:false,controlNavThumbsFromRel:false,controlNavThumbsSearch:".jpg",controlNavThumbsReplace:"_thumb.jpg",keyboardNav:true,pauseOnHover:true,manualAdvance:false,
captionOpacity:0.8,beforeChange:function(){},afterChange:function(){},slideshowEnd:function(){},lastSlide:function(){},afterLoad:function(){}};a.fn._reverse=[].reverse})(jQuery);