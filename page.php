<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package travelbootstrap
 */

get_header(); ?>

<div class="container">
	<div class="row">

		<div id="primary" class="col-md-9 col-lg col-md-push-3">

			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // End of the loop. ?>


<script type="text/javascript">
visahq_html5widget_color = "454445";
visahq_html5widget_language = "us";
visahq_widget_residency_country = "US";
visahq_html5widget_affiliate_id = "111111";
visahq_widget_residency_domain = "visahq.com";
</script>
<script src="//www.visahq.com/scripts/new/flash_320x100.js" type="text/javascript"></script>


			</main><!-- #main -->
		</div><!-- #primary -->
		
<?php get_sidebar(); ?>
<?php get_footer(); ?>
