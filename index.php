<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package travelbootstrap
 */

get_header(); ?>

<div class="container">
	<div class="row">

		<div id="primary" class="col-md-9 col-lg col-md-push-3">

						<main id="main" class="site-main" role="main">

							<?php if ( have_posts() ) : ?>

								<?php /* Start the Loop */ ?>
								<?php while ( have_posts() ) : the_post(); ?>



												<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

				              <div class="portfolio-item">
				              <div class="thumbnail">

				                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				                  <?php the_post_thumbnail(); ?>
				                </a>
				                    
				                  <div class="caption">
				                    <h4><?php the_title(); ?></h4>
				                    <h6><?php the_field('origin'); ?> to <?php the_field('destination'); ?></h6> 

				                    <span class="badge">$<?php the_field('price_(usd)'); ?></span>
				                    
				                    <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-xs">View</a>
				                  </div>
				                </div>
				              </div><!-- end of portfolio item -->

				            </div>


							<?php endwhile; ?>

							<?php bswp_post_navigation(); ?>

						<?php else : ?>

							<?php get_template_part( 'template-parts/content', 'none' ); ?>

						<?php endif; ?>

						</main><!-- #main -->

		</div><!-- #primary -->


	<?php get_sidebar(); ?>
	<?php get_footer(); ?>

