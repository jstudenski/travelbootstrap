<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package travelbootstrap
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area col-md-3 col-lg-3 col-md-pull-9" role="complementary">
  <div class="well">
	 <?php dynamic_sidebar( 'sidebar-1' ); ?>
  </div><!-- .well -->

<div class="well">

Well 2
</div><!-- .well -->

</div><!-- #secondary -->

</div><!-- .row -->
</div><!-- .container -->