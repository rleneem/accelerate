<?php
/**
 * The template for displaying about services
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>


	<div id="primary" class="site-content">
		<div id="content" role="main">
		
	<?php while ( have_posts() ) : the_post();
		$services = get_field('services');
		$description = get_field('description');
		$image_1 = get_field('image_1');
		$image_2 = get_field('image_2');
		$image_3 = get_field('image_3');
		$size = "full";
	?>
			
	<article class="service">
		<aside class="service-sidebar">
			<h2><?php the_title(); ?></h2>
			<h5><?php echo $services; ?></h5>
			<h6><?php echo $description; ?></h6>
				
			<?php the_content(); ?>
				
		</aside>
			
		<div class="service-images">
			<?php if(image_1) {
				 echo wp_get_attachment_image(
				$image_1, $size) ; 
			 } ?>
			<?php if(image_2) {
				 echo wp_get_attachment_image(
				$image_2, $size) ; 
			 } ?>	
            <?php if(image_3) {
				 echo wp_get_attachment_image(
				$image_3, $size) ; 
			 } ?>
		</div>
			
	</article>
	
	<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>


