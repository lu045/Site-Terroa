<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>
	 <?php global $page, $pagged;

	 	wp_title('|', true, 'right');
	 	bloginfo('name' );

	 	$site_description = get_bloginfo ('description', 'display');

	 	if ( $site_description && (is_home() || is_front_page() ))

	 	echo " | $site_description";  
	 ?>

	</title>
	<meta name="format-detection" content="telephone=no"/>
	<meta name=”description” content="Somos uma das empresas mais conceituadas de Santo Antônio de Posse-SP desenvolvendo há 11 anos empreendimentos imobiliários de qualidade para atender as necessidades de nossos clientes e colaboradores.">
	<meta Name=”robots” content=”index”>
	<meta property=”og:title” content=”Terroá Empreendimentos“/>
	<meta property="og:locale" content="pt-br">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/<?php echo $style; ?>.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/geral.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/plugins.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/slick.css">	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/slick-theme.css">	
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/menu-responsivo.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/menu-estatico.js"></script>	
	<script src="<?php bloginfo('template_url'); ?>/js/sliderhome.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modalformemp.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slidergalery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/app-scroll.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	


