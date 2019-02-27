<div class="posts">                   
<?php
 	
 	$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
 	$args = array(
 		'post_type' => 'post',
 		'paged'     => $paged,
 	);


 	$the_query = new WP_Query( $args ); 

 ?>
 
<?php if ( $the_query->have_posts() ) : ?>
 	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
 <div class="post1">
	 <div class="foto-post">
	     <a href="<?php the_permalink(); ?>">
	         <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>">
	     </a>
	 </div>
	         	 		     
	 <article>
	     <a href="<?php the_permalink(); ?>">
	         <h1><?php the_title(); ?></h1>
	     </a>
	     <p><?php the_excerpt(); ?></p>
	 </article>

	 <div class="botao-b">
	     <div class="row justify-content-md-center">
	         <div class="col-md-auto">
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
<?php wp_reset_postdata(); ?>



<?php else:  ?>
	<p>Não existem posts cadastrados</p>

<?php endif; ?>

</div>




