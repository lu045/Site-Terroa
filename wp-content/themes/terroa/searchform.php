<div class="row justify-content-md-center">
 <div class="col-lg-8">
 			 
 	 <div class="info">
 		 <p>A página que você está procurando não existe ou foi removida, por favor utilize a barra de pesquisa abaixo para localizar o que procura em nosso site!</p>
 	 </div>

     <div class="barra-busca">
	 	 <form action="<?php bloginfo('home'); ?>/" method="post">
	 	 <input type="text value="<?php the_search_query(); ?>" id='s' name="s"" name="search" placeholder="Pesquisar...">
	 	 <div class="botbus">
             <button>
	 	 	     <i class="fas fa-search"></i> 
	 	 	 </button>	
	 	 </div>  
	 	</form>
	 </div>	 	
 </div>
</div>