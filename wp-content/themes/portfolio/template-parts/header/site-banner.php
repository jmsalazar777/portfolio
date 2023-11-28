<?php
/**
 * Displays header site banner area
 *
 * @package WordPress
 * @subpackage Portfolio
 * @since 1.0.0
 */
?>
<?php if ( get_theme_mod( 'banner_image' ) || get_theme_mod( 'banner_slider' ) ) : ?>
<div class="site-banner">

	<div class="banner-image">
	<?php if( get_theme_mod( 'banner_slider' ) ):

		$s_code = get_theme_mod( 'banner_slider' );

		echo do_shortcode( $s_code );

	elseif( get_theme_mod( 'banner_image' ) ): ?>
		
		<img src="<?php echo get_theme_mod( 'banner_image' ); ?>" alt="image" />
		
	<?php endif; ?>
	</div>

	<div class="banner-text">
		<div class="wrapper">
			
			<div class="box">
				<?php if( get_theme_mod( 'banner_content' ) ): ?>
				<div class="context spec-chars">
					<h2><?php echo get_theme_mod( 'banner_content' ); ?></h2>
				</div>
				<?php endif; ?>
				<div>
					<a href="<?php echo get_theme_mod( 'button_caption_link' ); ?>" class="btn"><?php echo get_theme_mod( 'button_caption' ); ?></a>
				</div>
			</div>
			
		</div>
	</div>

</div><!-- .site-banner -->
<?php endif; ?>