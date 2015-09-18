<?php

/**

 * The template for displaying the header

 *

 * Displays all of the head element and everything up until the "site-content" div.

 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width">

	<link rel="profile" href="<?php echo esc_url('http://gmpg.org/xfn/11'); ?>">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php if ( get_theme_mod('quidus_site_favicon') != '' ) : ?>

		<link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('quidus_site_favicon')); ?>" />

	<?php endif; ?>

	<!--[if lt IE 9]>

	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>

	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto">

	<![endif]-->



	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/instafeed.js"></script>



	<?php wp_head(); ?>

    <script>

        window.onload = function()

        {

            jQuery('#menu-menu-principal > .current-menu-item > button').click();

            jQuery('#menu-menu-principal > .current-menu-parent > button').click();

        }

    </script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		ga('create', 'UA-5650687-30', 'auto');
		ga('send', 'pageview');
	</script>

</head>



<body class="site-bg" <?php body_class(); ?>>

<header>

	<div class="logo">

		<a href="<?php echo get_option('siteurl'); ?>">

			<img class="logo-img" src="<?php global $redux_tm;	echo $redux_tm['header-image']['url']; ?>" alt="Elijo votar">

		</a>

		<div class="social">

		<div class="redes">

			<ul>

				<li><a href="http://twitter.com/telemedellin" target="_blank" class="icon" data-icon="a"></a></li>

				<li><a href="http://fb.com/telemedellin.tv" target="_blank" class="icon" data-icon="b"></a></li>

				<li><a href="http://instagram.com/telemedellin" target="_blank" class="icon" data-icon="c"></a></li>

				<li><a href="https://www.youtube.com/user/telemedellin" target="_blank" class="icon" data-icon="d"></a></li>

			</ul>

		</div>

	</div>
	
	</div>

</header>

<div class="bg-content">

	<div id="page" class="hfeed site">

		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'quidus' ); ?></a>



		<div class="main-content">

			<div id="sidebar" class="sidebar">

				<?php get_sidebar(); ?>

			</div><!-- .sidebar -->



			<div id="content" class="site-content">