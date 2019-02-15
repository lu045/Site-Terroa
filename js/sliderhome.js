$(document).ready(function(){

    var speed = 6000,
        autoplay = setInterval(play, speed);

    $('.owl-carousel').owlCarousel({
    margin:1,
    loop:true,
    autoWidth:false,
    items:1,
    autoplay: false,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    autoplaySpeed: 1500,
    lazyLoad: true,
    dotsSpeed: 1500,
    
    
})
var owl = $('.owl-carousel');
owl.owlCarousel();
// Go to the next item
$('.botnext').click(function(e) {
    owl.trigger('next.owl.carousel', [1500]);
     
    $('.description').hide();
    $('.description').delay(1000);
    $('.description').fadeIn(2000);     
})


function play(){
    
  
    
    
    $('.botnext').click();

   
}

$('.slider').hover(function(){
    clearInterval(autoplay);
}, function(){
    autoplay = setInterval(play, speed);

});


// Go to the previous item
$('.botprev').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [1500]);
    $('.description').hide();
    $('.description').delay(1000);
    $('.description').fadeIn(2000); 

})

$('.owl-dots').click(function(){
    $('.description').hide();
    $('.description').delay(1000);
    $('.description').fadeIn(2000);

});

$('.slider').mousedown(function(){
    $('.description').hide();
    $('.description').delay(1000);
    $('.description').fadeIn(2000);
})







	
	
});