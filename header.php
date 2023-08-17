<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package conbix
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php if (class_exists('CSF')) {
		$elements = 'elements-design';
	} else {
		$elements = 'conbix-core';
	} ?>
	<?php
	if (is_page() || is_singular('post') && get_post_meta($post->ID, 'conbix_meta_options', true)) {
		$conbix_meta = get_post_meta($post->ID, 'conbix_meta_options', true);
	} else {
		$conbix_meta = array();
	}
	$header_custom = conbix_option('header_layout');
	if (is_array($conbix_meta) && array_key_exists('meta_header_stlye', $conbix_meta) && $conbix_meta['meta_header_layout'] != 'no') {
		$header_layout_style = $conbix_meta['meta_header_stlye'];
	} else if (!empty($header_custom) && class_exists('CSF')) {
		$header_layout_style = conbix_option('header_layout');
	} else {
		$header_layout_style = 'header-default';
	}

	$site_dark = conbix_option('dark_mode');
	if (is_array($conbix_meta) && array_key_exists('dark_mode', $conbix_meta)) {
		$dark_mode = $conbix_meta['dark_mode'];
	} else if (!empty($site_dark) && class_exists('CSF')) {
		$dark_mode = conbix_option('dark_mode');
	} else {
		$dark_mode = 'light-mode';
	}
	?>
	<div id="page" class="site <?php echo esc_attr($dark_mode); ?> <?php echo esc_attr($elements); ?>">
		<?php get_template_part('template-parts/default-options/' . 'preloader'); ?>
		<?php get_template_part('template-parts/header-layout/' . $header_layout_style . ''); ?>