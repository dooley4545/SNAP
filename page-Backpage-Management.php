<?php
/**
 * Template Name: Backpage-Management
 *
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SNAP
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php get_template_part( 'template-parts/headers/header', 'backpage' ); ?>
			<section class="page-content">
				<div class="container">
					<div class="row">
						<div class="content col-md-8 col-sm-8 col-xs-12">
							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'backpage' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
							?>

							<div class="mgmt-bios">
								<?php if( have_rows('management_bios') ): ?>

									<div class="management_bio">

										<?php while( have_rows('management_bios') ): the_row(); 

											// vars
											$pic = get_sub_field('manager_picture');
											$name = get_sub_field('manager_name');
											$title = get_sub_field('manager_title');
											$bio = get_sub_field('manager_bio');

											?>
											<div class="row">
												<div class="col-md-12 col-sm-12">
													<img src="<?php echo $pic['url']; ?>" alt="<?php echo $pic['alt'] ?>" class="pic"/>
												  <h3><?php echo $name; ?></h3>
												  <h5><?php echo $title; ?></h5>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12 col-sm-12">
													<p><?php echo $bio; ?></p>
												</div>
											</div>
											<hr>

										<?php endwhile; ?>

									</div>

								<?php endif; ?>							
							</div>

						</div>
						<div class="col-md-1 col-sm-1 spacer"></div>
						<div class="col-md-3 col-sm-3 col-xs-12 sidebar" role="complementary">
							<div class="wrapper" data-spy="affix" data-offset-top="300" data-offset-bottom="275">
								<div class="block">
									<?php get_template_part( 'template-parts/sidebar/sidebar', 'about' ); ?>
								</div>
		 						<div class="block">
									<?php get_template_part( 'template-parts/sidebar/sidebar', 'join' ); ?>
								</div>
							</div><!-- .wrapper -->
						</div><!-- .sidebar -->
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- .page-content -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
