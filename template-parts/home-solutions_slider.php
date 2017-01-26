<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SNAP
 */

?>

<h3>Solutions Slider Goes Here</h3>



<div class="owl-carousel owl-theme">
  <?php if( have_rows('home_solutions_slider') ): ?>

      <?php while( have_rows('home_solutions_slider') ): the_row(); 

        // vars
        $bg = get_sub_field('background');
        $icon = get_sub_field('icon');
        $title = get_sub_field('title');
        $link = get_sub_field('link');

        ?>
        <div class="slide">
          <img src="<?php echo $background['url']; ?>" alt="<?php echo $background['alt'] ?>" class="background"/>
          <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt'] ?>" class="icon"/>
          <h5><?php echo $title; ?></h5>
          <a href="<?php echo $link['url']; ?>" class="btn btn-default">Learn More</a>
        </div>

      <?php endwhile; ?>

  <?php endif; ?> 
</div>

<script>
  $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
      margin: 20,
      loop: true,
    });
  });
</script>