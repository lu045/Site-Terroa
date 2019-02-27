<div class="posts">	 	 	     	 	 	 	     	
 <div class="resuldados">
     <?php if (have_posts()):  ?>
      <?php while (have_posts()): the_post(); ?> 
       	 <div class="r1">
	         <div class="row">
	 	         <div class="col-sm-4">
	 	 	         <a href="<?php the_permalink(); ?>">
	 	 	             <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
	 	 	         </a>	 	 	     	 	 	         
	 	         </div>

	             <div class="col-sm-8">
	 	 	         <div class="description">
	 	 	             <article>
	 	 	     	         <a href="<?php the_permalink(); ?>">
	 	 	     	 	         <h1><?php the_title(); ?></h1>
	 	 	     	         </a>
	 	 	     	         <h2><?php the_category(', '); ?> - <?php the_time('d/m/y'); ?></h2>
	 	 	     	         <p><?php the_excerpt(); ?></p>     	 	 	
	 	 	             </article>
	 	 	         </div>

	 	 	         <div class="botao-b-pc">
	 	 	             <a href="<?php the_permalink(); ?>">
	 	 	     	         <button>
	 	 	     	 	         <h2>Continue Lendo</h2>	 	 	     	 	 	     	 	 	 
	 	 	     	         </button>
	 	 	             </a>
	 	 	         </div>
	             </div>
	         </div>
         </div>
      <?php endwhile; ?>

     <?php else: ?>
	 	 <div class="nothing">
	 	 	 <h2>Nenhum resultado encontrado</h2>
	 	 </div>
     <?php endif ?>	 	
</div>

 <div class="resuldados-responsivo">
	 <?php if (have_posts()):  ?>
         <?php while (have_posts()): the_post(); ?> 
	         <div class="r1">
	 	         <div class="description">    
	 	 	         <article>
	 	 	             <a href="<?php the_permalink(); ?>">
	 	 	     	         <h1><?php the_title(); ?></h1>
	 	 	             </a>
	 	 	             <h2><?php the_category(', '); ?> - <?php the_time('d/m/y'); ?></h2>
	 	 	         </article>
	 	         </div>
	 	 	     	 	 	 
	 	         <div class="imagem-responsiva">	 	 	     	 	 	 
	 	 	         <a href="<?php the_permalink(); ?>">
	 	 	             <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
	 	 	         </a>
	 	         </div>	 	 	     	 	 	         
	 	 	 	 	     	 	 	     
	 	         <div class="description">
	 	 	         <article>
	 	 	             <p><?php the_excerpt(); ?></p>     	 	 	
	 	 	         </article>
	 	         </div>

	 	         <div class="botao-b-pc-resp">
	 	 	         <a href="<?php the_permalink(); ?>">
	 	 	             <button>
	 	 	     	         <h2>Continue Lendo</h2>	 	 	     	 	 	     	 	 	 
	 	 	             </button>
	 	 	         </a>
	 	         </div>	 	 
	         </div>
	     <?php endwhile; ?>
	 <?php else: ?>
		 <div class="nothing">
	 	 	 <h2>Nenhum resultado encontrado</h2>
	 	 </div>
	 <?php endif ?>	 
 </div>

 <div class="page-results">
     <?php wordpress_pagination(); ?>
 </div>

     