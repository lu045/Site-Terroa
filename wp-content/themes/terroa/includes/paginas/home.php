<div class="conthome">
 <div class="slider">
	 <?php
 	
 	
 	 $args = array(
 			'post_type' => 'destaque',
 			'posts_per_page' => 6,
 	 );


 	 $the_query = new WP_Query( $args ); 

     ?>
	 <div class="owl-carousel owl-theme">
         <?php if ( $the_query->have_posts() ) : ?>
         	 <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                 <div class="item">
                     <?php if( get_field('descdisp') == 'Sim' ): ?>
                     <div class="description">
                         <div class="area-desc">
                             <h1><?php the_title(); ?></h1>
                             <h2><?php the_content(); ?></h2>
                             <a href="<?php the_field('url-page'); ?>">
                     	         <button>Saiba Mais</button>
                             </a>
                         </div>
                     </div>
                     <?php endif; ?>
                     
                     <a href="<?php the_field('url-page'); ?>">
                         <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                     </a>
                 </div>
             <?php endwhile; ?>
             <?php wp_reset_postdata(); ?>

             <?php else:  ?>
             	 <div class="nothing-home">
                     <p>Não existem destaques cadastrados!</p>
             	 </div>
         <?php endif; ?>


     </div>

     <div class="container">
         <div class="controls">
             <div class="next">
                 <div class="botnext">
                     <i class="fas fa-angle-right"></i>
                 </div>
             </div>
             <div class="prev">
                 <div class="botprev">
                 	 <i class="fas fa-angle-left"></i>
               </div>
             </div>
         </div>
     </div>
 </div>

 <section class="empreendimentos">
	 <div class="container">
	     <div class="nempreendimentos">
	         <h1><?php the_field('empreendimentos-res'); ?></h1>
	     </div>
	 </div>

	 <?php

 	 	 $args = array(
 			'post_type' => 'portifolioprincipal',
 			'posts_per_page' => 3,
 	 		);


 	 		$the_query = new WP_Query( $args ); 
     ?>
	            	 
	 <div class="portifolio-res">
	     <div class="container">
	         <ul>
	             <?php if ( $the_query->have_posts() ) : ?>
	             	 <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	                     <li>
	         		         <a href="greenpark.php">
	         	 	 	         <figure class="w1">
                                     <div class="filtro ar1"></div> 
      	 	 	 	 	 	
	         	 	 	 	         <img src="<?php bloginfo('template_url'); ?>/imagens/portifolio/home/greenpark.png" alt="Residencial Green Park">

	         	 	 	 	 	 	 
	         	 	 	 	         <figcaption class="ultracorrect1">
	         	 	 	 	 	         <h2>Loteamento Jardim Santana</h2>
	         	 	 	 	 	         <p>Santa Rita do Passa Quatro-SP</p>		
	         	 	 	 	         </figcaption>

	         	 	 	 	         <div class="align-tag">
	         	 	 	 	 	         <div class="home-o">
	         	 	 	 	 	 	          <h2>Pronto para Construir</h2>
	         	 	 	 	 	         </div> 
	         	 	 	 	         </div>	         	 	 	 	 	 	 		
	         	 	 	         </figure>   	 	 	 		
	         	 	         </a>	         		 	 	
	         	         </li>
	         	     <?php endwhile; ?>
                     <?php wp_reset_postdata(); ?>
                     <?php else:  ?>
                     	 <div class="nothighome">
							 <p>Não existem empreendimentos cadastrados!</p>
                     	 </div>
                 <?php endif; ?>       			
	         </ul>

	         <div class="botao-s">
	         	 <a href="empreendimentos">
	         	 	 <button>
	         	 	     <i class="fas fa-plus"></i>	
	         	 	     <h2> Conheça Mais </h2>         	 	 	         
	         	 	</button>
	         	 </a>
	         </div>	         	 	     
	     </div>	   
	 </div>	         	
 </section>

 <section class="parcerias">
	 <div class="container">
	     <div class="parcerias-res">	         	 	     
	         <h1><?php the_field('parcerias-res'); ?></h1>

	   
	         <div class="desc">
	         	 <?php if (have_posts()): ?>
	         	  <?php while(have_posts()): the_post(); ?>
	         	 	    <h2><?php the_content(); ?></h2>
	         	  <?php endwhile; ?>
	         	 <?php endif; ?>
	         </div>

	         <div class="par-icons">	         	 	        
	         	 <div class="row">
	 	 	     	 <div class="col-sm">	 	 	     	 	 	 	     
	 	 	     	 	 <div class="imagem">
                             <?php the_field('i-att'); ?>
                         </div>

                         <div class="text1">
                             <h3><?php the_field('att');?></h3>                 
                         </div>	 	 	   
	 	 	     	 </div>

	 	 	     	 <div class="col-sm">
                         <div class="imagem-2">
                             <?php the_field('i-att-2'); ?>
                         </div>

                         <div class="text2">
                             <h3><?php the_field('att-2');?></h3>                
                         </div>
                       </div>

                     <div class="col-sm">
                         <div class="imagem-3">
                             <?php the_field('i-att-3'); ?>
                         </div>
 
                         <div class="text3">
                             <h3><?php the_field('att-3');?></h3>
                         </div>                            	 
                     </div>
	 	 	     </div>
	 	 	 </div>

	         <p><?php the_field('respar'); ?></p>

	         <div class="botao-p">
	         	 <a href="parcerias">
	         	 	 <button>
	         	 	     <i class="fas fa-plus"></i>	
	         	 	     <h2> Saiba Mais </h2>         	 	 	         
	         	 	 </button>
	         	 </a>
	         </div>
	     </div>
	 </div>
 </section>

 <section class="blog">
	 <div class="container">
	     <div class="area-blog">	         	 	 	 
	         <div class="blog-resumo">
	         	 <div class="cabecalho-pg">
	         	 	 <h1>Blog da Terroá</h1>
	         	 </div>

	         	 <div class="post-resumos">
	         	 	 <?php
 	
 						 $args = array(
 								 'post_type' => 'post',
 								 'posts_per_page' => 2,

 						      );

 					     $the_query = new WP_Query( $args );
 					 ?>

 					 <?php if ( $the_query->have_posts() ) : ?>
 					 	 <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	         	 	         <div class="foto-post">
	         	 		         <a href="<?php the_permalink(); ?>">
	         	 		             <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title() ;?>">
	         	 		         </a>
	         	 	         </div>

	         	              <article>
	         	 		          <a href="<?php the_permalink(); ?>">
	         	 		 	          <h1><?php the_title() ;?></h1>
	         	 		 	          <p><?php the_excerpt(); ?></p>
	         	 		         </a>
	         	              </article>
	         	         <?php endwhile; ?>
                         <?php wp_reset_postdata(); ?>
                         <?php else:  ?>
                         	 <p>Não existem posts cadastrados</p>
                     <?php endif; ?>
	         	 </div>

	         	 <div class="botao-b">
	         	     <a href="blog">
	         	 	     <button>
	         	 	       <i class="fas fa-plus"></i>	
	         	 	       <h2> Leia Mais </h2>         	 	 	         
	         	 	     </button>
	         	 	 </a>
	         	 </div>
	         </div>
	     </div>
	 </div>
 </section>

 <section class="e-marketing">
	 <div class="leeds">
         <div class="container">
             <p><?php the_field('e-mkt');?></p>
             	         
             <form class="formulario">
               <input class="item cname" type="text" placeholder="Nome" required>
               <input class="item cemail" type="email" placeholder="E-mail" required>
               <button class="enviar principal item" >Enviar</button>
             </form>
         </div>
     </div>	 	     
 </section>	         
</div>	         	 	
