<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Portfolio
 * @since 1.0.0
 */

$discussion = ! is_page() && wp5default_can_show_post_thumbnail() ? wp5default_get_discussion_data() : null; ?>

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

<?php if ( ! is_page() ) : ?>
<div class="entry-meta">
	<?php wp5default_posted_by(); ?>
	<?php wp5default_posted_on(); ?>
	<span class="comment-count">
		<?php wp5default_comment_count(); ?>
	</span>
	<?php
	// Edit post link.
		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'wp5default' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">' . wp5default_get_icon_svg( 'edit', 16 ),
			'</span>'
		);
	?>
</div><!-- .meta-info -->
<?php endif; ?>
