<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sanisidro
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Caveat&family=Jost:wght@400;800&family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"></head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'sanisidro' ); ?></a>
	<div id="master-header">
	<div id="header-top">
		<div id="top-head-left">
			
			<?php
				wp_nav_menu(
					array(
						'menu' => 'Top Menu',
						'theme_location' => 'menu-3',
						'menu_id'        => 'top-menu',
					)
				);
				?>
		</div>
		<div id="top-head-right">
			<img id="ph-flag" src="<?php the_field('flag', 'option'); ?>"/><?php the_field('content', 'option'); ?>
		</div>
	</div>
	<header id="masthead" class="site-header">
		
		<div id="nav-holder">
			<div id="logo-holder">
			<img id="logo" src="<?php the_field('logo', 'option'); ?>"/>
			</div>
			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div>
		<div id="top-search">
			<?php echo do_shortcode('[ivory-search id="173" title="AJAX Search Form"]'); ?>
			
		</div>		
	</header><!-- #masthead -->
	</div>


