<div class="areasobre">
 	 <div class="container">	 	 	 
	 <section class="sobre">	

	 	 <h1><?php the_title(); ?></h1>

	 	 <div class="sede">
	 	     <img src="<?php the_post_thumbnail_url(); ?>" alt="Sede da Terroá">
	 	   </div>

	 	   <?php if (have_posts() ) : ?>
	 	     <?php while (have_posts() ) : the_post(); ?>
	 	     <article class="sobre">
	 	         <p><?php the_content(); ?></p>	 	 
	 	     </article>
	 	 <?php endwhile; ?>
	 	 <?php endif; ?>

	 	 <div class="filosofia">
	 	 	 <div class="container">
	 	 	     <div class="row">
	 	 
	 	 	     	 <div class="col-sm">	 	 	 	 	  
	 	 	     	 	 <div class="imagem">
                             <img src="<?php bloginfo('template_url'); ?>/imagens/missao.svg" alt="Missão da Empresa">
                         </div>
        
                         <div class="text1">
                             <h1>Missão</h1>
                             <p><?php the_field('mission'); ?></p>
                         </div>	 	 	     	 	 	 	
	 	 	     	 </div>

                     <div class="col-sm">
                         <div class="imagem">
                               <img src="<?php bloginfo('template_url'); ?>/imagens/visaoemp.svg" alt="Visão da Empresa">
                         </div>

                         <div class="text2">
                             <h1>Visão</h1>
                             <p><?php the_field('vision'); ?></p>
                         </div>
                     </div>
  
                     <div class="col-sm">
                         <div class="imagem">
                             <img src="<?php bloginfo('template_url'); ?>/imagens/valores.svg" alt="Valores da Empresa">
                         </div>
                         
                         <div class="text3">
                             <h1>Valores</h1>
                             <p><?php the_field('value'); ?></p>
                         </div>                            	 
                     </div>
	 	 	     	 </div>
	 	 	     </div>	 	 	     	
	 	 	 </div>
	 </section>	 	 		
 </div>   
</div>
