/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {
	

	$('.search-icon i').click(function(){
		var $this = $(this);
		var $parent = $this.parent();
		var $form = $parent.find("form");
		var $menu = $('#site-navigation');		
		if($parent.length>0 && $form.length > 0 && $menu.length>0){
			if($parent.hasClass('active')){
				$form.animate({
					width: 0
				},200,function(){
					$form.css({
						width: '',
						display: '',
					});
					$parent.removeClass("active");
				});
				$menu.show(200);
			} else {
				$parent.addClass("active");
				var saved_width = ($form.outerWidth()/$parent.outerWidth())*100 + "%";
				$form.css({
					display: "block",
					width: 0
				});
				$form.animate({
					width: saved_width
				},200);
				$menu.hide(200);
			}
		}
	});
	/*
	*
	*	Current Page Active
	*
	------------------------------------*/
	$("[href]").each(function() {
    if (this.href == window.location.href) {
        $(this).addClass("active");
        }
	});
	
	/*
	*
	*	Flexslider
	*
	------------------------------------*/
	$('.flexslider').flexslider({
		animation: "slide",
	}); // end register flexslider
	
	/*
	*
	*	Colorbox
	*
	------------------------------------*/
	$('a.gallery').colorbox({
		rel:'gal',
		width: '80%', 
		height: '80%'
	});
	
	/*
	*
	*	Isotope with Images Loaded
	*
	------------------------------------*/
	var $container = $('#container').imagesLoaded( function() {
  	$container.isotope({
    // options
	 itemSelector: '.item',
		  masonry: {
			gutter: 15
			}
 		 });
	});

	/*
	*
	*	Smooth Scroll to Anchor
	*
	------------------------------------*/
	 $('a').click(function(){
	    $('html, body').animate({
	        scrollTop: $('[name="' + $.attr(this, 'href').substr(1) + '"]').offset().top
	    }, 500);
	    return false;
	});

	
	
	/*
	*
	*	Equal Heights Divs
	*
	------------------------------------*/
	$('.js-blocks').matchHeight();

	/*
	*
	*	Wow Animation
	*
	------------------------------------*/
	new WOW().init();

});// END #####################################    END