<?php
/**
 * Displays the blog sidebar
 *
 * @package WordPress
 * @subpackage Portfolio
 * @since 1.0.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

	<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Sidebar', 'wp5default' ); ?>">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .widget-area -->

<?php endif; ?>
