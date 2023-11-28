<?php
/**
 * The template for displaying Current Discussion on posts
 *
 * @package WordPress
 * @subpackage Portfolio
 * @since 1.0.0
 */

/* Get data from current discussion on post. */
$discussion    = wp5default_get_discussion_data();
$has_responses = $discussion->responses > 0;

if ( $has_responses ) {
	/* translators: %1(X comments)$s */
	$meta_label = sprintf( _n( '%d Comment', '%d Comments', $discussion->responses, 'wp5default' ), $discussion->responses );
} else {
	$meta_label = __( 'No comments', 'wp5default' );
}
?>

<div class="discussion-meta">
	<p class="discussion-meta-info">
		<?php echo wp5default_get_icon_svg( 'comment', 24 ); ?>
		<span><?php echo esc_html( $meta_label ); ?></span>
	</p>
</div><!-- .discussion-meta -->
