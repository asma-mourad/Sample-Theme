<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sample_Theme
 */

get_header();
get_sidebar();
?>

	<div id="colorlib-main" class="content-area">
	<section class="ftco-section ftco-no-pt ftco-no-pb">
	    	<div class="container">
	    		<div class="row d-flex">
	    			<div class="col-xl-8 py-5 px-md-5">
	    				<div class="row pt-md-4">

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
		</div>
		<aside id="secondary" class="widget-area col-xl-4 sidebar ftco-animate bg-light pt-5">
		<?php get_sidebar('right'); ?>
		</aside>
		</div>
		</div>
		</section><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
