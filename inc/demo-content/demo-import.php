<?php

/**
 * Import demo data.
 */

// Disable regenerating images while importing media
add_filter('ocdi/regenerate_thumbnails_in_content_import', '__return_false');
add_filter('ocdi/plugin_intro_text', '__return_false');
add_filter('ocdi/disable_pt_branding', '__return_true');


function conbix_ocdi_confirmation_dialog_options($options)
{
	return array_merge($options, array(
		'width' => 400,
		'dialogClass' => 'wp-dialog',
		'resizable' => false,
		'height' => 'auto',
		'modal' => true,
	)
	);
}
add_filter('ocdi/confirmation_dialog_options', 'conbix_ocdi_confirmation_dialog_options', 10, 1);



function conbix_import_demo_files()
{
	return [

		// demo 01
		[
			'import_file_name' => 'Home 01 - Light',
			'categories' => array('Light'),
			'local_import_file' => trailingslashit(get_template_directory()) . '/inc/demo-content/demo-1/content.xml',
			'local_import_widget_file' => trailingslashit(get_template_directory()) . '/inc/demo-content/demo-1/widget.wie',
			'local_import_customizer_file' => trailingslashit(get_template_directory()) . '/inc/demo-content/demo-1/customizer.dat',
			'local_import_json' => array(
				array(
					'file_path' => trailingslashit(get_template_directory()) . '/inc/demo-content/demo-1/theme-options.json',
					'option_name' => 'conbix_theme_options',
				),
			),
			'import_preview_image_url' => trailingslashit(get_template_directory_uri()) . '/inc/demo-content/demo-1/demo.png',
			'preview_url' => 'https://light1.themeori.com/',
		],

		// demo 02
		[
			'import_file_name' => 'Home 02 - Light',
			'categories' => array('Light'),
			'local_import_file' => trailingslashit(get_template_directory()) . '/inc/demo-content/demo-2/content.xml',
			'local_import_widget_file' => trailingslashit(get_template_directory()) . '/inc/demo-content/demo-2/widget.wie',
			'local_import_customizer_file' => trailingslashit(get_template_directory()) . '/inc/demo-content/demo-2/customizer.dat',
			'local_import_json' => array(
				array(
					'file_path' => trailingslashit(get_template_directory()) . '/inc/demo-content/demo-2/theme-options.json',
					'option_name' => 'conbix_theme_options',
				),
			),
			'import_preview_image_url' => trailingslashit(get_template_directory_uri()) . '/inc/demo-content/demo-2/demo.png',
			'preview_url' => 'https://light2.themeori.com/',
		],


		// demo 03
		[
			'import_file_name' => 'Home 03 - Light',
			'categories' => array('Light'),
			'local_import_file' => trailingslashit(get_template_directory()) . '/inc/demo-content/demo-3/content.xml',
			'local_import_widget_file' => trailingslashit(get_template_directory()) . '/inc/demo-content/demo-3/widget.wie',
			'local_import_customizer_file' => trailingslashit(get_template_directory()) . '/inc/demo-content/demo-3/customizer.dat',
			'local_import_json' => array(
				array(
					'file_path' => trailingslashit(get_template_directory()) . '/inc/demo-content/demo-3/theme-options.json',
					'option_name' => 'conbix_theme_options',
				),
			),
			'import_preview_image_url' => trailingslashit(get_template_directory_uri()) . '/inc/demo-content/demo-3/demo.png',
			'preview_url' => 'https://light3.themeori.com/',
		],

		// demo 04
		[
			'import_file_name' => 'Home 01 - Dark',
			'categories' => array('Dark'),
			'local_import_file' => trailingslashit(get_template_directory()) . '/inc/demo-content/demo-4/content.xml',
			'local_import_widget_file' => trailingslashit(get_template_directory()) . '/inc/demo-content/demo-4/widget.wie',
			'local_import_customizer_file' => trailingslashit(get_template_directory()) . '/inc/demo-content/demo-4/customizer.dat',
			'local_import_json' => array(
				array(
					'file_path' => trailingslashit(get_template_directory()) . '/inc/demo-content/demo-4/theme-options.json',
					'option_name' => 'conbix_theme_options',
				),
			),
			'import_preview_image_url' => trailingslashit(get_template_directory_uri()) . '/inc/demo-content/demo-4/demo.png',
			'preview_url' => 'https://dark1.themeori.com/',
		],

		// demo 05
		[
			'import_file_name' => 'Home 02 - Dark',
			'categories' => array('Dark'),
			'local_import_file' => trailingslashit(get_template_directory()) . '/inc/demo-content/demo-5/content.xml',
			'local_import_widget_file' => trailingslashit(get_template_directory()) . '/inc/demo-content/demo-5/widget.wie',
			'local_import_customizer_file' => trailingslashit(get_template_directory()) . '/inc/demo-content/demo-5/customizer.dat',
			'local_import_json' => array(
				array(
					'file_path' => trailingslashit(get_template_directory()) . '/inc/demo-content/demo-5/theme-options.json',
					'option_name' => 'conbix_theme_options',
				),
			),
			'import_preview_image_url' => trailingslashit(get_template_directory_uri()) . '/inc/demo-content/demo-5/demo.png',
			'preview_url' => 'https://dark2.themeori.com/',
		],


		// demo 06
		[
			'import_file_name' => 'Home 03 - Dark',
			'categories' => array('Dark'),
			'local_import_file' => trailingslashit(get_template_directory()) . '/inc/demo-content/demo-6/content.xml',
			'local_import_widget_file' => trailingslashit(get_template_directory()) . '/inc/demo-content/demo-6/widget.wie',
			'local_import_customizer_file' => trailingslashit(get_template_directory()) . '/inc/demo-content/demo-6/customizer.dat',
			'local_import_json' => array(
				array(
					'file_path' => trailingslashit(get_template_directory()) . '/inc/demo-content/demo-6/theme-options.json',
					'option_name' => 'conbix_theme_options',
				),
			),
			'import_preview_image_url' => trailingslashit(get_template_directory_uri()) . '/inc/demo-content/demo-6/demo.png',
			'preview_url' => 'https://dark3.themeori.com/',
		],


	];
}

