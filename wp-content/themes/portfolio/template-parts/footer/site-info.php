<div class="copyright">
	<?php
		$site_info =  ' &copy; ' . date( 'Y' ) . '. ' . get_bloginfo( 'name' ) .  get_bloginfo( 'description' ) . '. All Rights Reserved.';

		if ( get_theme_mod( 'copyright' ) ) :
			echo get_theme_mod( 'copyright' );
		else :
			echo $site_info;
		endif;
	?>
</div>
