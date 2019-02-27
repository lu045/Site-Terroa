<div class="author">	         	 	 	 	         	 	 	
 <div class="avatar">
	 <?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_email(), '100' ); }?>
 </div>
	         	 	 		         	 	 	 
 <div class="avatar-bio">	         	 	 	 	 

	 
	 <h2><?php the_author_posts_link(); ?></h2>

	 <p><?php the_author_description(); ?></p>
 </div>
	         	 	 	
	         	 	 	 
</div>