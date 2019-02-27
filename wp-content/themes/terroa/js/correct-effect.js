//Função para o menu responsivo do site
$(document).ready(function(){
	$('.w1').mouseover(function(){
		$('.ar1').css("background-color", "rgba(0,0,0,0.6)");
	});

	$('.w1').mouseout(function(){
		$('.ar1').css("background-color", "rgba(0,0,0,0.3)");
	});

	$('.w2').mouseover(function(){
		$('.ar2').css("background-color", "rgba(0,0,0,0.6)");
	});

	$('.w2').mouseout(function(){
		$('.ar2').css("background-color", "rgba(0,0,0,0.3)");
	});

	$('.w3').mouseover(function(){
		$('.ar3').css("background-color", "rgba(0,0,0,0.6)");
	});

	$('.w3').mouseout(function(){
		$('.ar3').css("background-color", "rgba(0,0,0,0.3)");
	});


});