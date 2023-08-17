<?php
if (!defined('ABSPATH')) exit;
if (class_exists('CSF')) {
  // Set a unique slug-like ID
  $conbix_metabox = 'conbix_meta_options';

  CSF::createMetabox($conbix_metabox, array(
    'title'     => esc_html__('Settings', 'conbix'),
    'post_type' => array('page', 'post', 'service', 'portfolio'),
  ));

  CSF::createSection($conbix_metabox, array(
    'title'  => esc_html__('Global Options', 'conbix'),
    'icon'   => 'fas fa-border-all',
    'fields' => array(

      array(
        'id'      => 'dark_mode',
        'type'    => 'button_set',
        'title'   => esc_html__('Dark Mode', 'conbix'),
        'options' => array(
          'dark-mode'   => esc_html__('Yes', 'conbix'),
          'light-mode'    => esc_html__('No', 'conbix'),
        ),
        'default' => 'light-mode',
      ),

      array(
        'id'      => 'section_padding',
        'type'    => 'button_set',
        'title'   => esc_html__('Content Padding', 'conbix'),
        'options' => array(
          'section-padding'     => esc_html__('Yes', 'conbix'),
          'section-nopading'    => esc_html__('No', 'conbix'),
        ),
        'default' => 'section-padding',
      ),

      array(
        'id'      => 'layout_enable',
        'type'    => 'button_set',
        'title'   => esc_html__('Custom Layout', 'conbix'),
        'options' => array(
          'yes'   => esc_html__('Yes', 'conbix'),
          'no'    => esc_html__('No', 'conbix'),
        ),
        'default' => 'no',
      ),

      array(
        'id'       => 'site_layout',
        'type'     => 'palette',
        'title'    => esc_html__('Select Layout', 'conbix'),
        'options'  => array(
          'left-sidebar'   => array('#cccccc', '#eeeeee', '#eeeeee'),
          'full-width'     => array('#dddddd', '#dddddd', '#dddddd'),
          'right-sidebar'  => array('#eeeeee', '#eeeeee', '#cccccc'),
        ),
        'default'    => 'full-width',
        'dependency' => array('layout_enable', '==', 'yes'),
      ),

      array(
        'id'          => 'site_sidebars',
        'type'        => 'select',
        'title'       => esc_html__('Sidebars', 'conbix'),
        'placeholder' => esc_html__('Select a Sidebar', 'conbix'),
        'options'     => 'sidebars',
        'dependency' => array(
          array('site_layout', 'any', 'left-sidebar,right-sidebar'),
          array('layout_enable',   '==', 'yes'),
        ),
      ),

    )
  ));

  CSF::createSection($conbix_metabox, array(
    'title'     => esc_html__('Header Options', 'conbix'),
    'icon'      => 'fas fa-heading',
    'fields'    => array(

      array(
        'id'      => 'meta_header_layout',
        'type'    => 'button_set',
        'title'   => esc_html__('Custom Header', 'conbix'),
        'options' => array(
          'yes'   => esc_html__('Yes', 'conbix'),
          'no'    => esc_html__('No', 'conbix'),
        ),
        'default' => 'no',
      ),

      array(
        'id'      => 'meta_header_stlye',
        'type'    => 'select',
        'title'   => esc_html__('Layout', 'conbix'),
        'options' => array(
          'header-one'     => esc_html__('Header Style 01', 'conbix'),
          'header-two'     => esc_html__('Header Style 02', 'conbix'),
          'header-three'   => esc_html__('Header Style 03', 'conbix'),
          'header-custom'   => esc_html__('Theme Builder', 'conbix'),
        ),
        'dependency'     => array('meta_header_layout', '==', 'yes'),
      ),

      // Theme Builder Options
    array(
      'id'             => 'conbix_builder_id',
      'type'           => 'select',
      'title'          => esc_html__('Select a Template', 'conbix'),
      'options'        => 'posts',
      'query_args'     => array(
        'post_type'      => 'conbix_builder',
        'posts_per_page' => -1,
      ),
      'dependency'  => array(
        array('meta_header_stlye', '==', 'header-custom'),
        array('meta_header_layout', '==', 'yes'),
      ),
    ),

    )
  ));

  CSF::createSection($conbix_metabox, array(
    'title'     => esc_html__('Breadcrumb Settings', 'conbix'),
    'icon'      => 'fas fa-pager',
    'fields'    => array(

      array(
        'id'      => 'breadcrumb_enable',
        'type'    => 'button_set',
        'title'   => esc_html__('Enable Banner', 'conbix'),
        'options' => array(
          'yes'   => esc_html__('Yes', 'conbix'),
          'no'    => esc_html__('No', 'conbix'),
        ),
        'default' => 'yes',
      ),

      array(
        'id'      => 'custom_title',
        'type'    => 'button_set',
        'title'   => esc_html__('Custom Title', 'conbix'),
        'options' => array(
          'yes'   => esc_html__('Yes', 'conbix'),
          'no'    => esc_html__('No', 'conbix'),
        ),
        'default' => 'no',
        'dependency'  => array('breadcrumb_enable', '==', 'yes'),
      ),
      array(
        'id'          => 'page_title',
        'type'        => 'text',
        'title'       => esc_html__('Banner Title', 'conbix'),
        'default'     => esc_html__('Custom Title', 'conbix'),
        'dependency'  => array(
          array('breadcrumb_enable', '==', 'yes'),
          array('custom_title', '==', 'yes'),
        ),
      ),

      array(
        'id'                    => 'breadcrumb_banner',
        'type'                  => 'background',
        'title'                 => esc_html__('Custom Background', 'conbix'),
        'output'                => '.page__banner',
        'background_gradient'   => false,
        'background_origin'     => false,
        'background_clip'       => false,
        'background_blend_mode' => false,
        'background-color'      => false,
        'dependency'  => array('breadcrumb_enable', '==', 'yes'),
      ),

    )
  ));

  CSF::createSection($conbix_metabox, array(
    'title'  => esc_html__('Footer Options', 'conbix'),
    'icon'   => 'fas fa-stream',
    'fields' => array(

      array(
        'id'      => 'meta_footer_layout',
        'type'    => 'button_set',
        'title'   => esc_html__('Custom Footer', 'conbix'),
        'options' => array(
          'yes'   => esc_html__('Yes', 'conbix'),
          'no'    => esc_html__('No', 'conbix'),
        ),
        'default' => 'no',
      ),

      array(
        'id'          => 'meta_footer_stlye',
        'type'        => 'select',
        'title'       => esc_html__('Footer Layout', 'conbix'),
        'options'     => array(
          'footer-one'    => esc_html__('Footer Style 01', 'conbix'),
          'footer-two'    => esc_html__('Footer Style 02', 'conbix'),
          'footer-three'  => esc_html__('Footer Style 03', 'conbix'),
          'footer-custom' => esc_html__('Theme Builder', 'conbix'),
        ),
        'dependency'     => array('meta_footer_layout', '==', 'yes'),
      ),

    // Theme Builder Options
     array(
      'id'             => 'conbix_builder_deta',
      'type'           => 'select',
      'title'          => esc_html__('Select a Template', 'conbix'),
      'options'        => 'posts',
      'query_args'     => array(
        'post_type'      => 'conbix_builder',
        'posts_per_page' => -1,
      ),
      'dependency'  => array(
        array('meta_footer_stlye', '==', 'footer-custom'),
        array('meta_footer_layout', '==', 'yes'),
      ),
    ),


    )
  ));
}
