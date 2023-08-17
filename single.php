<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package conbix
 */

get_header();

if (get_post_meta($post->ID, 'conbix_meta_options', true)) {
	$conbix_meta = get_post_meta($post->ID, 'conbix_meta_options', true);
} else {
	$conbix_meta = array();
}

if (is_array($conbix_meta) && array_key_exists('site_layout', $conbix_meta) && $conbix_meta['layout_enable'] != 'no') {
	$site_layout = $conbix_meta['site_layout'];
} else {
	$site_layout = conbix_option('single_layout', 'right-sidebar');
}

if (is_array($conbix_meta) && array_key_exists('site_layout', $conbix_meta) && $conbix_meta['site_layout'] != 'full-width') {
	$selected_sidebar = $conbix_meta['site_sidebars'];
} else {
	$selected_sidebar = conbix_option('single_sidebar', 'sidebar-1');
}

if ($site_layout == 'left-sidebar' && is_active_sidebar($selected_sidebar) || $site_layout == 'right-sidebar' && is_active_sidebar($selected_sidebar)) {
	$content_layout = 'col-lg-8 lg-mb-60';
} else {
	$content_layout = 'col-lg-12';
}
if (is_array($conbix_meta) && array_key_exists('breadcrumb_enable', $conbix_meta)) {
	$enable_banner = $conbix_meta['breadcrumb_enable'];
} else {
	$enable_banner = 'yes';
}

if (is_array($conbix_meta) && array_key_exists('section_padding', $conbix_meta)) {
	$section_padding = $conbix_meta['section_padding'];
} else {
	$section_padding = 'section-padding';
}
?>

<main id="primary" class="site-main">
	<?php
	if ($enable_banner == 'yes') :
		get_template_part('template-parts/default-options/' . 'breadcrumb');
	endif;

	?>
	<div class="<?php echo esc_attr($section_padding);?>">
		<div class="container">
			<div class="row">
				<?php
				if ($site_layout == 'left-sidebar' && is_active_sidebar($selected_sidebar)) : ?>
					<div class="col-lg-4 order-last order-lg-first">
						<?php get_sidebar(); ?>
					</div>
				<?php endif; ?>
				<div class="<?php echo esc_attr($content_layout); ?>">
					<div class="news__details-left">
						<?php
						while (have_posts()) :
							the_post();

							get_template_part('template-parts/content', 'single');


							// If comments are open or we have at least one comment, load up the comment template.
							if (comments_open() || get_comments_number()) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
					</div>
				</div>

				<?php
				if ($site_layout == 'right-sidebar' && is_active_sidebar($selected_sidebar)) : ?>
					<div class="col-lg-4">
						<?php get_sidebar(); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</main><!-- #main -->

<?php

get_footer();
