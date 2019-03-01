
 	 <div class="areapar">
 		<div class="container"> 
	 	 	 <section class="parcerias">
	 	 	     <!--Inicio do Conteudo-->
	 	 	     <h1><?php the_title(); ?></h1>

	 	 	     <?php if(have_posts()): ?>
	 	 	     	 <?php while(have_posts()): the_post(); ?>
	 	 	          <article>
	 	 	 	          <p><?php the_content(); ?></p>
	 	 	          </article>	
	 	 	         <?php endwhile; ?>
	 	 	     <?php endif; ?>

	 	 	     <!--Formulario de Dados-->
	 	 	     <form>
	 	 	 	     <div class="campos">
	 	 	 	 
	 	 	 	         <h2>Seus Dados</h2>
	 	 	 	 
	 	 	 	         <div class="form-group"> 
	 	 	 		         <input class="item" type="text" placeholder="Nome Completo" required>
	 	 	 	         </div>

	 	 	 	         <div class="form-group"> 
	 	 	 		         <input class="item"  type="email" placeholder="E-mail" required>
	 	 	 	         </div>

	 	 	 	         <div class="form-group"> 
	 	 	 		         <input class="item"  type="tel"  placeholder="Telefone para contato" required>
	 	 	 	         </div>

	 	 	 	         <div class="form-group"> 
	 	 	 		         <select class="item" required>
	 	 	 		             <option value="" disabled selected style="display: none;">Forma de Contato Preferida</option>
	 	 	 		             <option>Telefone</option>
	 	 	 		             <option>E-mail</option>
	 	 	 		             <option>Indiferente</option>      		 		                 	
	 	 	 	             </select>
	 	 	 	         </div>

	 	 	 	         <h2>Dados do Terreno</h2>
	 	 	 	
	 	 	 	         <div class="form-group"> 
	 	 	 		         <select class="item" required>
	 	 	 		             <option value="" disabled selected style="display: none;">Finalidade do Projeto</option>
	 	 	 		             <option>Condomínio Vertical</option>
	 	 	 		             <option>Condomínio Horizontal</option>
	 	 	 		             <option>Loteamento</option>
	 	 	 		             <option>Prédio Comercial</option>
	 	 	 		             <option>Outras</option>       		 		                 	
	 	 	 	             </select>
	 	 	 	         </div>

	 	 	 	         <div class="form-group"> 
	 	 	 		         <input class="item"  type="text" placeholder="Endereço" required>
	 	 	 	         </div>	

	 	 	 	         <div class="form-group"> 
	 	 	 		         <input class="item"  type="text" placeholder="Bairro" required>
	 	 	 	         </div>

	 	 	 	         <div class="form-group"> 
	 	 	 		         <input class="item"  type="text" placeholder="Cidade" required>
	 	 	 	         </div>	 

	 	 	 	         <div class="form-group"> 
	 	 	 		         <input class="item"  type="tel" placeholder="CEP" required>
	 	 	 	         </div>	 	 	 

	 	 	 	         <div class="form-group"> 
	 	 	 		         <select class="item" required>
	 	 	 		             <option value="" disabled selected style="display: none;">Selecione o Estado</option>
	 	 	 		             <option>AC</option>
	 	 	 		             <option>AL</option>
	 	 	 		             <option>AP</option>
	 	 	 		             <option>AM</option>
	 	 	 		             <option>BA</option>
	 	 	 		             <option>CE</option>
	 	 	 		             <option>DF</option>
	 	 	 		             <option>ES</option>
	 	 	 		             <option>GO</option>
	 	 	 		             <option>MA</option>
	 	 	 		             <option>MT</option>
	 	 	 		             <option>MS</option>
	 	 	 		             <option>MG</option>
	 	 	 		             <option>PA</option>
	 	 	 		             <option>PB</option>
	 	 	 		             <option>PR</option>
	 	 	 		             <option>PE</option>
	 	 	 		             <option>PI</option>
	 	 	 		             <option>RJ</option>
	 	 	 		             <option>RN</option>
	 	 	 		             <option>RS</option>
	 	 	 		             <option>RO</option>
	 	 	 		             <option>RR</option>
	 	 	 		             <option>SC</option>
	 	 	 		             <option>SP</option>
	 	 	 		             <option>SE</option>
	 	 	 		             <option>TO</option>		 		                 	
	 	 	 	             </select>
	 	 	 	         </div>
	 	 	 	  	 	 	  
	 	 	 	         <div class="form-group"> 
	 	 	 		         <textarea class="item"  placeholder="Escreva aqui a sua mensagem"></textarea>
	 	 	 	         </div>

	 	 	 	         <div class="form-group"> 
	 	 	 		         <button class="enviar par">Enviar</button>
	 	 	 	         </div>
	 	 	 	     </div>	 	 	 	
	 	 	     </form>	 	 	  	    	 	 
	 	 	 </section>	 	 		
	 	 </div>   
 	 </div>
 