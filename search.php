<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package SNAP
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<header id="search-header">
				<div class="container">
					<!-- <h1 class="search-title"><?php printf( esc_html__( 'Search Results for: %s', 'snap' ), '<span>' . get_search_query() . '</span>' ); ?></h1> -->
					<div class="row">
						<div class="col-md-12">
							<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
							  <input type="search" placeholder="<?php echo esc_attr( 'What are you looking for?', 'snap' ); ?>" name="s" id="site-nav--search-input" value="<?php echo esc_attr( get_search_query() ); ?>" aria-label="search"/>
							  <button type="submit"><i class="material-icons">&#xE8B6;</i></button>
							</form>
						</div>
				</div>
			</header><!-- .search-header -->
			<section class="page-content">
				<?php
				if ( have_posts() ) : ?>
					<div class="container">
						<div class="row">
							<div class="col-sm-8 col-md-8 content">
								<ul id="search-results">
								<?php
								/* Start the Loop */
								while ( have_posts() ) : the_post();

									/**
									 * Run the loop for the search to output the results.
									 * If you want to overload this in a child theme then include a file
									 * called content-search.php and that will be used instead.
									 */
									get_template_part( 'template-parts/content', 'search' );

								endwhile;

								the_posts_navigation();

								else :

									get_template_part( 'template-parts/content', 'none' );

								endif; ?>
								</ul>
							</div>
							<div class="col-sm-1 col-md-1 spacer"></div>
							<div class="col-md-3 col-sm-3 col-xs-12 sidebar">
								<div class="wrapper">
									<div class="block">
										<?php get_template_part( 'template-parts/sidebar/sidebar', 'popular-searches' ); ?>
									</div>
								</div>
							</div>
						</div>
					</div><!-- .container --> 
			</section><!-- .page-content -->
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
