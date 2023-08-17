<?php if (!defined('ABSPATH')) {
  die;
} // Cannot access directly.

/**
 * Theme Admin Pages
 */

if (!class_exists('Conbix_Admin')) {

  class Conbix_Admin
  {
    private static $instance = null;

    public static function init()
    {
      if (is_null(self::$instance)) {
        self::$instance = new self();
      }
      return self::$instance;
    }

    public function __construct()
    {
      add_action('admin_menu', array($this, 'conbix_admin_page'), 1);
      add_action('admin_enqueue_scripts', array($this, 'conbix_theme_page_assets'));

    }

    public function conbix_admin_page()
    {

      add_menu_page(
        esc_html__('Conbix', 'conbix'),
        esc_html__('Conbix', 'conbix'),
        'manage_options',
        'conbix',
        array(
          $this,
          'conbix_theme_welcome'
        ),
        get_theme_file_uri('inc/admin/assets/img/icon.svg'),
        2
      );

      add_submenu_page(
        'conbix',
        esc_html__('Welcome', 'conbix'),
        esc_html__('Welcome', 'conbix'),
        'manage_options',
        'conbix',
        array($this, 'conbix_theme_welcome'),
      );
      if (class_exists('CSF')) {
        add_submenu_page(
          'conbix',
          'Theme Builder',
          'Theme Builder',
          'manage_options',
          'edit.php?post_type=conbix_builder',
        );
      }

    }

    public function conbix_theme_welcome()
    {
      get_template_part('inc/admin/' . 'welcome');
    }
    public function conbix_theme_page_assets()
    {
      wp_enqueue_style('conbix-admin', get_theme_file_uri('inc/admin/assets/css/admin.css'), array(), CONBIX_VERSION, 'all');
    }

  }

  Conbix_Admin::init();
}