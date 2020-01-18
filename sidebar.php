<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sample_Theme
 */

if ( ! is_active_sidebar( 'sidebar-left' ) ) {
	return;
}
?>

<aside id="colorlib-aside" role="complementary" class="widget-area js-fullheight">
	<?php
	wp_nav_menu(array(
    'container'         => "nav",
    'container_id'      => "colorlib-main-menu",     
     
    )
    ); 
	?>
	<div class="colorlib-footer">
		
				<h1 id="colorlib-logo" class="mb-4">
				<a href="<?php echo site_url();?>" style="background-image: url(<?php echo wp_get_attachment_image_src( get_theme_mod('custom_logo') , 'full' )[0];?>);"><?php echo substr(get_bloginfo(),0,strpos($x," ")); ?> <span><?php 
				echo substr(get_bloginfo(),strpos($x," ")); ?></span></a>
				</h1>
			<!--	<div class="mb-4">
					<h3>Subscribe for newsletter</h3>
					<form action="#" class="colorlib-subscribe-form">
            <div class="form-group d-flex">
            	<div class="icon"><span class="icon-paper-plane"></span></div>
              <input type="text" class="form-control" placeholder="Enter Email Address">
            </div>
          </form>
				</div>-->
				

	 	<?php dynamic_sidebar( 'sidebar-left' ); ?>
		<p class="pfooter"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	   All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
</aside><!-- #left -->
