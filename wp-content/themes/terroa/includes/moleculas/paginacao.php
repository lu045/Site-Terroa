<!--Marcadores de Pagina-->
<div class="paginacao">
 <div class="row justify-content-center">
   <div class="col-md-6">
    
     <div class="pagi-pg">

       <?php
         global $wp_query;
         $big = 999999999; // need an unlikely integer

         echo paginate_links( array(
            'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format'    => '?paged=%#%',
            'current'   => max( 1, get_query_var('paged') ),
            'total'     => $the_query->max_num_pages,
            'prev_next' => true,
            'prev_text' => __('<i id="edit-icon" class="fas fa-chevron-left"></i>'),
            'next_text' => __('<i id="edit-icon"  class="fas fa-chevron-right"></i>'),
            'show_all'  => false,
         ) );
       ?>       
     </div>                                
   </div>
 </div>                
</div>