$(document).ready(function(){	
	$('.menu-emp ul a').click(function(e){
		e.preventDefault();
		var id = $(this).attr('href');
			targetOffset = $(id).offset().top;
			menuHeight = $('.menu-emp').innerHeight();

		$('body, html').animate({
			scrollTop: targetOffset - 10

		}, 900);

	});

});