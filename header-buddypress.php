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
<meta name="viewport" content="width=device-width, height=device-height"/>
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
<div id='siteWrapper' class='site-wrapper'>
<div id="page" class="site">
	
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
		<!-- <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'site-nav--sections', 'container' => '' ) ); ?> -->

		<!-- Search Trigger -->
		<div class="site-nav--search">
			<div class="btn-wrap">
				<!-- Button in top nav for search bar-->
				<button class="search-button" id="searchButton"><i class="material-icons">&#xE8B6;</i></button>
			</div>
		</div>
			
		<!-- User Menu -->
		<div class="site-nav--usermenu">
			<!-- Button in top nav for user menu -->
			<div class="btn-wrap">
				<button class="user-button" id="userMenu">
					<?php if ( is_user_logged_in() ) {
						global $userdata; get_currentuserinfo(); echo get_avatar( $userdata->ID, 40 );
					} else {
						echo '<i class="material-icons">&#xE853;</i>';
					} ?>
				</button>
			</div>
			<!-- User dropdown menu -->
			<!-- class="dropdown-menu dropdown-menu-right" aria-labelledby="userMenu" -->
			<div class="slide" id="user-slide">
				<?php
				if ( is_user_logged_in() ) : ?>
				<div class="slide-info">
					<div class="user-avatar">
						<?php global $userdata; get_currentuserinfo(); echo get_avatar( $userdata->ID, 100 ); ?>
					</div>
					<div class="user-name">
						<h3><?php global $current_user; get_currentuserinfo();
	      			echo $current_user->user_firstname . "\n";
	      			echo $current_user->user_lastname . "\n";
						?></h3>
					</div>
					<div class="user-title">
						<h5><?php
						$current_user = wp_get_current_user();
						$current_user_id = $current_user->ID;
						bp_profile_field_data( array('user_id'=>$current_user_id,'field'=>'Job Title' ));
						?></h5>
					</div>
				</div>
				<div class="slide-navigation">
					<ul>
						<li>
							<a href=<?php echo bp_loggedin_user_domain(); ?>>Activity</a>
						</li>
						<li>
							<a href="<?php echo bp_loggedin_user_domain(); ?>profile">Profile</a>
						</li>
						<li>
							<a href="<?php echo bp_loggedin_user_domain(); ?>notifications">Notifications</a>
						</li>
						<li>
							<a href="<?php echo bp_loggedin_user_domain(); ?>messages">Messages</a>
						</li>
						<li>
							<a href="<?php echo bp_loggedin_user_domain(); ?>friends">Friends</a>
						</li>
						<li>
							<a href="<?php echo bp_loggedin_user_domain(); ?>groups">Groups</a>
						</li>
						<li>
							<a href="<?php echo bp_loggedin_user_domain(); ?>settings">Settings</a>
						</li>
					</ul>
				</div>
				<?php else : ?>
					<div class="user-login">
						<h4>Employee Login</h4>
				  	<?php wp_login_form( $args ); ?>
				  </div>
				<?php endif; ?>
				<div class="slide-bottom">
					<div class="slide-close" id="user-slide-close" href="#">
						<i class="material-icons">&#xE5CC;</i>
					</div>
					<?php
					if ( is_user_logged_in() ) : ?>
						<div class="user-logout">
							<a href="<?php echo wp_logout_url( get_permalink() ); ?>"><i class="material-icons">&#xE8AC;</i><span>Logout</span></a>
						</div>
					<?php endif; ?>
				</div>

				<!-- <?php
				if ( is_user_logged_in() ) : ?>
				    <li></li>
				<?php endif; ?> -->
			</div>
		</div>

		<!-- Sidemenu button -->
		<div class="site-nav--sidemenu">
			<div class="btn-wrap">
				<button class="nav-button" id="nav_open_btn" href="#"><i class="material-icons">&#xE5D2;</i></button>
				<!-- <button class="nav-btn" id="nav_open_btn" href="#" aria-controls="primary-menu" aria-expanded="false"><i class="material-icons">&#xE5D2;</i><?php esc_html_e( '', 'snap' ); ?></button> -->
			</div>
			<div class="slide" id="nav-slide">
				<div class="slide-navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container' => '' ) ); ?>
				</div>
				<div class="slide-bottom">
					<div class="slide-close" id="nav-slide-close" href="#">
						<i class="material-icons">&#xE5CC;</i>
					</div>
				</div>
			</div>
		</div>


	</header><!-- #masthead -->

	<!-- Search Bar Pop-up -->
	<div class="search-bar" id="searchBar">
		<?php get_search_form(); ?>
		<button class="search-close" id="searchClose"><i class="material-icons">&#xE5CD;</i></button>
	</div>
	<!-- Transparent Cover Layer when search & nav is active -->
	<div class="content-cover" id="contentCover"></div>

	<div id="content" class="site-content">
