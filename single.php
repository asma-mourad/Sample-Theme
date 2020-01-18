<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sample_Theme
 */

get_header();
get_sidebar();
?>

<div id="colorlib-main">
			<section class="ftco-section ftco-no-pt ftco-no-pb">
	    	<div class="container">
	    		<div class="row d-flex">
	    			<div class="col-lg-8 px-md-5 py-5">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			/*if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			*/
		endwhile; // End of the loop.
		?>
		</div>
			<aside class="col-lg-4 sidebar ftco-animate bg-light pt-5">
				<?php get_sidebar('right'); ?>
			</aside>
		</div>
		</div>
		</section><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
