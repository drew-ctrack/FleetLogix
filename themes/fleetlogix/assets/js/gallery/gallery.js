$(window).on('load', function() {
		$('.project-gallery').owlCarousel({
		loop: true,
		margin: 0,
		lazyLoad: true,
		autoWidth:true,
		dots: true,
		autoplay:true,
		autoplayTimeout:7000,
		autoplayHoverPause:true,
		nav: true,
		center: true,
		navText: ['', ''],
		responsive: {
			0: {
				items: 3
			},
			600: {
				items: 3
			},
			1024: {
				items: 3
			}
		}
	})
});
(function($) {
	$(document).ready(function() {
		$('a.gallery').featherlightGallery({
		    previousIcon: '«',
		    nextIcon: '»',
		    galleryFadeIn: 300,
		    openSpeed: 300
		});
	});
}(jQuery));

(function($) {
	$(document).ready(function() {
		$('a.gallery-footer').featherlightGallery({
		    previousIcon: '«',
		    nextIcon: '»',
		    galleryFadeIn: 300,
		    openSpeed: 300
		});
	});
}(jQuery));
