<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Mog
 * @since Mog 1.0
 * 
 * This is a customized version. Based on the original version in Mog theme.
 */
?>

	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'mog_credits' ); ?>
			<a href="http://wordpress.org/" target="_blank" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'mog' ); ?>" rel="generator"><?php printf( __( 'Powered by %s', 'mog' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Using %1$s by %2$s', 'mog' ), 'Mog', '<a href="http://hndr.me/" target="_blank" rel="designer">hndr</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>