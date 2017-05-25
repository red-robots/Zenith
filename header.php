<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik:700" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'acstarter' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper">
				<div class="logo">
					<a href="http://localhost:8888/startertheme/"><?php the_field('company_name', 'option'); ?></a>
				</div><!-- logo -->
			<div class="right-section">
				<div class="menu">  
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'acstarter' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->
				</div><!--menu --> 
					<div class="search-icon">
						<i class="fa fa-search"></i>
						<form role="search" method="get" class="search-form" action=" <?php esc_url( home_url( '/' ) );?>">
			                <label>
			                    <span class="screen-reader-text"><?php _x( 'Search for:', 'label' ) ;?></span>
			                    <input type="search" class="search-field" placeholder="<?php esc_attr_x( 'Search &hellip;', 'placeholder' );?>" value=" <?php get_search_query();?>" name="s" />
			                </label>
	            		</form>
					</div><!--search-icon -->
			</div><!--right-section -->
		</div><!-- wrapper -->
	</header><!-- #masthead -->

	<div id="content" class="site-content wrapper">
