<?php if ( has_nav_menu( 'top' ) ) : ?>
	<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'wp5default' ); ?>">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'top',
				'menu_class'     => 'main-menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" tabindex="0">%3$s</ul>',
			)
		);
		?>
	</nav><!-- #site-navigation -->
<?php endif; ?>