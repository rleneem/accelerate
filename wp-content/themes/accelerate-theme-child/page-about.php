<?php 
/**
 * The template for displaying the about page
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
 
<div class="custom-container">
  <?php query_posts('posts_per_page=5&post_type=services&order=DESC'); ?>
  
  <?php while(have_posts()) : the_post(); 
            $title  =   get_field('title');
            $description   =   get_field('description');
            $image  =   get_field('icon');
            $size   =   'full';
    ?>
  <?php if ($wp_query->current_post % 2 == 0): ?>
    <div class="section">
        <div class="img">
            <figure class="the-img">
                <?php echo wp_get_attachment_image($image, $size); ?>
            </figure>
        </div>
        <div class="service-desc">
            <h2><?php echo $title; ?></h2>
            <p><?php echo $desc; ?></p>
        </div>
    </div>
    <br>
    <?php else: ?>
        <div class="section-odd">
            <div class="service-desc-odd">
                <h2><?php echo $title; ?></h2>
                <p><?php echo $desc; ?></p>
            </div>
            <div class="img-odd">
                <figure class="odd">
                        <?php echo wp_get_attachment_image($image, $size); ?>
                </figure>
            </div>
        
        </div>
    <?php endif; ?>
    <?php endwhile; ?>
</div>   

<?php get_footer(); ?>