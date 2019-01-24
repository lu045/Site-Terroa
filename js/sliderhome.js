$(document).ready(function(){

	$('.owl-carousel').owlCarousel({
    margin:1,
    loop:true,
    autoWidth:false,
    items:1,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    autoplaySpeed: 1500,
    
})
var owl = $('.owl-carousel');
owl.owlCarousel();
// Go to the next item
$('.botnext').click(function() {
    owl.trigger('next.owl.carousel', [1500]);

    
})
// Go to the previous item
$('.botprev').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [1500]);
})


	
	
});