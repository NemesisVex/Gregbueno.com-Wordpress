<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Meisakuki
 * @since Meisakuki 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area col-md-8">
		<div id="content" class="site-content" role="main">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
			<hr />
			<?php 
				// Previous/next post navigation.
				meisakuki_post_nav();
			?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar( 'meisakuki' );
get_footer();
