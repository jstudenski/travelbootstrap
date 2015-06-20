<?php
/**
 * The template for displaying all single posts.
 *
 * @package travelbootstrap
 */

get_header(); ?>

<div class="container">
	<div class="row">

	<div id="primary" class="col-md-9 col-lg col-md-push-3">


	
		<main id="main" class="site-main" role="main">



		<?php while ( have_posts() ) : the_post(); ?>

<br>
			<script type="text/javascript">
visahq_html5widget_color = "454445";
visahq_html5widget_language = "us";
visahq_html5widget_destination_country = "<?php the_field('visa_requirements');?>";
visahq_html5widget_nationality_country = "US";
visahq_widget_residency_country = "US";
visahq_widget_residency_domain = "visahq.com";
</script>
<script src="//www.visahq.com/scripts/new/flash_320x100.js" type="text/javascript"></script>


<?php get_template_part( 'template-parts/content', 'single' ); ?>



			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
<?php get_sidebar(); ?>