<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package simple wedding
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

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'simple-wedding' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
	<div class="grid-construct">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'simple-wedding' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</div><!-- .grid-construct -->
	</header><!-- #masthead -->


<section class="hero-image" style="background-image:url(<?php the_field('hero_image'); ?>)">
		<?php //if( get_field('hero_image') ): ?>
			<!--<img src="<?php //the_field('hero_image'); ?>" />-->
		<?php //endif; ?>
	<div class="grid-construct">
		<div class="hero-text-overlay">
		<?php if( get_field('hero_title') ): ?>
			<h2 class="hero-title"><?php the_field('hero_title'); ?></h2>
		<?php endif; ?>

		<?php if( get_field('hero_date') ): ?>
			<h3 class="hero-date"><?php the_field('hero_date'); ?></h3>
		<?php endif; ?>
		</div><!-- .hero-text-overlay -->
	</div><!-- .grid-construct -->
</section><!-- .hero-image -->
