<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Portfolio
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'wp5default' ); ?></a>

	<div class="main-container">
		<div class="custom-sidebar">
			<div class="sidebar-top">
				<img src="<?= get_field('site_image');?>" alt="about image">
				<h2><?= get_field('full_name');?></h2>
				<h3><?= get_field('about_text');?></h3>
			</div>
			<div class="sidebar-info">
				<div class="address">
					<h5><?= get_field('address_label');?></h5>
					<p><?= get_field('address_field');?></p>
				</div>
				<div class="email">
					<h5><?= get_field('email_label');?></h5>
					<p><?= get_field('email_field');?></p>
				</div>
				<div class="phone_number">
					<h5><?= get_field('phone_number_label');?></h5>
					<p><?= get_field('phone_number_field');?></p>
				</div>
			</div>
			<div class="skills-section">
				<div class="skills">
					<div class="skill-item">
						<div class="skill-item">
							<h3><?php echo !empty(get_field('skill_1')) ? get_field('skill_1') : 'Skill 1'; ?></h3>
							<div class="skill-percentage"><?= !empty(get_field('skill_1_percent')) ? get_field('skill_1_percent') : '0'; ?></div>
							<div class="skill-progress">
								<div class="progres" data-value="<?= !empty(get_field('skill_1_percent')) ? get_field('skill_1_percent') : '0'; ?>"></div>
							</div>
						</div>
					</div>
					<div class="skill-item">
						<div class="skill-item">
							<h3><?php echo !empty(get_field('skill_2')) ? get_field('skill_2') : 'Skill 2'; ?></h3>
							<div class="skill-percentage"><?= !empty(get_field('skill_2_percent')) ? get_field('skill_2_percent') : '0'; ?></div>
							<div class="skill-progress">
								<div class="progres" data-value="<?= !empty(get_field('skill_2_percent')) ? get_field('skill_2_percent') : '0'; ?>"></div>
							</div>
						</div>
					</div>
					<div class="skill-item">
						<div class="skill-item">
							<h3><?php echo !empty(get_field('skill_3')) ? get_field('skill_3') : 'Skill 3'; ?></h3>
							<div class="skill-percentage"><?= !empty(get_field('skill_3_percent')) ? get_field('skill_3_percent') : '0'; ?></div>
							<div class="skill-progress">
								<div class="progres" data-value="<?= !empty(get_field('skill_3_percent')) ? get_field('skill_3_percent') : '0'; ?>"></div>
							</div>
						</div>
					</div>
					<div class="skill-item">
						<div class="skill-item">
							<h3><?php echo !empty(get_field('skill_4')) ? get_field('skill_4') : 'Skill 4'; ?></h3>
							<div class="skill-percentage"><?= !empty(get_field('skill_4_percent')) ? get_field('skill_4_percent') : '0'; ?></div>
							<div class="skill-progress">
								<div class="progres" data-value="<?= !empty(get_field('skill_4_percent')) ? get_field('skill_4_percent') : '0'; ?>"></div>
							</div>
						</div>
					</div>
					<div class="skill-item">
						<div class="skill-item">
							<h3><?php echo !empty(get_field('skill_5')) ? get_field('skill_5') : 'Skill 5'; ?></h3>
							<div class="skill-percentage"><?= !empty(get_field('skill_5_percent')) ? get_field('skill_5_percent') : '0'; ?></div>
							<div class="skill-progress">
								<div class="progres" data-value="<?= !empty(get_field('skill_5_percent')) ? get_field('skill_5_percent') : '0'; ?>"></div>
							</div>
						</div>
					</div>
					<div class="skill-item">
						<div class="skill-item">
							<h3><?php echo !empty(get_field('skill_6')) ? get_field('skill_6') : 'Skill 6'; ?></h3>
							<div class="skill-percentage"><?= !empty(get_field('skill_6_percent')) ? get_field('skill_6_percent') : '0'; ?></div>
							<div class="skill-progress">
								<div class="progres" data-value="<?= !empty(get_field('skill_6_percent')) ? get_field('skill_6_percent') : '0'; ?>"></div>
							</div>
						</div>
					</div>
					<div class="skill-item">
						<div class="skill-item">
							<h3><?php echo !empty(get_field('skill_7')) ? get_field('skill_7') : 'Skill 7'; ?></h3>
							<div class="skill-percentage"><?= !empty(get_field('skill_7_percent')) ? get_field('skill_7_percent') : '0'; ?></div>
							<div class="skill-progress">
								<div class="progres" data-value="<?= !empty(get_field('skill_7_percent')) ? get_field('skill_7_percent') : '0'; ?>"></div>
							</div>
						</div>
					</div>
					<div class="skill-item">
						<div class="skill-item">
							<h3><?php echo !empty(get_field('skill_8')) ? get_field('skill_8') : 'Skill 8'; ?></h3>
							<div class="skill-percentage"><?= !empty(get_field('skill_8_percent')) ? get_field('skill_8_percent') : '0'; ?></div>
							<div class="skill-progress">
								<div class="progres" data-value="<?= !empty(get_field('skill_8_percent')) ? get_field('skill_8_percent') : '0'; ?>"></div>
							</div>
						</div>
					</div>
					<div class="skill-item">
						<div class="skill-item">
							<h3><?php echo !empty(get_field('skill_9')) ? get_field('skill_9') : 'Skill 9'; ?></h3>
							<div class="skill-percentage"><?= !empty(get_field('skill_9_percent')) ? get_field('skill_9_percent') : '0'; ?></div>
							<div class="skill-progress">
								<div class="progres" data-value="<?= !empty(get_field('skill_9_percent')) ? get_field('skill_9_percent') : '0'; ?>"></div>
							</div>
						</div>
					</div>
					<div class="skill-item">
						<div class="skill-item">
							<h3><?php echo !empty(get_field('skill_10')) ? get_field('skill_10') : 'Skill 10'; ?></h3>
							<div class="skill-percentage"><?= !empty(get_field('skill_10_percent')) ? get_field('skill_10_percent') : '0'; ?></div>
							<div class="skill-progress">
								<div class="progres" data-value="<?= !empty(get_field('skill_10_percent')) ? get_field('skill_10_percent') : '0'; ?>"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-content">
			<header id="masthead" class="site-header">
				<div class="site-branding-container container">
					<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
						<?php if ( has_custom_logo() ) : ?>
							<?php the_custom_logo(); ?>
						<?php endif; ?>
						
						<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .layout-wrap -->

			</header><!-- #masthead -->
			<div id="banner">
				<?php get_template_part( 'template-parts/header/site', 'banner' ); ?>
			</div>

			<div id="content" class="site-content">

