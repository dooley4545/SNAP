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
		<section id="opener">
			<!-- particles.js container -->
			<div id="particles-js"></div>

			<!-- scripts -->
			<script src="<?php bloginfo('template_url'); ?>/js/particles.js"></script>
			<script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>
			<!-- <script>
				$(window).scroll(function () {
				    setBackgroundPosition();
				})
				$(window).resize(function() {
				    setBackgroundPosition();
				});
				function setBackgroundPosition(){
				    $("#particles-js").css('background-position', "50%" + (Math.max(document.body.scrollTop, document.documentElement.scrollTop) / 20) + "%");
				}
			</script> -->
			
			<!-- Content -->
			<div class="message">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<?php while ( have_posts() ) : the_post(); ?>
								<header id="tagline">
									<h1><?php the_field('main_tagline'); ?></h1>
								</header>
								<div id="welcome">
									<div class="row">
										<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
											<p><?php the_field('intro_text1'); ?></p>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
											<p><?php the_field('intro_text2'); ?></p>
										</div>
										<!-- <div class="col-md-4 col-sm-6 col-xs-12">
											<a href="<?php the_field('about_link'); ?>" class="btn btn-default"><span><?php the_field('about_link_text'); ?></span><i class="material-icons">&#xE5C8;</i></a>
										</div> -->
									</div>
								</div>
							<?php endwhile; // end of the loop. ?>
						</div>
					</div>
				</div>
			</div>

		</section>
		<section class="block" id="solutions">
			<div class="container">
				<div class="row">
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="col-sm-12 col-md-4">
							<h2><?php the_field('solutions_header'); ?></h2>
						</div>
						<div class="col-sm-12 col-md-8">
							<p><?php the_field('solutions_text'); ?></p>
						</div>
					<?php endwhile; // end of the loop. ?>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="owl-carousel owl-theme">
						  <?php if( have_rows('home_solutions_slider') ): ?>

						      <?php while( have_rows('home_solutions_slider') ): the_row(); 

						        // vars
						        $bg = get_sub_field('background_image');
						        $icon = get_sub_field('icon');
						        $title = get_sub_field('title');
						        $link = get_sub_field('link');

						        ?>
						        <div class="slide">
											<a href="<?php echo $link; ?>">
							          <img src="<?php echo $bg['url']; ?>" alt="<?php echo $bg['alt'] ?>" class="bg"/>
							          <div class="overlay"></div>
							          <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt'] ?>" class="icon"/>
							          <h5><?php echo $title; ?></h5>
							        </a>
						        </div>

						      <?php endwhile; ?>

						  <?php endif; ?> 
						</div>

						<script>
						  $(document).ready(function(){
						    $('.owl-carousel').owlCarousel({
						    	loop:true,
							    margin:20,
							    nav:true,
							    navText: ["<span class='glyphicon glyphicon-chevron-left'></span>","<span class='glyphicon glyphicon-chevron-right'></span>"],
							    responsive:{
							        0:{
							            items:2
							        },
							        600:{
							            items:3
							        },
							        1000:{
							            items:4
							        },
							        1480:{
							        		items:5
							        }
							    }
						    });
						  });
						</script>
						<br>
						<a href="<?php the_field('solutions_link'); ?>" class="btn btn-default">Learn More</a>
					</div>
				</div>
			</div>
		</section>
		<section class="block" id="certifications">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<?php while ( have_posts() ) : the_post(); ?>
							<h2><?php the_field('certifications_title'); ?></h2>
							<br>
							<p><?php the_field('certifications_text'); ?></p>
							<br>
							<a href="<?php the_field('solutions_link'); ?>" class="btn btn-default">Learn More</a>
						<?php endwhile; // end of the loop. ?>
					</div>
					<div class="col-sm-12 col-md-6">
					<div class="row">
						<?php if( have_rows('certification_images') ): ?>

							<?php while( have_rows('certification_images') ): the_row(); 

								// vars
								$image = get_sub_field('certification_image');
								$title = get_sub_field('certification_title');

								?>
								
									<div class="col-md-6 col-sm-12">
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
				<div class="row">

					<div class="col-xs-12 col-sm-12 col-md-6">
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

					<div class="col-sm-12 col-md-6">
						<?php while ( have_posts() ) : the_post(); ?>
							<h2><?php the_field('cv_title'); ?></h2>
							<br>
							<p><?php the_field('cv_description'); ?></p>
							<br>
							<a href="<?php the_field('solutions_link'); ?>" class="btn btn-default">Learn More</a>
						<?php endwhile; // end of the loop. ?>
					</div>

				</div>
			</div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
