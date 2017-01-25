<?php
/**
 * This is the template for the success page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>
Test

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<div class="success-page">
				<?php while ( have_posts() ) : the_post(); ?>
					<h2>Success!</h2>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>