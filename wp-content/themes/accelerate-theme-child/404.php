<?php
/**
 * Template for the 404 page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
		
			<div class="404-page">
				<?php while ( have_posts() ) : the_post(); ?>
					<h2>Success!</h2>
				<?php endwhile; // end of the loop. ?>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>