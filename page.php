<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sample_Theme
 */

get_header();
get_sidebar();
?>

		<div id="colorlib-main">
			<section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
	    	<div class="container-fluid px-0">

	    			

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</div>

		</section><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();