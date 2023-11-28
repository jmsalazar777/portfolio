<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Portfolio
 * @since 1.0.0
 */

get_header();
?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main">
			<div class="row">
				<h1>Blog</h1>
				<div class="blog-wrap dflex">
					<div class="blog-container">
						<div class="blog-list">
							<?php  
							    if ( have_posts() ) {

									// Load posts loop.
									while ( have_posts() ) {
										the_post();
										get_template_part( 'template-parts/post/post', 'blog' );
									}


								} else {

									// If no content, include the "No posts found" template.
									get_template_part( 'template-parts/content/content', 'none' );

								}
							?>
						</div>
						<div class="pagination-n">
							<?php the_posts_pagination() ?>
						</div>
					</div>
					<div class="sidebar">
						<?php get_template_part( 'template-parts/sidebar/sidebar', 'blog' ); ?>
					</div>
				</div>
			</div>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php
get_footer();
