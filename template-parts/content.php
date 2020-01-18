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
	<div class="blog-entry ftco-animate d-md-flex">
			<a href="<?php the_permalink(); ?>" class="img img-2" style="background-image: url(<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' )[0]; ?>)"></a>


			<div class="text text-2 pl-md-4">
  <h3 class="mb-2"><a href="<?php the_permalink(); ?>"><?php echo the_title();?></a></h3>
  <div class="meta-wrap">
					<p class="meta">
		<span><i class="icon-calendar mr-2"></i><?php the_time('F j, Y');
?></span>
		<span><a href="single.html"><i class="icon-folder-o mr-2"></i><?php the_category( ',  ' ); ?></a></span>
		<span><i class="icon-comment2 mr-2"></i><?php echo get_comments_number(); ?>
 Comment</span>
	</p>
</div>
  <p class="mb-4"><?php the_excerpt(); ?></p>
  <p><a href="<?php the_permalink(); ?>" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
</div>
		</div>


</article><!-- #post-<?php the_ID(); ?> -->
