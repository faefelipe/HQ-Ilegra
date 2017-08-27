<?php
/**
 * O cabeçalho do nosso tema.
 *
 * Esse template contém as tags <head> e <header> até <div id="content" class="site-content">
 *
 * @package Felipe
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

<div id="page" class="site">

	<header class="site-header" role="banner">

		<div class="container-fluid site-container">
			<div class="row">
			
				<section class="topo col-xs-12">														
					
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'Felipe' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav>					

					<div class="site-branding">
						<?php if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img alt="Logo Ilegra" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"/></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img alt="Logo Ilegra" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"/></a></p>
						<?php endif; ?>
					</div>					

				</section>				

			</div>
		</div>

	</header>

	<div id="content" class="site-content">
		<div class="container-fluid site-container">
			<div class="row">
