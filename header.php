<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Bent u op zoek naar een professioneel en betrouwbaar klusbedrijf in omgeving Zaandam? Dan bent u bij klusbedrijf De Arend aan het juiste adres.">
	<meta name="author" content="">
	<meta name="format-detection" content="telephone=no">
	<meta name="keywords" content="www.klusbedrijfdearend.nl, Klusbedrijf De Arend, Klusbedrijf Arend van der Veekens, aannemer arend, klussenbedrijf van der Veekens, van der veekens klusser, kluswerkzaamheden zaandam, schilder, muur- en metselwerk, dakreparaties, klusbedrijf zaandam, klussenbedrijf zaandam, eline vereplantsoen zaandam, klusopdrachten zaandam, vloeren leggen, betrouwbare klusser, kluswerkzaamheden, schilder zaandam, timmerman zaandam, schilderwerk zaandam">
	<title>Klusbedrijf De Arend - Zaandam</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri() . '/favicon.ico' ?>" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114305707-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-114305707-1');
	</script>
	<?php wp_head();?>

	<style type="text/css">
      body { background-color: #<?php echo get_theme_mod('background_color'); ?> }
    </style> 
</head>

<body id="page-top">
	<nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top">
				<img class="navbar-image img-fluid" src="<?php echo get_template_directory_uri() . '/images/eagle-white.png' ?>"
				    alt="Het logo van Klusbedrijf De Arend" />
				Klusbedrijf De Arend
			</a>
			<button class="text-uppercase navbar-toggler navbar-toggler-right bg-primary text-white rounded" type="button"
			    data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
			    aria-label="Toggle navigation">
				<i class="fa fa-bars"></i>
				Menu
			</button>
			<?php
			wp_nav_menu(array(
				'theme_location' => 'my-menu',
				'depth' => 2,
				'container' => 'div',
				'container_id' => 'navbarResponsive',
				'container_class' => 'navbar-collapse collapse',
				'menu_class' => 'navbar-nav ml-auto',
				'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
				'walker' => new wp_bootstrap_navwalker()
			));
			?>
		</div>
	</nav>