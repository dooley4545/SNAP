<?php
/**
 * Template Name: Home
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
		<?php get_template_part( 'template-parts/home/content', 'opener' ); ?>
		<?php get_template_part( 'template-parts/home/content', 'solutions' ); ?>
		<section class="block" id="certifications">
			<div class="container">
				<div class="text-content">
					<div class="row">
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="col-sm-12 col-md-4">
								<h3><?php the_field('certifications_title'); ?></h3>
							</div>
							<div class="col-sm-12 col-md-8">
								<p class="text"><?php the_field('certifications_text'); ?></p>
							</div>
						<?php endwhile; // end of the loop. ?>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="row">
							<?php if( have_rows('certification_images') ): ?>

								<?php while( have_rows('certification_images') ): the_row(); 

									// vars
									$image = get_sub_field('certification_image');
									$title = get_sub_field('certification_title');

									?>
									
										<div class="col-md-4 col-sm-12">
											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" class="image"/>
										  <h5><?php echo $title; ?></h5>
										</div>


								<?php endwhile; ?>

							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="block" id="contract-vehicles">
			<div class="container">
				<div class="text-content">
					<div class="row">
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="col-sm-12 col-md-4">
								<h3><?php the_field('cv_title'); ?></h3>
							</div>
							<div class="col-sm-12 col-md-8">
								<p class="text"><?php the_field('cv_description'); ?></p>
							</div>
						<?php endwhile; // end of the loop. ?>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<ul class="home-cv">
							<?php if( have_rows('cv_prime_list') ): ?>

								<?php while( have_rows('cv_prime_list') ): the_row(); 

								// vars
								$link = get_sub_field('contract_link');
								$image1 = get_sub_field('contract_logo');
								$title1 = get_sub_field('contract_title');

								?>

									<li class="cv-contract item<?php echo $i++; ?>">
										<a href="<?php echo $link; ?>">
											<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt'] ?>" class="image"/>
										  <h5><?php echo $title1; ?></h5>
										 </a>
									</li>


								<?php endwhile; ?>

							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
