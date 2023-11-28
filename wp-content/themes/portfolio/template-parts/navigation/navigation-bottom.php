<?php if ( has_nav_menu( 'footer' ) ) : ?>
	<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'wp5default' ); ?>">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'footer',
				'menu_class'     => 'footer-menu',
				'depth'          => 1,
			)
		);
		?>
	</nav><!-- .footer-navigation -->
<?php endif; ?>