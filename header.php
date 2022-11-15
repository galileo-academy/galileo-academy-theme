<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
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
		<div class="navbar-wrapper__bottom--inner">
			<div class="nav semi-bold">
				<div class="desktop-menu"><?php wp_nav_menu(["theme_location" => "primary"]); ?></div>
				<div class="mobile-button-container">
					<div class="mobile-button">
						<div></div>
					</div>
				</div>
				<div class="mobile-menu-container closed">
					<div class="open-menu-button">
						<div></div>
					</div>
					<div class="mobile-menu"><?php wp_nav_menu(["theme_location" => "primary"]); ?></div>
				</div>
			</div>
			<div class="nav social-icons">
				<?php if( have_rows('social_icons', 'options') ): ?>
				<?php while( have_rows('social_icons', 'options') ):  the_row(); ?>
				<a href="<?php the_sub_field('social_url', 'options') ?>" target="_blank"><?php the_sub_field('social_logo') ?></a>
				<?php endwhile; ?>
				<?php endif ?>
			</div>
		</div>
	</div>
</div>
