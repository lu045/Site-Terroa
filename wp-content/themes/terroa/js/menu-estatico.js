//Função para o menu responsivo do site
$(document).ready(function(){

	/*$(window).scroll(function(){
		var topo = $(window).scrollTop();
		alert(topo);


	});*/

	$('.static-menu').hide();
	$(window).scroll(function(){
		var topo = $(window).scrollTop();
		if(topo<175){
			$('.static-menu').hide();
		}else{
			$('.static-menu').show();
		}


	});

});