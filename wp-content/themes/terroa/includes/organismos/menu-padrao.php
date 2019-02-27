 <header>    
     <div class="container">
         <!-- Logo Terroá -->
         <div class="logo">
             <a href="http://localhost/terroaempreendimentos/">
             <img src="<?php bloginfo('template_url'); ?>/imagens/logo-terroa.svg" alt="Terroá Empreendimentos">
           </a>
       </div>
       
       <!-- Menu Header -->
       <div class="menu">
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
          
          <!-- Botão Menu Responsivo -->
          <button class="toggle">
             <div class="cbar">
               <div class="bar"></div>
                 <div class="barcent"></div>
                 <div class="bar2"></div>             
             </div>         
          </button>        
     </div>
 </header>