$(document).ready(function(){
 $('.owl-carousel').owlCarousel({
    items:1,
    margin:1,
    autoHeight: true,
    nav: false,
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    autoplaySpeed: 1800,
 });	

 var owl = $('.owl-carousel');

 $('.next').click(function() {
    owl.trigger('next.owl.carousel', [1500]);
})
// Go to the previous item
$('.prev').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [1500]);
})
});