<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package conbix
 */

if (is_singular(array('post', 'service')) && get_post_meta($post->ID, 'conbix_meta_options', true)) {
	$conbix_meta = get_post_meta($post->ID, 'conbix_meta_options', true);
} else {
	$conbix_meta = array();
}


if (is_array($conbix_meta) && array_key_exists('site_layout', $conbix_meta) && $conbix_meta['site_layout'] != 'full-width') {
	$selected_sidebar = $conbix_meta['site_sidebars'];
} else if (is_home() || is_archive()) {
	$selected_sidebar = conbix_option('blog_sidebar', 'sidebar-1');
} else if (is_singular('post')) {
	$selected_sidebar = conbix_option('single_sidebar', 'sidebar-1');
} else if (is_singular('service')) {
	$selected_sidebar = conbix_option('service_sidebar', 'sidebar-1');
} else {
	$selected_sidebar = 'sidebar-1';
}
?>

<div class="all__sidebar">
	<?php if (is_active_sidebar($selected_sidebar)) {
		dynamic_sidebar($selected_sidebar);
	} ?>
</div><!-- #secondary -->