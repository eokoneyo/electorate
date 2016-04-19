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
			      <!-- <ul id="nav-mobile" class="right hide-on-med-and-down">
			      	{% block customMenu %}{% endblock %}
			      </ul> -->
			      <?php //wp_nav_menu(); ?>
			    </div>
			</nav>
	    </header>
		<div id="site-wrapper">