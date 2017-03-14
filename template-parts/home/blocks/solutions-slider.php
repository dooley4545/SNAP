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
            <div class="icon-wrap">
              <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt'] ?>" class="icon"/>
              <h5><?php echo $title; ?></h5>
            </div>
          </a>
        </div>

      <?php endwhile; ?>

  <?php endif; ?> 
</div>

<script>
  $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
      loop:true,
      margin:15,
      nav:true,
      navText: ["<i class='material-icons'>chevron_left</i>","<i class='material-icons'>chevron_right</i>"],
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