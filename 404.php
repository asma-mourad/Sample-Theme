<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'sample-theme' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'sample-theme' ); ?></p>

		</div>
		</section>
		</div>
		</div>
		<aside id="secondary" class="widget-area col-xl-4 sidebar ftco-animate bg-light pt-5">
		<?php get_sidebar('right'); ?>
		</aside>

		</div>
		</section><!-- #main -->
	</div><!-- #primary -->


<?php
get_footer();
