<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div class="404-page">
				<div class="404_image">
					<figure>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lionel.jpg"/> 
					</figure>
				</div>
				<div class="text_404">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?'); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>