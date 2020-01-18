<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sample_Theme
 */

get_header();
get_sidebar();
?>

	<div id="colorlib-main" class="content-area">
	<section class="ftco-section">
	    	<div class="container">
	    		<div class="row px-md-4">
	    			

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;
			?>
			</div>
			<div class="row">
			          <div class="col">
			            <div class="block-27">
			<?php echo "<br>" . paginate_links(array(
						'type' => 'list',
						'prev_text' => __('&lt;'),
						'next_text' => __('&gt;'),
					
					)); ?>
			            </div>
			          </div>
			        </div>
		<?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</div>
		</section><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
