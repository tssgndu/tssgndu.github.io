$(function() {
    
  'use strict';
 
  
/*=======================================
	WOW ANIMATION
======================================= */
    var wow = new WOW({ mobile: false });
    wow.init();

/*=======================================
    PRELOADER                     
======================================= */
  // makes sure the whole site is loaded
  $(window).on('load', function() {
    // will first fade out the loading animation
    $("#loader").fadeOut();
    //then background color will fade out slowly
    $("#loader-wrapper").delay(200).fadeOut("slow");

  }); 
/*=======================================
    cool Achieve Count
======================================= */
	function count($this){
	var current = parseInt($this.html(), 10);
	current = current + 5;	
	$this.html(++current);
		if(current > $this.data('count')){
			$this.html($this.data('count'));
		} else {    
			setTimeout(function(){count($this)}, 50);
		}
	}        	
	$(".stat-count").each(function() {
	  $(this).data('count', parseInt($(this).html(), 10));
	  $(this).html('0');
	  count($(this));
	});

/*=======================================
    collapse the navbar on scroll
=======================================*/
// jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});
 
/*=======================================
    single Page Nav
=======================================*/
	// Prevent console.log from generating errors in IE for the purposes of the demo
	if ( ! window.console ) console = { log: function(){} };

	// The actual plugin
	$('.single-page-nav').singlePageNav({
		offset: $('.single-page-nav').outerHeight(),
		filter: ':not(.external)',
		updateHash: true,
		beforeStart: function() {
			console.log('begin scrolling');
		},
		onComplete: function() {
			console.log('done scrolling');
		}
	});	
/* =======================================
    Testimonial Section 
=======================================*/
  $("#testimonial").owlCarousel({
    autoPlay: 6000, //Set AutoPlay to 3 seconds
    items : 1,
	loop:true,
	margin:10,
	singleItem:true,
	touchDrag: true,
	mouseDrag: true,
	pagination:true,
	nav:true,
	dots: true,
  });
/* =======================================
    Pricing Section 
=======================================*/
  $("#pricing").owlCarousel({
    autoPlay: 4000, //Set AutoPlay to 3 seconds
    items : 1,
	loop:true,
	margin:10,
	singleItem:true,
	touchDrag: true,
	mouseDrag: true,
	pagination:true,
	nav:true,
	dots: true,
	navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
  });
 
		
/* =======================================
    Gallery Section : mixItUp jQuery 
=======================================*/
$('.project-list').mixItUp({
	animation: {
		effects: 'fade stagger(50ms)',
		reverseOut: true,
		staggerSequence: function(i){
			return (2*i) - (5*((i/3) - ((1/3) * (i%3))));
		}
	}
});
/* =======================================
    Pretty Photo
=======================================*/
	$("a[data-rel^='prettyPhoto']").prettyPhoto({
		social_tools: false
	});
	
	
/* =======================================
    Scroll Top
=======================================*/
	$(document).ready(function(){
		$(".scrollup").on('click', function() {
			$('html').animate({'scrollTop':'0'},4000,('easeOutBounce'));
			return false;
		});		
	});
	
/* =======================================
    Contact form validation
=======================================*/
	var form = $('.contact-form');
	form.submit(function () {'use strict',
		$this = $(this);
		$.post($(this).attr('action'), function(data) {
			$this.prev().text(data.message).fadeIn().delay(3000).fadeOut();
		},'json');
		return false;
	});
	
	
});	