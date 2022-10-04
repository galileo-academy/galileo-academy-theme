<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="navbar-wrapper">
	<div class="navbar-wrapper__top">
		<div class="navbar-wrapper__top--logo">
			<img src="<?php the_field('primary_logo', 'options') ?>" height="70" />
		</div>
	</div>
	<div class="navbar-wrapper__bottom">
		<div class="navbar-wrapper__bottom--nav semi-bold">
			<div class="desktop-menu"><?php wp_nav_menu(["theme_location" => "primary"]); ?></div>	
		</div>

	</div>
</div>
