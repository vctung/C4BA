/*
 *
 *		THEME-OPTIONS.JS
 *
 */

$(document).ready(function() {
    
	var theme_options_content = ' \
		<h4>Change Theme Options</h4> \
		<a href="#"></a> \
		<br> \
		<h6>Change Color</h6> \
		<div class="colors clearfix"> \
			<a id="default" href="#" data-style="default"></a> \
			<a id="yellow" href="#" data-style="yellow"></a> \
			<a id="green" href="#" data-style="green"></a> \
			<a id="aqua" href="#" data-style="aqua"></a> \
			<a id="blue" href="#" data-style="blue"></a> \
		</div><!-- colors --> \
		<div class="demos clearfix"> \
			<h6>Choose from 4 Demos</h6> \
			<a href="index.html"><img src="assets/plugins/theme-options/images/original.jpg" alt=""><span>Original</span></a> \
			<a href="../kors-start-up/index.html"><img src="assets/plugins/theme-options/images/startup.jpg" alt=""><span>Start-Up</span></a> \
			<a href="../kors-agency/index.html"><img src="assets/plugins/theme-options/images/agency.jpg" alt=""><span>Agency</span></a> \
			<a href="../kors-mobile-app/index.html"><img src="assets/plugins/theme-options/images/mobileapp.jpg" alt=""><span>Mobile App</span></a> \
		</div><!-- demos --> \
		<h6>Latest Items by Vertiqal</h6> \
		<div class="owl-carousel themes-slider"> \
			<div class="item"> \
				<a target="_blank" href="http://themeforest.net/item/bronx-multipurpose-business-and-agency-html5-template/15970370"> \
					<img src="assets/plugins/theme-options/images/bronx.jpg" alt=""> \
				</a> \
			</div><!-- item --> \
			<div class="item"> \
				<a target="_blank" href="http://themeforest.net/item/the-supreme-luxury-hotel-html5-css3-template/15805664"> \
					<img src="assets/plugins/theme-options/images/thesupreme.jpg" alt=""> \
				</a> \
			</div><!-- item --> \
			<div class="item"> \
				<a target="_blank" href="http://themeforest.net/item/boiler-creative-agency-html5-css3-template/15605845"> \
					<img src="assets/plugins/theme-options/images/boiler.jpg" alt=""> \
				</a> \
			</div><!-- item --> \
			<div class="item"> \
				<a target="_blank" href="http://themeforest.net/item/startup-basic-business-html5-css3-template/15365005"> \
					<img src="assets/plugins/theme-options/images/start-up.jpg" alt=""> \
				</a> \
			</div><!-- item --> \
			<div class="item"> \
				<a target="_blank" href="http://themeforest.net/item/oslo-creative-agency-portfolio-html5-template/14976568"> \
					<img src="assets/plugins/theme-options/images/oslo.jpg" alt=""> \
				</a> \
			</div><!-- item --> \
		</div><!-- themes-slider --> \
	\ ';
	
	$("#theme-options").prepend(theme_options_content);
	
	$(".theme-options > a").on("click", function(e) {
        
		e.preventDefault();
		e.stopPropagation();
		$("#theme-options").toggleClass("open");
		
    });
	
	$("#theme-options").on("click", function(e) {
        
		e.stopPropagation();
		
    });
	
	$("body").on("click", function() {
		if ($("#theme-options").hasClass("open")) {
			$("#theme-options").removeClass("open");
		}
	});
	
	
	var link = $('link[data-style="styles"]');
	var kors_original_colors = $.cookie('kors_original_colors');
		
	if (!($.cookie('kors_original_colors'))) {
		
		$.cookie('kors_original_colors', 'default', 365);
		kors_original_colors = $.cookie('kors_original_colors');
		$('#theme-options .colors a[data-style="'+kors_original_colors+'"]');
		
	} else {
		
		link.attr('href','assets/css/alternative-styles/' + kors_original_colors + '.css');
		$('#theme-options .colors a[data-style="'+kors_original_colors+'"]');
		
	};


	// CHANGE COLOR //
	$('#theme-options .colors a').on('click',function(e) {
		
		var $this = $(this),
			kors_original_colors = $this.data('style');
			
		e.preventDefault();
		
		link.attr('href', 'assets/css/alternative-styles/' + kors_original_colors + '.css');
		$.cookie('kors_original_colors', kors_original_colors, 365);
		
	});
	
	// THEMES SLIDER //
	$(".owl-carousel.themes-slider").owlCarousel({
		items: 3,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		smartSpeed: 1200,
		loop: true,
		nav: true,
		navText: false,
		dots: false,
		mouseDrag: true,
		touchDrag: true,
		margin: 10
	});

});    	