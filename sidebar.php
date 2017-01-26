<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SNAP
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" role="complementary">
  <?php

  $side_nav = get_field('about_menu');

  // do something with $variable

  ?>
	<?php echo $side_nav; ?>
</aside><!-- #secondary -->
