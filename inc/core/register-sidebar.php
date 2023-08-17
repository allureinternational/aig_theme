<?php

/**
 * Register Sidebar area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function conbix_widgets_init()
{
	// Default Sidebar
	register_sidebar(
		array(
			'name'          => esc_html__('Right Sidebar', 'conbix'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'conbix'),
			'before_widget' => '<div id="%1$s" class="all__sidebar-item widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	if (class_exists('CSF')) :

		// Service Sidebar
		register_sidebar(
			array(
				'name'          => esc_html__('Left Sidebar', 'conbix'),
				'id'            => 'sidebar-2',
				'description'   => esc_html__('Add widgets here.', 'conbix'),
				'before_widget' => '<div id="%1$s" class="all__sidebar-item widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);

		// Service Sidebar
		register_sidebar(
			array(
				'name'          => esc_html__('Service Sidebar', 'conbix'),
				'id'            => 'service-1',
				'description'   => esc_html__('Add widgets here.', 'conbix'),
				'before_widget' => '<div id="%1$s" class="all__sidebar-item widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);

		$footer_column = conbix_option('footer_column', 'col-lg-4');
		// Default Footer
		register_sidebar(
			array(
				'name'          => esc_html__('Default Footer', 'conbix'),
				'id'            => 'footer-1',
				'description'   => esc_html__('Add widgets here.', 'conbix'),
				'before_widget' => '<div id="%1$s" class="widget ' . esc_attr($footer_column) . ' col-md-6 %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);

		// Footer Style 01
		register_sidebar(
			array(
				'name'          => esc_html__('Footer Style 01', 'conbix'),
				'id'            => 'footer-11',
				'description'   => esc_html__('Add widgets here.', 'conbix'),
				'before_widget' => '<div id="%1$s" class="%2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);

		// Footer Style 02
		register_sidebar(
			array(
				'name'          => esc_html__('Footer Style 02', 'conbix'),
				'id'            => 'footer-22',
				'description'   => esc_html__('Add widgets here.', 'conbix'),
				'before_widget' => '<div id="%1$s" class="%2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2>',
				'after_title'   => '</h2>',
			)
		);

		// Footer Style 03
		register_sidebar(
			array(
				'name'          => esc_html__('Footer Style 03', 'conbix'),
				'id'            => 'footer-33',
				'description'   => esc_html__('Add widgets here.', 'conbix'),
				'before_widget' => '<div id="%1$s" class="%2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2>',
				'after_title'   => '</h2>',
			)
		);

		// Hamburger Menu
		register_sidebar(
			array(
				'name'          => esc_html__('Hamburger Menu', 'conbix'),
				'id'            => 'hamburger-menu',
				'description'   => esc_html__('Add widgets here.', 'conbix'),
				'before_widget' => '<div id="%1$s" class="hamburger-popup %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);

	endif;
}
add_action('widgets_init', 'conbix_widgets_init');
