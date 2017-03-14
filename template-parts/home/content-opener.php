<section id="opener">
<!-- particles.js container -->
<div id="particles-js"></div>
<!-- scripts -->
<script src="<?php bloginfo('template_url'); ?>/js/particles.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>
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
            </div>
          </div>
        <?php endwhile; // end of the loop. ?>
      </div>
    </div>
  </div>
</div>
</section>