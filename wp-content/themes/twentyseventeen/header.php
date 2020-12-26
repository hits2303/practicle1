<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="stylesheet" href="../practicle/wp-content/themes/twentyseventeen/style1.css" />
<link rel="stylesheet" href="../practicle/wp-content/themes/twentyseventeen/bootstrap.css" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="page-template-home-page page-template-home-page-php">
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header site-header d-flex justify-content-between flex-xl-nowrap align-items-center flex-wrap position-fixed w-100 bg-transparent remove-btn sticky add-btn" role="banner">

		<div class="site-branding flex-grow-0">
			<?php the_custom_logo(); ?>
		</div>
		<button class="menu1-toggle d-xl-none d-block bg-transparent" aria-controls="top-menu" aria-expanded="false">
					<?php
					echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) );
					echo twentyseventeen_get_svg( array( 'icon' => 'close' ) );
					_e( 'Menu', 'twentyseventeen' );
					?>
				</button>
		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<nav id="site-navigation" class="main-navigation navigation-panel flex-grow-1 d-flex align-items-center justify-content-end" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">
				

				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'top',
						'menu_id'        => 'top-menu',
					)
				);
				?>

				<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
					<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
				<?php endif; ?>
			</nav><!-- #site-navigation -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
