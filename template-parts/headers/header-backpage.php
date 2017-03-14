<header class="entry-header backpage">
  <div class="title">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </div>      
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
              <?php if(function_exists('bcn_display'))
              {
                  bcn_display();
              }?>
          </div>
        </div>      
      </div>
    </div>
  </div>
</header><!-- .entry-header -->