<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for plugin Conbix
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */
add_action('tgmpa_register', 'conbix_register_required_plugins');
function conbix_register_required_plugins()
{

	$plugins = array(

		array(
			'name' => esc_html__('Conbix Toolkit', 'conbix'),
			'slug' => 'conbix-toolkit',
			'source' => get_template_directory() . '/inc/tgm/plugins/conbix-toolkit.zip',
			'required' => true,
			'version' => '1.0.3',
			'force_activation' => false,
			'force_deactivation' => false,
			'external_url' => '',
			'is_callable' => '',
		),

		array(
			'name' => esc_html__('One Click Demo Import', 'conbix'),
			'slug' => 'one-click-demo-import',
			'required' => false,
		),

		array(
			'name' => 'Envato Market',
			'slug' => 'envato-market',
			'source' => 'https://envato.github.io/wp-envato-market/dist/envato-market.zip',
			'required' => false,
		),

		array(
			'name' => esc_html__('Elementor Website Builder', 'conbix'),
			'slug' => 'elementor',
			'required' => true,
		),

		array(
			'name' => esc_html__('Contact Form 7', 'conbix'),
			'slug' => 'contact-form-7',
			'required' => false,
		),

		array(
			'name' => esc_html__('WooCommerce', 'conbix'),
			'slug' => 'woocommerce',
			'required' => false,
		),

	);


	$config = array(
		'id' => 'conbix',
		'default_path' => '',
		'menu' => 'tgmpa-install-plugins',
		'parent_slug' => 'conbix',
		'capability' => 'manage_options',
		'has_notices' => true,
		'dismissable' => true,
		'dismiss_msg' => '',
		'is_automatic' => false,
		'message' => '',

	);

	tgmpa($plugins, $config);
}