<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sample_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(array('row d-flex')); ?>>

		<div class="col-md-6 d-flex">

	    				<div class="img d-flex align-self-stretch align-items-center js-fullheight" style="background-image:url(<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' )[0]; ?>);">
	    				</div>
		</div>
	    			<div class="col-md-6 d-flex align-items-center">
	    				<div class="text px-4 pt-5 pt-md-0 px-md-4 pr-md-5 ftco-animate">
						
						<?php the_content(); ?>
					</div>
					</div>
						

</article><!-- #post-<?php the_ID(); ?> -->
