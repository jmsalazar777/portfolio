<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Portfolio
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area container">
		<main id="main" class="site-main">
			<div class="row">
				<div class="blog-wrap dflex">
					<div class="blog-container">
						<?php

						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/post/post', 'blog' );

							// If comments are open or we have at least one comment, load up the comment template.
							//if ( comments_open() || get_comments_number() ) {
							//	comments_template();
							//}

						endwhile; // End of the loop.
						?>
					</div>
					<div class="sidebar">
						<?php get_template_part( 'template-parts/sidebar/sidebar', 'blog' ); ?>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
