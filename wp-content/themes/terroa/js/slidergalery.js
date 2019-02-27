$(document).ready(function(){
 $('.slider-for').slick({
  	slidesToShow: 1,
  	slidesToScroll: 1,
  	arrows: true,
  	fade: false,
  	asNavFor: '.slider-nav',
  	autoplay: true,
  	speed: 1500,
  	autoplaySpeed: 3000,
  	focusOnSelect: true,
  

 });
 
 $('.slider-nav').slick({
  	slidesToShow: 5,
  	slidesToScroll: 1,
  	asNavFor: '.slider-for',
  	dots: false,
  	centerMode: false,
  	focusOnSelect: true,
  	nextArrow: false,
    prevArrow: false,
 });

  
  $('.slider-for-resp').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: false,
    asNavFor: '.slider-nav-resp',
    autoplay: true,
    speed: 1500,
    autoplaySpeed: 3000,
    focusOnSelect: true,
 });
 
 $('.slider-nav-resp').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for-resp',
    dots: false,
    centerMode: false,
    focusOnSelect: true,
    nextArrow: false,
    prevArrow: false,
 });






});

