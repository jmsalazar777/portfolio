<?php
/**
 * Template part for displaying blog
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Portfolio
 * @since 1.0.0
 */

?>

<?php if(is_single()):?>
	<article class="animated zoomIn duration1 eds-on-scroll" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="blog-title">
			<?php if ( !is_single() ): ?>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php else: ?>
				<h2><?php the_title(); ?></h2>
			<?php endif ?>
			
		</div>
		<div class="blog-header dflex sb-flex">
			<?php if ( ! is_single() ): ?>
				<p>
					<span>Written by: </span>
					<?php 
					$author = get_field( 'author' ); 
					if ( empty($author) ): ?>
						<?php the_author(); ?>
					<?php else: ?>
						<?php the_field( 'author' ); ?>
					<?php endif; ?>
				</p>
				<p><span>Posted on: </span><?php echo get_the_date(); ?></p>	
			<?php endif ?>
		</div>
		<div class="blog-image">
			<?php  echo get_the_post_thumbnail(); ?>
		</div>
		<div class="blog-content">
			<?php if (! is_single() ): ?>
				<?php the_excerpt(); ?>
			<?php else: ?>
				<?php the_content(); ?>
			<?php endif ?>
		</div>
		<div class="blog-btn">
			<?php if ( ! is_single() ): ?>
				<a href="<?php the_permalink(); ?>" class="btn btn1">Read More</a>
			<?php endif ?>
		</div>
	</article><!-- #post-${ID} -->
<?php endif;?>

<article class="animated zoomIn duration1" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-title">
		<?php if ( !is_single() ): ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php else: ?>
			<h2><?php the_title(); ?></h2>
		<?php endif ?>
		
	</div>
	<div class="blog-header dflex sb-flex">
		<?php if ( ! is_single() ): ?>
			<p>
				<span>Written by: </span>
				<?php 
				$author = get_field( 'author' ); 
				if ( empty($author) ): ?>
					<?php the_author(); ?>
				<?php else: ?>
					<?php the_field( 'author' ); ?>
				<?php endif; ?>
			</p>
			<p><span>Posted on: </span><?php echo get_the_date(); ?></p>	
		<?php endif ?>
	</div>
	<div class="blog-image">
		<?php  echo get_the_post_thumbnail(); ?>
	</div>
	<div class="blog-content">
		<?php if (! is_single() ): ?>
			<?php the_excerpt(); ?>
		<?php else: ?>
			<?php the_content(); ?>
		<?php endif ?>
	</div>
	<div class="blog-btn">
		<?php if ( ! is_single() ): ?>
			<a href="<?php the_permalink(); ?>" class="btn btn1">Read More</a>
		<?php endif ?>
	</div>
</article><!-- #post-${ID} -->