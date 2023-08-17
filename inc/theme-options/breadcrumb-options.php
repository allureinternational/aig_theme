<?php

  // Breadcrumb Options

  CSF::createSection($conbix_theme_option, array(
    'title'  => esc_html__('Breadcrumb', 'conbix'),
    'icon'   => 'fas fa-pager',
    'id'     => 'breadcrumb_options',
    'dependency' => array('banner_breadcrumb', '==', 'yes'),
    'fields' => array(

      array(
        'id'      => 'banner_breadcrumb',
        'type'    => 'button_set',
        'title'   => esc_html__('Enable Banner', 'conbix'),
        'options' => array(
          'yes'   => esc_html__('Yes', 'conbix'),
          'no'    => esc_html__('No', 'conbix'),
        ),
        'default' => 'yes',
      ),

      array(
        'id'                    => 'banner_header_bg',
        'type'                  => 'background',
        'title'                 => esc_html__('Background', 'conbix'),
        'output'                => '.page__banner',
        'background_gradient'   => false,
        'background_origin'     => false,
        'background_clip'       => false,
        'background_blend_mode' => false,
        'background-color'      => false,
        'dependency' => array('banner_breadcrumb', '==', 'yes'),
      ),
  
    )
  ));
