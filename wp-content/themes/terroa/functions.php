<?php 
	
	// Imagem Destacada (Thumbnail)
	add_theme_support('post-thumbnails');

	//Menu Dinamico

	function register_my_menus() {
		register_nav_menus(

			array(
				'header-menu' =>  __('Menu Principal'),
				'static-menu' =>  __('Menu Estatico'),
				'responsive-menu' =>  __('Menu Responsivo'),
				'megamenu' => __('Menu Responsivo Estatico'),
				'blog-menu' => __('Menu de blog'),
			)
		);
		
	}

 add_action('init', 'register_my_menus');

 
 //Paginação//
 function custom_excerpt_length( $length ) {
 return 43;
 }
 add_filter( 'excerpt_length', 'custom_excerpt_length');

 function wordpress_pagination() {
            global $wp_query;
            $big = 999999999;
            echo paginate_links( array(
                  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                  'format' => '?paged=%#%',
                  'current' => max( 1, get_query_var('paged') ),
                  'total' => $wp_query->max_num_pages,
                  'prev_text' => __('<i id="edit-icon" class="fas fa-chevron-left"></i>'),
            	  'next_text' => __('<i id="edit-icon"  class="fas fa-chevron-right"></i>'),
            ) );
      }
 //Registro de Postype
 
 function site_posts_types(){
 	//Destaque
 	register_post_type('destaque', 
 		array(
 			'labels' => array(
 				'name'            =>  __('Destaque'),
 				'singular_name'   =>  __('destaque'),
 			 ),
 		 
 		 'public'      =>  true,
 		 'has_archive' =>  true,
 		 'menu_icon'   => 'dashicons-images-alt2',
 		 'supports'    =>  array('title', 'editor', 'thumbnail', 'page-attributes'),
 		 
 		 )
 	);

 	//Portifolio Home
 	register_post_type('portifoliohome', 
 		array(
 			'labels' => array(
 				'name'            =>  __('Portifolio Principal'),
 				'singular_name'   =>  __('portifolioprincipal'),
 			 ),
 		 
 		 'public'      =>  true,
 		 'has_archive' =>  true,
 		 'menu_icon'   => 'dashicons-index-card',
 		 'supports'    =>  array('title', 'editor', 'thumbnail', 'page-attributes'),
 		 
 		 )
 	);

 }

 add_action('init', 'site_posts_types');
