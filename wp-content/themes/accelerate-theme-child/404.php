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
		
			<header class="page-header">
				<figure>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lionel.jpg"/> 
				</figure>
			</header>
			
			<div class="404-page">
				<div class="text_404">
					<h2><?php _e( 'Oh, it isn&rsquo;t? Ok well, this is somewhat embarrassing.', 'skillcrushstarter' ); ?></h2>
					<p><?php _e( 'Maybe you could try a search to find what it is you are truly looking for?'); ?></p>
					<?php get_search_form(); ?>
				</div>
				
				<h3>Or, you could check out some of our popular content:</h3>
				
				<div class="col1">
					<div class="col-header">
						<h3>Popular Posts</h3>
					</div>
					<?php wpp_get_mostpopular(); ?>
				</div>
				
				<div class="col2">
					<div class="col-header">
						<h3>Random Posts</h3>
					</div>	
						<ul>
						<?php
						$posts = get_posts('orderby=rand&numberposts=5');
							foreach($posts as $post) { ?>
								<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
								</li>
						<?php } ?>
						</ul>
				</div>	
			</div>
			
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>