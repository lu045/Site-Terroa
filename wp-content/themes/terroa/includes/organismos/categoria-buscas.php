<div class="categorias-busca">
 <div class="row">
	 <div class="col-lg-6">
	 	 <div class="barra-busca">
	 	 	 <form action="<?php bloginfo('home'); ?>/" method="post">
	 	 	     <input type="text" value="<?php the_search_query(); ?>" id='s' name="s"  placeholder="Pesquisar...">
                 <div class="botbus">
                 <button>
	 	 	         <i class="fas fa-search"></i> 
	 	 	     </button>	
	 	 	     </div>     
	 	 	 </form>
	 	 </div>	 	 	     	 	
	 </div>


	 <div class="col-lg-6">
	 	 <select class="catgory" name="category" onchange="location = this.value;">	 	     	
	 	 	 <option value="" disabled selected style="display: none;">Categorias</option>
	 	 	 <option value="http://localhost/terroaempreendimentos/category/lancamentos">Lançamentos</option>
	 	 	 <option value="http://localhost/terroaempreendimentos/category/obras">Obras</option>
	 	 	 <option value="http://localhost/terroaempreendimentos/category/mercado-imobiliario">Mercado Imobiliário</option>
	 	 	 <option value="http://localhost/terroaempreendimentos/category/variedades">Variedades</option>
	 	 	 <option value="http://localhost/terroaempreendimentos/category/empreendimentos">Empreendimentos</option>    		
	 	 </select>
	 </div>	 	 	       
 </div>
</div>
