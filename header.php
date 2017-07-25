<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); echo " | "; bloginfo('description');?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/geral.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/plugins.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/<?php global $style; echo $style; ?>.css">	
	<link rel="stylesheet" href="/bower_components/slick-carousel/slick/slick-theme.css">	
	<link rel="stylesheet" href="/bower_components/slick-carousel/slick/slick.css">
	<link rel="stylesheet" href="/bower_components/lightbox2/dist/css/lightbox.min.css">
		
</head>
<body <?php body_class();?>>
<div class="layout">
	<?php include "includes/organisms/menu-responsivo.php";?>
	<header>
	<div class="top">
		<div class="container">
			<div class="links">
				<ul class="social">
					<li><a href="https://www.facebook.com/matheusfterra" target="_blank"><i class="fa fa-facebook"></i></a><li>
					<li><a href="https://github.com/matheusfterra/"  target="_blank"><i class="fa fa-git"></i></a></li>
					<li><a href="https://github.com/matheusfterra/"  target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://github.com/matheusfterra/"  target="_blank"><i class="fa fa-youtube"></i></a></li>
				</ul>
			</div><!--links-->
		</div><!--container-->
		<div class="logo">
				<a href="#"><img src="images/logo.png" alt="logo"></a>
			</div><!--logo-->
			
	</div><!--top-->
	
	<div class="barra">	
		<div class="container">
			<a href="#">	
				<img src="images/logo2.png" alt="logo">
			</a>
			<?php include "includes/organisms/menu.php";?>
			<form class="navbar-form navbar-right">
        		<div class="form-group">
          			<input type="text" class="form-control" placeholder="Search">
        		</div>
        		<button type="submit" class="btn btn-default"><i class="fa fa-chevron-right"></i></button>
      		</form>
			<a class="toggle" href="javascript:;">
				<span></span>
				<span></span>
				<span></span>
			</a>
		</div><!--container-->
	</div><!--barra-->
</header>
<main>