add_filter('ocdi/import_files', 'conbix_import_demo_files');

/**
 * Add CSF json
 */
if (!function_exists('conbix_after_content_import_execution')) {
	function conbix_after_content_import_execution($selected_import_files, $import_files, $selected_index)
	{

		$downloader = new OCDI\Downloader();

		if (!empty($import_files[$selected_index]['import_json'])) {

			foreach ($import_files[$selected_index]['import_json'] as $index => $import) {
				$file_path = $downloader->download_file($import['file_url'], 'demo-import-file-' . $index . '-' . date('Y-m-d__H-i-s') . '.json');
				$file_raw = OCDI\Helpers::data_from_file($file_path);
				update_option($import['option_name'], json_decode($file_raw, true));
			}
		} else if (!empty($import_files[$selected_index]['local_import_json'])) {

			foreach ($import_files[$selected_index]['local_import_json'] as $index => $import) {
				$file_path = $import['file_path'];
				$file_raw = OCDI\Helpers::data_from_file($file_path);
				update_option($import['option_name'], json_decode($file_raw, true));
			}
		}
	}

	add_action('ocdi/after_content_import_execution', 'conbix_after_content_import_execution', 3, 99);
}

/* After Import */

if (!function_exists('conbix_after_import')) {
	function conbix_after_import($selected_import)
	{

		//Set Menu
		$main_menu = get_term_by('name', esc_html__('Main Menu', 'conbix'), 'nav_menu');

		set_theme_mod(
			'nav_menu_locations',
			array(
				'header-menu' => $main_menu->term_id,
			)
		);

		$home_page = get_page_by_title(esc_html__('Home', 'conbix'));

		//Set Front page
		if (isset($home_page->ID)) {
			update_option('page_on_front', $home_page->ID);
			update_option('show_on_front', 'page');
		}

		// Set Post Page
		$blog_page = get_page_by_title(esc_html__('Blog', 'conbix'));
		if (isset($blog_page->ID)) {
			update_option('page_for_posts', $blog_page->ID);
		}
	}
	add_action('ocdi/after_import', 'conbix_after_import');
}

/* Theme Page Demo Import */

if (!function_exists('conbix_ocdi_page')) {
	function conbix_ocdi_page($args)
	{

		$args['parent_slug'] = 'conbix';
		$args['menu_slug'] = 'conbix-demo';
		$args['menu_title'] = esc_html__('Demo Import', 'conbix');
		$args['capability'] = 'manage_options';

		return $args;

	}
	add_filter('ocdi/plugin_page_setup', 'conbix_ocdi_page');
}