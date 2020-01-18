<?php

 
    /**
     * Outputs a comment in the HTML5 format.
     *
     * @see wp_list_comments()
     *
     * @param WP_Comment $comment Comment to display.
     * @param int        $depth   Depth of the current comment.
     * @param array      $args    An array of arguments.
     */
	 
class SampleTheme_Walker_Comment extends Walker_Comment {
		protected function html5_comment( $comment, $depth, $args ) {
		$tag = ( 'div' === $args['style'] ) ? 'div' : 'li';

		$commenter = wp_get_current_commenter();
		if ( $commenter['comment_author_email'] ) {
			$moderation_note = __( 'Your comment is awaiting moderation.' );
		} else {
			$moderation_note = __( 'Your comment is awaiting moderation. This is a preview, your comment will be visible after it has been approved.' );
		}

		?>
		<<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( $this->has_children ? 'parent' : '', $comment ); ?>>
			<article id="div-comment-<?php comment_ID(); ?>">

		                <li class="comment">
		                  <div class="vcard bio">
						  <?php
						if ( 0 != $args['avatar_size'] ) {
							echo get_avatar( $comment, $args['avatar_size'] );
						}
						?>
		                  </div>
		                  <div class="comment-body">
		                    <h3><?php echo get_the_author(); ?></h3>
		                    <div class="meta"><?php echo get_comment_date('F j, Y'); ?> at <?php echo get_comment_date( 'g:ia' ); ?></div>
		                    <?php comment_text(); ?>
							<?php
				comment_reply_link(
					array_merge(
						$args,
						array(
							//'add_below' => 'div-comment',
							'depth'     => $depth,
							'max_depth' => $args['max_depth'],

						)
					)
				);
				// if comment wait approval
				 if ( '0' == $comment->comment_approved ) : ?>
					<em class="comment-awaiting-moderation"><?php echo $moderation_note; ?></em>
					<?php endif; ?>
		                    
		                  </div>
		                </li>		
			
			</article><!-- .comment-body -->
		<?php
	}
}	