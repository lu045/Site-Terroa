$(document).ready(function(){
	$('.botao-act button').click(function(){
		$('.bg-formmodal').css("display", "flex");		
	});

	$('.close-form').click(function(){
		$('.bg-formmodal').css("display", "none");	
	});
	
});