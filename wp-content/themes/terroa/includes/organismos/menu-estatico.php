<div class="static-menu">
     <div class="container">
         <div class="logo-estatico">
             <a href="http://localhost/terroaempreendimentos/">
		         <img src="<?php bloginfo('template_url'); ?>/imagens/logo-terroa.svg" alt="Terroá Empreendimentos">
	         </a>
	     </div>

	     <div class="menu-options">
     	     <nav>
		          <ul>
			          <li>
                  <?php wp_nav_menu(
                    array ('theme_location' => 'header-menu')
                  ); ?>                  
                </li>				
		          </ul>
	          </nav>
         </div>

         <button class="toggle-static">
          	 <div class="cbar">
          	 	 <div class="bar"></div>
          	     <div class="barcent"></div>
          	     <div class="bar2"></div>          		
          	 </div>          
         </button> 
     </div>

     <div class="menu-responsivo-static">
     	 <nav>
     	     <ul class="staticplay">
 	             <li><a href="sobre">Sobre</a></li>	
                 <li><a href="empreendimentos">Empreendimentos</a></li>	
                 <li><a href="parcerias">Parcerias</a></li>	
                 <li><a href="contato">Contato</a></li>
                 <li><a href="blog">Blog</a></li>					
             </ul>
         </nav>
     </div>    
  </div>