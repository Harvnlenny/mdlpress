<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MDLPress
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site mdl-layout mdl-js-layout">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mdlpress' ); ?></a>

	<header id="masthead" class="site-header mdl-layout__header" role="banner">
	    <div class="mdl-layout__header-row">

		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;


		</div><!-- .site-branding -->

			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'mdlpress' ); ?></button>
			<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

			<?php
			$args = array(
		        'theme_location' => 'primary',
		        'container'       => 'nav',
		        'items_wrap' => '%3$s',
		        'container_class' => 'mdl-navigation mdl-layout--large-screen-only',
				'walker' => new MDLWP_Nav_Walker()
			);
			if (has_nav_menu('primary')) {
			       wp_nav_menu($args);
			    }
		?>
		</div>
	</header><!-- #masthead -->
	<main class="mdl-layout__content">

	<div id="content" class="site-content">
