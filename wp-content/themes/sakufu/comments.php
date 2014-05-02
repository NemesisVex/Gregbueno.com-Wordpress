<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Sakufu
 * @since Sakufu 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
	
	<div class="span-14 last source-label">
		<h3 class="comments-title source-title">
			Comments
			<?php
			/*
			 * 
				printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'sakufu' ),
					number_format_i18n( get_comments_number() ), get_the_title() );
			 */
			?>
		</h3>
	</div>

	<div class="span-14 last prepend-top">
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
		<h4 class="screen-reader-text"><?php _e( 'Comment navigation', 'sakufu' ); ?></h4>
		
		<ul class="pager">
			<li><div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'sakufu' ) ); ?></div></li>
			<li><div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'sakufu' ) ); ?></div></li>
		</ul>
		
		
	</nav><!-- #comment-nav-above -->
	<?php endif; // Check for comment navigation. ?>

	<ol class="comment-list">
		<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
				'avatar_size'=> 34,
			) );
		?>
	</ol><!-- .comment-list -->

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
		<h4 class="screen-reader-text sr-only"><?php _e( 'Comment navigation', 'sakufu' ); ?></h4>
		<ul class="pager">
			<li><div class="nav-previous"><?php previous_comments_link( __( '&laquo; Older Comments', 'sakufu' ) ); ?></div></li>
			<li><div class="nav-next"><?php next_comments_link( __( 'Newer Comments &raquo;', 'sakufu' ) ); ?></div></li>
		</ul>
		
		
	</nav><!-- #comment-nav-below -->
	<?php endif; // Check for comment navigation. ?>

	<?php if ( ! comments_open() ) : ?>
	<p class="no-comments"><?php _e( 'Comments are closed.', 'sakufu' ); ?></p>
	<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php
	$comment_args = array(
		'fields' => apply_filters('comment_form_default_fields', array(
			'author' => '<div class="comment-form-author form-group"><label for="author" class="col-md-2 control-label">' . __( 'Name', 'domainreference' ) . ' <span class="required">*</span></label> ' . ( $req ? '<div class="col-md-6">' : '' ) . '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div></div>',
			'email' => '<div class="comment-form-email form-group"><label for="email" class="col-md-2 control-label">' . __( 'Email', 'domainreference' ) . ' <span class="required">*</span></label> ' . ( $req ? '<div class="col-md-6">' : '' ) . '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div></div>',
			'url' => '<div class="comment-form-url form-group"><label for="url" class="col-md-2 control-label">' . __( 'Website', 'domainreference' ) . '</label>' . '<div class="col-md-6"><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div></div>',
		)),
		'comment_field' => '<div class="comment-form-comment form-group"><label for="comment" class="col-sm-2 control-label">' . _x( 'Comment', 'noun' ) . '</label><div class="col-md-6"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" class="form-control"></textarea></div></div>',
		'comment_notes_after' => '<p class="form-allowed-tags help-block">' . sprintf( __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s' ), allowed_tags() ) . '</p>',
		'class_form' => 'form-horizontal',
		'class_submit' => 'btn btn-default',
		'title_reply' => __('Post a comment'),
	);
	comment_form($comment_args);
	?>
	</div>
		

</div><!-- #comments -->
