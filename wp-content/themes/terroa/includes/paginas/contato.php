
 	 <div class="areacontato">
 		 <div class="container">

	 	 	 <section class="contato">		 	 	    	 
	 	 	     <!--Inicio do Conteudo-->
	 	 	     <h1><?php the_title(); ?></h1>

	 	 	     <?php if(have_posts()): ?>
	 	 	     	 <?php while(have_posts()): the_post(); ?>
	 	 	             <article>
	 	 	    	         <p><?php the_content(); ?></p>
	 	 	             </article>
	 	 	         <?php endwhile; ?>
	 	 	     <?php endif; ?>

	 	 	     <!-- Formulario de Contato -->
	 	 	     <form>
	 	 	    	 <div class="campos">
	 	 	    	 	 <div class="form-group"> 
	 	 	 		         <input class="item" type="text" placeholder="Nome Completo" required>
	 	 	 	         </div>

	 	 	 	         <div class="form-group"> 
	 	 	 		        <input class="item" type="email" placeholder="Seu E-mail" required>
	 	 	 	         </div>

	 	 	 	         <div class="form-group"> 
	 	 	 		         <input class="item" type="tel" placeholder="Telefone para contato" required>
	 	 	 	         </div>

	 	 	 	         <div class="form-group"> 
	 	 	 		         <select class="item" required>
	 	 	 		             <option value="" disabled selected style="display: none;">Selecione o Assunto</option>
	 	 	 		             <option>Condomínio Empire Palm</option>
	 	 	 		             <option>Residencial Green Park</option>
	 	 	 		             <option>Condomínio Imperial</option>
	 	 	 		             <option>Jardim São Paulo</option>
	 	 	 		             <option>Críticas e Sugestões</option>
	 	 	 		             <option>Duvidas</option>
	 	 	 		             <option>Outros Assuntos</option>	 		                 	
	 	 	 	             </select>
	 	 	 	         </div>
	 	 	 	                  	                  
	 	 	 	         <div class="form-group"> 
	 	 	 		         <textarea class="item"  placeholder="Escreva aqui a sua mensagem"></textarea>
	 	 	 	         </div>

	 	 	 	         <div class="form-group"> 
	 	 	 		         <button class="enviar con" >Enviar</button>
	 	 	 	         </div>
	 	 	    	 </div>
	 	 	     </form>
	 	 	 </section>	 	 	 	     
	 	 	 
	 	 	 <section class="localizacao">
	 	 	 	 <!--Endereço-->
	 	 	     <h1>Localização</h1>
	 	 	     <article class="endereco">Rua João Lucon, 16, Centro, Santo Antônio de Posse-SP</article>
	 	 	    	 	 
	 	 	     <!--Mapa do Google-->
	 	 	     <div id="map"></div>

	 	 	     <!--Scripts do Mapa-->
	 	 	     <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/mapa.js"></script>
	 	 	     <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBY2AsV7LjkOWuG7Fbqez9ASh-clDO1B9I&callback=initMap">
                 </script>
             </section>	 	 	 	    			 	 	    		 	 	 	 		
	 	 </div>   
     </div>
