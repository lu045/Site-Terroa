//Função para o menu responsivo do site
$(document).ready(function(){
  $('.toggle').click(function(){
     $('ul').toggleClass('active');  
     $('.toggle').toggleClass('active');      
  })

   $('.toggle-static').click(function(){
     $('.staticplay').toggleClass('active');
     $('.toggle-static').toggleClass('active');
  })


  

})