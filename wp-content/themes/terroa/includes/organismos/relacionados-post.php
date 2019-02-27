<div class="relacionados">
 <h2>Você tambem pode gostar destes conteudos!</h2>
	         	 	 	 	         	 	 	 	         	 	 	 
 <div class="row justify-content-md-flex-start">
     <?php
 	
 		$args = array(
 			'post_type' => 'post',
 			'post__not_in' => array( get_the_ID() ) ,
            'orderby' => 'rand',
        	'posts_per_page' => 3,

 		);

 		$the_query = new WP_Query( $args ); 
 	 ?>

 	 <?php if ( $the_query->have_posts() ) : ?>
 	 	 <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
 
	         <div class="col-sm-4">
	             <a href="<?php the_permalink(); ?>">
	                 <div class="fotopr-1">
	         	         <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
	         	         <h3><?php the_title(); ?></h3>	
	                 </div>
	             </a>	         	 	 	 	 
	         </div> 


	     <?php endwhile; ?>
         <?php wp_reset_postdata(); ?>

         <?php else:  ?>

     <?php endif; ?>
	

 </div>
</div>
	         	 
</div>               
</section>	 	 		
</div>   
</div>