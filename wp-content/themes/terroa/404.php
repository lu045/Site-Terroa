<?php 
	
	$style = 'error404';
	include('header.php');
	include('includes/organismos/menu-estatico.php');
    include('includes/organismos/menu-padrao.php');
    include('includes/organismos/menu-responsivo.php');
    include('includes/paginas/404.php');
    get_search_form();
    include('includes/organismos/relacionados-404.php');
	get_footer();