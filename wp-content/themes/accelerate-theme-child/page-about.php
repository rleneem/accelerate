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
					<div class="hero-text">
						<h3><?php the_content(); ?></h3>
					</div>		
				<?php endwhile; // end of the loop ?>		
		</section><!-- closes home-page section -->		
		
	<div class="site-content">
	
		<section class="about-intro">			
				<?php while (have_posts() ) : the_post();
					$title = get_field('services_intro');
					$description = get_field('services_description');
					$size = "full";
				?>	
									
				<div class="services-intro">
					<div class="about-title">
						<h2><?php echo $title; ?></h2>
					</div>
					<div class="about-description">
						<p><?php echo $description; ?></p>
					</div>
				</div>		
		</section><!-- end of aboutpage-top section-->
		

		<section class="about-services"><!-- begin services section -->
			
		<?php query_posts('posts_per_page=5&post_type=our_services'); ?>
			<?php while ( have_posts() ) : the_post();
					$title = get_field('title');
					$desc = get_field('description');
					$image_1 = get_field('icon');
					$size = "medium";
			?>
			
				<?php if ($wp_query->current_post % 2 == 0): ?>
					<div class="services">
						<div class="icon">
							<figure>
								<?php echo wp_get_attachment_image($image_1, $size); ?>
							</figure>
						</div><!-- close icon div -->
						
						<div class="description">
							<h2><?php echo $title; ?></h2>
							<p><?php echo $desc; ?></p>
						</div><!-- close description div -->		
					</div><!-- close services div -->	

				<?php else: ?>
					<div class="services-odd">
						<div class="description">
							<h2><?php echo $title; ?></h2>
							<p><?php echo $desc; ?></p>
						</div>
						<div class="icon">
							<figure>
								<?php echo wp_get_attachment_image($image_1, $size); ?>
							</figure>
						</div>
					</div>

				<?php endif; ?>
				<?php endwhile; //end of the loop ?>
				
				<?php wp_reset_query(); // resets the altered query back to the original ?>
			
			<?php endwhile; ?>
			
		</section><!--end services section-->								
	
		<section class="about-contact">
				<div class="contact-description">
					<h4>Interested in working with us?</h4>
				</div>	
				<div class="contact-button">	
					<a class="button" href="<?php echo home_url(); ?>/contact">Contact Us</a>
				</div>
		</section>	
	</div><!-- close div .site-content -->	
	

<?php get_footer(); ?>