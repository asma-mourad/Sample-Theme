<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sample_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(array('col-md-12')); ?>>
	<div class="blog-entry-2 ftco-animate">
			<a href="<?php the_permalink(); ?>" class="img" style="background-image: url(<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' )[0]; ?>)"></a>


			<div class="text pt-4">
  <h3 class="mb-2"><a href="<?php the_permalink(); ?>"><?php echo the_title();?></a></h3>
  <p class="mb-4"><?php the_excerpt(); ?></p>
  
  				              <div class="author mb-4 d-flex align-items-center">
				            		<a href="#" class="img" style="background-image: url(<?php echo get_avatar_url(array('force_default' => 'true')); ?>"></a>
				            		<div class="ml-3 info">
				            			<span>Written by</span>
				            			<h3><a href="#"><?php the_author(); ?></a>, <span><?php the_time('F j, Y');?></span></h3>
				            		</div>
				            	</div>
				              <div class="meta-wrap d-md-flex align-items-center">
				              	<div class="half order-md-last text-md-right">
					              	<p class="meta">
					              		<span><i class="icon-heart"></i>3</span>
					              		<span><i class="icon-eye"></i>100</span>
					              		<span><i class="icon-comment"></i><?php echo get_comments_number(); ?></span>
					              	</p>
				              	</div>
				              	<div class="half">
					              	<p><a href="<?php the_permalink(); ?>" class="btn btn-primary p-3 px-xl-4 py-xl-3">Continue Reading</a></p>
				              	</div>
				              </div>
							  
</div>
		</div>


</article><!-- #post-<?php the_ID(); ?> -->
