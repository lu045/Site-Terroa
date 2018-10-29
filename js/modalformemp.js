$(document).ready(function(){
	$('.formmodal').hide()	
	$('.mod-form').click(function(){
		$('.formmodal').fadeIn("slow");		
	});

	$('.close-form').click(function(){
		$('.formmodal').fadeOut("slow");
	});

	$('.bg-modal').click(function(){
		$('.formmodal').fadeOut("slow");
	});
	
});