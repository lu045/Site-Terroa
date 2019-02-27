<div class="relacionados">
 <div class="col-lg-12">
 	 <h2>Você tambem pode gostar destes conteudos!</h2>
 </div>

 <div class="posts">
 	 <?php query_posts( 'posts_per_page=3' ); ?>
 	     <?php if(have_posts()): ?>
 	     	 <?php while(have_posts()): the_post(); ?>
 			 	 <a href="<?php the_permalink(); ?>">
	         	 	 <div class="fotopr-1">
	         	 	 	 <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="post"> 
	         	 	 	 <h3><?php the_title(); ?></h3>
	         	 	 </div>
	         	 </a>	        
	         <?php endwhile; ?>
         <?php else: ?>
             <p>Nenhum post cadastrado!</p>
	     <?php endif; ?>
	 <?php wp_reset_query(); ?>
 </div>
</div>

</section>	 	 	 
</div>   
</div>
 