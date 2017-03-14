<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SNAP
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php if ( is_page_template('page-Home.php')) :?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css">
<?php endif; ?>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modernizer.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<?php if ( is_page_template('page-Home.php')) :?>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
<?php endif; ?>
<script>
$(document).ready(function() {
    $('#menu-bp').unwrap();
});
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

<div id="outer-wrap">
<div id="inner-wrap">
	
	<!-- Begin Masthead -->
	<header id="masthead" class="site-nav" role="banner">
			
		<!-- SNAP Logo -->
		<div class="site-nav--home">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php endif; ?>
		</div>
		
		<!-- Spacer for mobile - May not need -->
		<div class="site-nav--filler"></div>

		<!-- Masthead Navigation for Desktop --> 
		<?php bp_nav_menu(); ?>



<!-- 		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'site-nav--sections', 'container' => '' ) ); ?> -->

		<!-- Search Trigger -->
		<div class="site-nav--search">
			<div class="btn-wrap">
				<!-- Button in top nav for search bar-->
				<button class="search-button" id="searchButton"><i class="material-icons">&#xE8B6;</i></button>
			</div>
		</div>
			
		<!-- User Menu -->
		<div class="site-nav--usermenu">
			<div class="dropdown">
				<!-- Button in top nav for user menu -->
				<button class="user-button" id="userMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					<?php if ( is_user_logged_in() ) {
						global $userdata; get_currentuserinfo(); echo get_avatar( $userdata->ID, 40 );
					}
					else {
						echo '<i class="material-icons">&#xE853;</i>';
					} ?>
				</button>
				<!-- User dropdown menu -->
				<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="userMenu">
					<?php
					if ( is_user_logged_in() ) : ?>
						<li class="dropdown-header">
							<?php global $current_user; get_currentuserinfo();
		      			echo $current_user->user_firstname . "\n";
		      			echo $current_user->user_lastname . "\n";
							?>
						</li>
						<li role="separator" class="divider"></li>
					<?php endif; ?>
					<li><?php wp_loginout(); ?></li>
					<?php
					if ( is_user_logged_in() ) : ?>
					    <li><a href="<?php echo get_edit_user_link(); ?>">Profile</a></li>
					<?php endif; ?>
					<!-- <?php bp_get_displayed_user_nav(); ?>

							<?php

							/**
							 * Fires after the display of member options navigation.
							 *
							 * @since 1.2.4
							 */
							do_action( 'bp_member_options_nav' ); ?> -->
				</ul>
			</div>
		</div>

		<!-- Sidemenu button -->
		<div class="site-nav--sidemenu">
			<button class="nav-btn" id="nav_open_btn" href="#" aria-controls="primary-menu" aria-expanded="false"><i class="material-icons">&#xE5D2;</i><?php esc_html_e( '', 'snap' ); ?></button>
		</div>


	</header><!-- #masthead -->

	<!-- Search Bar Pop-up -->
	<div class="search-bar" id="searchBar">
		<?php get_search_form(); ?>
		<button class="search-close" id="searchClose"><i class="material-icons">&#xE5CD;</i></button>
	</div>
	<!-- Transparent Cover Layer when search & nav is active -->
	<div class="content-cover" id="contentCover"></div>

	<nav id="nav" class="main-navigation pushmenu-left" role="navigation">
			<div class="block">
				<div class="top-block">
					<a class="nav-btn" id="nav-close-btn" href="#" aria-controls="primary-menu" aria-expanded="false"><i class="material-icons">&#xE5CD;</i><?php esc_html_e( '', 'snap' ); ?></a>
				</div>
				<?php bp_nav_menu(); ?> 
				<div class="user-info">
					<div class="pic">
						<?php global $userdata; get_currentuserinfo(); echo get_avatar( $userdata->ID, 40 ); ?>
					</div>
					<div class="login-out"><?php wp_loginout(); ?></div>
					<p class="name"><?php global $current_user; get_currentuserinfo();
	      			echo $current_user->user_firstname . "\n";
	      			echo $current_user->user_lastname . "\n";
						?>
					</p>
				</div>
			</div>
	</nav><!-- #site-navigation -->
	<div id="content" class="site-content">
