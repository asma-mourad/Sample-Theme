<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sample_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(array('row', 'pt-md-4')); ?>>
	    			
					<h1 class="mb-3"><?php the_title();?></h1>
		            <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' )[0]; ?>" alt="" class="img-fluid">
					<p><?php the_content(); ?></p>
					<div class="tag-widget post-tag-container mb-5 mt-5">
					<?php the_tags('<div class="tagcloud">',' ','</div>'); ?>
					</div>
					
					 <div class="about-author d-flex p-4 bg-light">
		              <div class="bio mr-5">
					  <?php echo get_avatar( get_the_author_meta('ID'), $size, $default, $alt, $args = array('class' => 'img-fluid mb-4')); ?>

		              </div>
		              <div class="desc">
		                <h3><?php echo get_the_author(); ?></h3>
		                <p><?php echo nl2br(get_the_author_meta('description')); ?></p>
		              </div>
		            </div>
					<?php
					// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>
</article><!-- #post-<?php the_ID(); ?> -->
