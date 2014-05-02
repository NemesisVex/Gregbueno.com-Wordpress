<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Sakufu
 * @since Sakufu 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer span-24 prepend-top" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'sakufu_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'sakufu' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'sakufu' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>