<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Meisakuki
 * @since Meisakuki 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="span-14 append-bottom">
		<header>
			<div class="span-14 last source-label">
				<div class="span-13">
				<?php
				if ( is_single() ) :
					the_title( '<h3 class="source-title">', '</h3>' );
				else :
					the_title( '<h3 class="source-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
				endif;
				?>
			</div>
				<div class="span-1 last">
					<a class="entry-format" href="<?php echo esc_url( get_post_format_link( 'aside' ) ); ?>" title="<?php echo get_post_format_string( 'aside' ); ?>"><span class="genericon genericon-aside" /> </a>
				</div>
			</div>
			<div class="span-4">
			<?php meisakuki_posted_on(); ?>
				
				<ul class="meta">
			<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
					<li><?php comments_popup_link( __( 'Leave a comment', 'meisakuki' ), __( '1 Comment', 'meisakuki' ), __( '% Comments', 'meisakuki' ) ); ?>
			<?php endif; ?></li>
					<li><?php edit_post_link( __( 'Edit', 'meisakuki' ), '', '' ); ?></li>
				</ul>
			</div>
		</header>
		<div class="span-10 prepend-top last">
			<?php if ( is_search() ) : ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
			<?php else : ?>
			<div class="entry-content">
				<?php
					the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'meisakuki' ) );
					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'meisakuki' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
					) );
				?>
			</div><!-- .entry-content -->
			<?php endif; ?>

			<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>

		</div>
	</div>
	
</article><!-- #post-## -->
