<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sample_Theme
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="pt-5 mt-5">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>

		 <h3 class="mb-5 font-weight-bold">
			<?php
			$sample_theme_comment_count = get_comments_number();
			if ( '1' === $sample_theme_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One Comment', 'sample-theme' )
				
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s Comments ', '%1$s Comments ', $sample_theme_comment_count, 'comments title', 'sample-theme' ) ),
					number_format_i18n( $sample_theme_comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h3><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ul class="comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'ul',
				'short_ping' => true,
				'walker' => new SampleTheme_Walker_Comment(),
			) );
			?>
		</ul><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'sample-theme' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().
?>
<div class="comment-form-wrap pt-5">
<?php
	comment_form(array(
 'title_reply' => 'Leave a comment',
'comment_field'        => sprintf(
            '<p class="comment-form-comment">%s %s</p>',
            sprintf(
                '<label for="comment">%s</label>',
                _x( 'Message', 'noun' )
            ),
            '<textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea>'
        ),

'class_submit'         => 'btn py-3 px-4 btn-primary',
 'submit_field'         => '<div class="form-group">%1$s %2$s</div>',
'class_form' => 'p-3 p-md-5 bg-light',
'title_reply_before' => '<h3 class="mb-5">',
'comment_notes_before' => '',
'fields' => array(
'author' => '<div class="form-group">
		                    <label for="name">Name *</label>
		                    <input type="text" class="form-control" id="name">
		                  </div>',
'email' => ' <div class="form-group">
		                    <label for="email">Email *</label>
		                    <input type="email" class="form-control" id="email">
		                  </div>',
'url' => '<div class="form-group">
		                    <label for="website">Website</label>
		                    <input type="url" class="form-control" id="website">
		                  </div>',
'cookies' => '',
						  )
 )
 );
	?>
</div> <!-- form -->	
</div><!-- #comments -->
