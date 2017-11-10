// JavaScript Document
jQuery(window).load(function() {
  jQuery('.home-gallery-slider').flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 280,
    itemMargin: 0,
    minItems: 1,
    maxItems: 4,
    directionNav: true,
    controlNav: false
  });
  jQuery('.home-story-slider').flexslider({
    animation: "fade",
    animationLoop: true,
    directionNav: false,
    controlNav: false
  });
});
 jQuery(document).ready(function(){       
        jQuery("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
        jQuery("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
		
		jQuery('.sub-menu').addClass('dropdown-menu');
	   jQuery('ul.sub-menu').parent().addClass('dropdown');
	   jQuery('ul.sub-menu').parent().children('a').addClass('dropdown-toggle');
      });