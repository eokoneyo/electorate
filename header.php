<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('title')?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
		<?php wp_head() ?>
	</head>
	<body>
		<header>
	      	<nav>
			    <div class="nav-wrapper">
			      <a href="/" class="brand-logo" href="<?php echo home_url('/'); ?>"><?php bloginfo('name') ?></a>
			      <?php     /**
			      	* Displays a navigation menu
			      	* @param array $args Arguments
			      	*/
			      	$args = array(
			      		'theme_location' => 'primary',
			      		'items_wrap' => '%3$s',
			      		'container' => 'ul',
			      		'menu_class' => 'right hide-on-med-and-down',
			      		'menu_id' => 'nav-mobile'
			      	);
			      
			      	wp_nav_menu( $args ); ?>
			    </div>
			</nav>
	    </header>
		<div id="site-wrapper">