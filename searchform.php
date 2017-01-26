<?php
/**
 * The search form for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SNAP
 */

?>

<form role="search" method="get" class="site-nav--search-container" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <input type="search" placeholder="<?php echo esc_attr( 'Search...', 'snap' ); ?>" name="s" id="site-nav--search-input" value="<?php echo esc_attr( get_search_query() ); ?>" aria-label="search"/>
  <!-- <button type="submit" class="site-nav--search-submit screen-reader-text">
    <i class="material-icons">&#xE8B6;</i>
  </button> -->
</form>