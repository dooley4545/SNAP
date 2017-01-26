<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SNAP
 */

?>

	 </div><!-- #content -->

  	<footer id="colophon" class="site-footer" role="contentinfo">
  		<!-- <div class="site-info">
  			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'snap' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'snap' ), 'WordPress' ); ?></a>
  			<span class="sep"> | </span>
  			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'snap' ), 'snap', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
  		</div> --><!-- .site-info -->
       
      <div class="container">
        
        
        <div class="row">
          <!-- Corporate Headquaters -->
          <div class="col-sm-12 col-md-4">
            <h4>SNAP, Incorporated</h4>
            <p>SNAP provides professional services that empower Government and private industry clients to address tomorrow’s challenges through better alignment of technology with their mission and business objectives.</p>
            <br>
            <div class="row">
              <ul id='main-items'>
                <li class="col-xs-6 col-sm-3 col-md-6"><a href="tel:18662347627"><i class="material-icons">&#xE0CD;</i><span>1-866-234 SNAP</span></a></li>
                <li class="col-xs-6 col-sm-3 col-md-6"><a href="mailto:info@snapinc.net"><i class="material-icons">&#xE0BE;</i><span>info@snapinc.net</span></a></li>
                <!-- <li><a href="https://www.linkedin.com/company/snap-inc"><span>Follow us on LinkedIn</span></a></li> -->
              </ul>
            </div>
          </div>
          <!-- Our Locations -->
          <div class="col-sm-3 col-md-2">
            <h5>Locations</h5>
            <ul class="dropdown" id=#locations>
              <li class="panel">
                <a role="button" data-toggle="collapse" data-parent="#locations" href="#collapseZero" aria-expanded="false" aria-controls="collapseZero">Corporate Headquaters</a>
                <ul id='collapseZero' class='collapse dropdownInfo'>
                  <li>
                    <p><i class="material-icons">&#xE55F;</i>4080 Lafayette Center Dr.<br>
                    Suite 340<br>
                    Chantilly, VA 20151</p>
                  </li>
                  <li>
                    <a href="tel:7033936400"><i class="material-icons">&#xE0CD;</i>(703) 393-6400</a>
                  </li>
                </ul>
              </li>
              <li class="panel">
                <a role="button" data-toggle="collapse" data-parent="#locations" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Newport News, VA</a>
                <ul id='collapseOne' class='collapse dropdownInfo'>
                  <li>
                    <i class="material-icons">&#xE55F;</i>
                    <p>827 Diligence Dr.<br>
                    Suite 102<br> 
                    Newport News, VA, 23606</p>
                  </li>
                  <li>
                    <i class="material-icons">&#xE0CD;</i>
                    <p>(757) 599-7360</p>
                  </li>
                </ul>
              </li>
              <li class="panel">
                <a role="button" data-toggle="collapse" data-parent="#locations" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Rockville, MD</a>
                <ul id='collapseTwo' class='collapse dropdownInfo'>
                  <li>
                    <i class="material-icons">&#xE55F;</i>
                    <p>22 W Jefferson St<br>
                    Suite 303A<br>
                    Rockville, MD 20850</p>
                  </li>
                  <li>
                    <i class="material-icons">&#xE0CD;</i>
                    <p>(703) 230-6631</p>
                  </li>
                </ul>
              </li>
              <li class="panel">
                <a role="button" data-toggle="collapse" data-parent="#locations" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Oklahoma City, OK</a>
                <ul id='collapseThree' class='collapse dropdownInfo'>
                  <li>
                    <i class="material-icons">&#xE55F;</i>
                    <p>10600 S. Penn<br>
                    Suite 16-392<br>
                    Oklahoma City, OK 73170</p>
                  </li>
                  <li>
                    <i class="material-icons">&#xE0CD;</i>
                    <p>(703) 230-6621</p>
                  </li>
                </ul>
              </li>
              <li class="panel">
                <a role="button" data-toggle="collapse" data-parent="#locations" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Development Center</a>
                <ul id='collapseFour' class='collapse dropdownInfo'>
                  <li>
                    <i class="material-icons">&#xE55F;</i>
                    <p>14901 Bogle Drive<br>
                    Suite 303<br>
                    Chantilly, VA 20151</p>
                  </li>
                  <li>
                    <i class="material-icons">&#xE0CD;</i>
                    <p>(703) 393-6400</p>
                  </li>
                </ul>
              </li>
          </div>
          <!-- E-mails  -->
          <div class="col-sm-3 col-md-2">
            <h5>E-mail</h5>
            <ul class="dropdown" id='emails'>
              <li class="panel">
                <a role="button" data-toggle="collapse" data-parent="#emails" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Business Development</a>
                <ul id="collapseFive" class="collapse dropdownInfo">
                  <li>
                    <p><a href='mailto:bd@snapinc.net'><i class="material-icons">&#xE0BE;</i>bd@snapinc.net</a></p>
                  </li>
                </ul>
              </li>
              <li class="panel">
                <a role="button" data-toggle="collapse" data-parent="#emails" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">General Information</a>
                <ul id="collapseSix" class="collapse dropdownInfo">
                  <li>
                    <p><a href='mailto:info@snapinc.net'><i class="material-icons">&#xE0BE;</i>info@snapinc.net</a></p>
                  </li>
                </ul>
              </li>
              <li class="panel">
                <a role="button" data-toggle="collapse" data-parent="#emails" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">Recruitment</a>
                <ul id="collapseSeven" class="collapse dropdownInfo">
                  <li>
                    <p><a href='mailto:resume@snapinc.net'><i class="material-icons">&#xE0BE;</i>resume@snapinc.net</a></p>
                  </li>
                </ul>
              </li>
              <li class="panel">
                <a role="button" data-toggle="collapse" data-parent="#emails" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">Webmaster</a>
                <ul id="collapseEight" class="collapse dropdownInfo">
                  <li>
                    <p><a href='mailto:webmaster@snapinc.net'><i class="material-icons">&#xE0BE;</i>webmaster@snapinc.net</a></p>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- About SNAP -->
          <div class="col-sm-3 col-md-2">
            <h5>About SNAP</h5>
            <?php wp_nav_menu( array( 'menu' => 'Footer-about', 'menu_class' => 'dropdown', 'container' => '' ) ); ?>
          </div>
          <!-- Resources -->
          <div class="col-sm-3 col-md-2">
            <h5>Resources</h5>
            <?php wp_nav_menu( array( 'menu' => 'Footer-resources', 'menu_class' => 'dropdown', 'container' => '' ) ); ?>
          </div>
        </div>
      </div>
  	</footer><!-- #colophon -->
  </div><!-- #page -->

  </div>
<!--/#inner-wrap-->
</div>
<!--/#outer-wrap-->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.touchSwipe.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main-menu.js"></script>
<?php wp_footer(); ?>
</body>
</html>
