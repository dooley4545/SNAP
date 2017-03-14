<section class="block" id="solutions">
  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <div class="title-bar">
          <h2><?php the_field('solutions_header'); ?></h2>
          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#solutionsModal">
            View All Solutions
          </button>
          <?php get_template_part( 'template-parts/home/blocks/solutions', 'modal' ); ?>
        </div>
      </div>
    </div>
    <?php endwhile; // end of the loop. ?>
    <div class="row">
      <!-- <div class="col-sm-12 col-md-4">
        <div class="text-content">
          <p class="text"><?php the_field('solutions_text'); ?></p>
        </div>
      </div> -->
      <div class="col-sm-12 col-md-12">
        <div class="varied-content">
          <?php get_template_part( 'template-parts/home/blocks/solutions', 'slider' ); ?>
        </div>
      </div>
    </div>
  </div>
</section>