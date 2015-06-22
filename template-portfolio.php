<?php
/**
 * Template Name: Portfolio
 *
 */

get_header(); ?>

<div class="container">
	<div class="row">

		<div id="primary" class="col-md-12 col-lg-12">
			<main id="main" class="site-main" role="main">

				<?php $the_query = new WP_Query( array('post_type' => array('flight', 'portfolio', 'post') )); ?>
				<?php if ( $the_query->have_posts() ) : ?>

					<!-- the loop -->
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">

							<div class="portfolio-item">
							<div class="thumbnail">

								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									<?php the_post_thumbnail(); ?>
								</a>
										
									<div class="caption">
										<h4><?php the_title(); ?></h4>
										<a href="<?php the_permalink(); ?>" class="btn btn-primary">View Project</a>
									</div>
								</div>
							</div><!-- end of portfolio item -->

						</div>
					<?php endwhile; ?>
					<!-- end of the loop -->

				</div> <!-- end of .row -->

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

			
		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- .row -->
</div><!-- .container -->
<?php get_footer(); ?>







