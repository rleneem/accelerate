<?php
/**
 * This is the About page template
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
get_header(); ?>

		<section class="home-page">
							<?php while ( have_posts()) : the_post(); ?>
				<div class="about-hero">
					<h3>Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h3>
				</div>
				<?php endwhile; ?>
			</div>	
		</section>		
				
	<div id="primary" class="site-content">
		<div id="content" role="main">
					
			
			<div class="page-content">
			<?php query_posts('posts_per_page=4&post_type=our_services'); ?>	
				<?php while ( have_posts() ) : the_post(); 
					$service = get_field('title');
					$description = get_field('description');
					$icon = get_field('icon');
					$size = "full";
				?>
				
					<div class="services">
						<h2><?php the_title(); ?></h2>
						<h5><?php echo $service; ?></h5>
						<h6><?php echo $description; ?></h6>
						<?php the_content(); ?>
					</div>
					<div class="icon-left">
						<?php echo wp_get_attachment_image( $icon, $size); ?>
					</div>
				
				<?php endwhile; // end of the loop. ?>
			
			</div><!-- #page-content -->
		
			<section class="work-with">
				<div class="interested">
					<h4>Interested in working with us?</h4>
				</div>
				<div class="contact-btn">	
					<a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
				</div>		
			</section>
		
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>