<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="google-site-verification" content="7jkYXmgFqwiybgzK0jsxEzMus1PZNA1biO9X8DLKDmI" />
		<title><?php wp_title('&laquo;', true, 'right'); bloginfo( 'name' ); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/personal-blog/jquery.fixedscroll.js"></script>
		<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/personal-blog/jcarousellite_1.0.1.min.js"></script>
			
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php if (!is_admin()) { wp_enqueue_script('html5_shim'); } ?>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

	  <div id="wrapper">
        <div id="main">
            <header>
                <!--<h1><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>-->
            </header>
            <section>
