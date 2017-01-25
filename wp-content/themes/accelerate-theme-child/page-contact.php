<?php
/**
 * The template for displaying the contact page
 *
 
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">		
			<div class="contact-page">
			<?php while ( have_posts() ) : the_post(); ?>
				<h3>Contact Us</h3>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>