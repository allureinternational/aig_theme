<?php


CSF::createSection($conbix_theme_option, array(
    'title'  => esc_html__('Typography', 'conbix'),
    'icon'   => 'fas fa-font',
    'id'     => 'typography_settings',
    'fields' => array(


      array(
        'id'             => 'body_typography',
        'type'           => 'typography',
        'title'          => esc_html__('Body Typography', 'conbix'),
        'output'         => 'body',
        'extra_styles'   => true,
        'text_align'     => false,
        'text_transform' => false,
        'default'        => array(
          'font-family'  => 'Manrope',
          'type'         => 'google',
          'font-weight'  => '400',
          'unit'         => 'px',
          'extra-styles' => array('500', '600'),
        ),
      ),

      array(
        'id'             => 'heading_typography',
        'type'           => 'typography',
        'title'          => esc_html__('Heading Typography', 'conbix'),
        'output'         => 'h1,h2,h3,h4,h5,h6',
        'extra_styles'   => true,
        'text_align'     => false,
        'text_transform' => false,
        'default'        => array(
          'font-family'  => 'Urbanist',
          'type'         => 'google',
          'font-weight'  => '700',
          'unit'         => 'px',
          'extra-styles' => array('400', '500', '600', '800'),
        ),
      ),
    )
  ));