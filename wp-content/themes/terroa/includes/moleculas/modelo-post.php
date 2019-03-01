 <!--Modelo de post-->
<div class="post">                   
   <?php the_post(); ?>
   <div class="post1">
     <div class="site-map">
       <div class="row justify-content-md-flex-start">
         <div class="col-md-9">
           <div class="caminho">
             <h4><a href="blog">Blog </a>/  <?php the_category(', '); ?> / <?php the_title(); ?></h4>
           </div>
         </div>

         <div class="col-md-3">
           <div class="date">
               <h4><?php the_date(); ?></h4>
           </div>
         </div>
     </div>
   </div>
                                              

   <div class="foto-post">                     
     <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"> 
   </div>

   <div class="title">
     <h1><?php the_title(); ?></h1>
   </div>
                                     
   <article>
     <p><?php the_content(); ?></p>
   </article>

   <div class="tags">
      <?php the_tags( '',''); ?>
   </div>

