<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<title><?php bloginfo('title')?></title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<?php wp_head() ?>
	</head>
	<body>
		<header>
	      	<nav>
			    <div class="nav-wrapper">
			      <a class="brand-logo" href="<?php echo home_url('/'); ?>"><span class="brand-highlight"><?php bloginfo('name') ?></span></a>
			      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			      <?php     /**
			      	* Displays a navigation menu
			      	* @param array $args Arguments
			      	*/	
			      		//Desktop menu
			      		$desktop_menu_args = array(
			      			'theme_location' => 'primary-menu',
			      			'container' => 'ul',
			      			'container_class' => 'menu-{menu-slug}-container',
			      			'container_id' => '',
			      			'menu_class' => 'right hide-on-med-and-down',
			      			'menu_id' => 'nav-mobile'
			      		);
			      	
			      		wp_nav_menu( $desktop_menu_args ); ?>

			      <?php    /**
			      	* Displays a navigation menu
			      	* @param array $args Arguments
			      	*/
			      	$mobile_menu_args = array(
			      		'theme_location' => 'primary-menu',
			      		'container' => 'ul',
			      		'container_class' => 'menu-{menu-slug}-container',
			      		'container_id' => '',
			      		'menu_class' => 'side-nav',
			      		'menu_id' => 'mobile-demo'
			      	);
			      
			      	wp_nav_menu( $mobile_menu_args ); ?>
			    </div>
			</nav>
	    </header>
		<main id="site-wrapper">