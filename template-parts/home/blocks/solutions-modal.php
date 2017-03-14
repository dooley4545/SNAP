<div class="modal fade" id="solutionsModal" tabindex="-1" role="dialog" aria-labelledby="solutionsModal">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="modal-dialog " role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" data-dismiss="modal" aria-label="Close"><i class="material-icons">&#xE5CD;</i></button>
              <h3 class="modal-title" id="myModalLabel">Professional Solutions</h3>
            </div>
            <div class="modal-body">
              <div class="row">
                <?php if( have_rows('home_solutions_slider') ): ?>

                  <?php while( have_rows('home_solutions_slider') ): the_row(); 

                    // vars
                    // $bg = get_sub_field('background_image');
                    $icon = get_sub_field('icon');
                    $title = get_sub_field('title');
                    $link = get_sub_field('link');

                    ?>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 solution text-center">
                      <a href="<?php echo $link; ?>">
                        <!-- <img src="<?php echo $bg['url']; ?>" alt="<?php echo $bg['alt'] ?>" class="bg"/> -->
                        <div class="icon">
                          <div class="circle"></div>
                          <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt'] ?>"/>
                        </div>
                        <h5><?php echo $title; ?></h5>
                      </a>
                    </div>

                  <?php endwhile; ?>

                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>