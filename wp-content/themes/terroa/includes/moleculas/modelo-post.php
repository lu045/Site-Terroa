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
      <p>modelotagaaaasasddadada</p>
      <p>TAG1</p>
      <p>TAG2</p>
      <p>TAG3</p>
      <p>TAG4</p>
      <p>TAG5</p>
      <p>TAG6</p>
      <p>TAG7</p>
      <p>Modpa</p>
      <p>Parrudo</p>
      <p>Parrudoaaa</p>
      <p>TAG5</p>
      <p>TAG6</p>
      <p>TAG7</p>
      <p>Modpa</p>
      <p>Parrudo</p>
      <p>Parrudoaaa</p>
      <p>TAG5</p>
      <p>TAG6</p>
      <p>TAG7</p>
      <p>Modpa</p>
      <p>Parrudo</p>
      <p>Parrudoaaa</p>

   </div>

