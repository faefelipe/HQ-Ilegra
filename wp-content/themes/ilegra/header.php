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
<link href="https://fonts.googleapis.com/css?family=Lato|Merienda+One" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">

	<header class="site-header" role="banner">

		<div class="container-fluid site-container">
			<div class="row">
			
				<section class="topo col-xs-12">																									

					<div class="site-branding">
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img alt="Logo Ilegra" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"/></a></h1>						
					</div>					

				</section>				

			</div>
		</div>

	</header>

	<div id="content" class="site-content">
		<div class="container-fluid site-container">
			<div class="row">
