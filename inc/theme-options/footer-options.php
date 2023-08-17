<?php

// Footer Options

CSF::createSection($conbix_theme_option, array(
  'title'  => esc_html__('Footer Options', 'conbix'),
  'icon'   => 'fas fa-stream',
  'id'     => 'footer_options',
  'fields' => array()
));

CSF::createSection($conbix_theme_option, array(
  'title'  => esc_html__('General Footer', 'conbix'),
  'icon'   => 'fas fa-stream',
  'id'     => 'general_footer',
  'parent' => 'footer_options',
  'fields' => array(

    array(
      'id'          => 'footer_layout_style',
      'type'        => 'select',
      'title'       => esc_html__('Footer Style', 'conbix'),
      'options'     => array(
        'footer-default' => esc_html__('Default Footer', 'conbix'),
        'footer-custom'  => esc_html__('Theme Builder', 'conbix'),
        'footer-one'     => esc_html__('Footer Style 01', 'conbix'),
        'footer-two'     => esc_html__('Footer Style 02', 'conbix'),
        'footer-three'   => esc_html__('Footer Style 03', 'conbix'),
      ),
      'default'     => 'footer-default',
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
      'dependency' => array('footer_layout_style', '==', 'footer-custom'),
    ),

    array(
      'type'    => 'subheading',
      'content' => esc_html__('Footer Widget', 'conbix'),
      'dependency' => array('footer_layout_style', '==', 'footer-default'),
    ),

    array(
      'id'      => 'footer_widget',
      'type'    => 'button_set',
      'title'   => esc_html__('Footer Widget', 'conbix'),
      'options' => array(
        'yes'   => esc_html__('Yes', 'conbix'),
        'no'    => esc_html__('No', 'conbix'),
      ),
      'default' => 'no',
      'desc'    => esc_html__('Enable or Disable', 'conbix'),
      'dependency' => array('footer_layout_style', '==', 'footer-default'),
    ),

    array(
      'id'          => 'footer_column',
      'type'        => 'select',
      'title'       => esc_html__('Footer Column', 'conbix'),
      'desc'        => esc_html__('Select Column', 'conbix'),
      'options'     => array(
        'col-lg-12' => esc_html__('Column 1', 'conbix'),
        'col-lg-6'  => esc_html__('Column 2', 'conbix'),
        'col-lg-3'  => esc_html__('Column 3', 'conbix'),
        'col-lg-4'  => esc_html__('Column 4', 'conbix'),
      ),
      'default'     => 'col-lg-4',
      'dependency' => array(
        array('footer_widget', '==', 'yes'),
        array('footer_layout_style', '==', 'footer-default'),
      ),
    ),

    array(
      'id'     => 'footer_widget_padding',
      'type'   => 'spacing',
      'left'   => false,
      'right'  => false,
      'title'  => esc_html__('Footer Padding', 'conbix'),
      'output' => '.theme__footer',
      'dependency' => array(
        array('footer_widget', '==', 'yes'),
        array('footer_layout_style', '==', 'footer-default'),
      ),
    ),

    array(
      'id'          => 'footer_bg',
      'type'        => 'color',
      'title'       => esc_html__('Footer Background', 'conbix'),
      'output'      => '.theme__footer',
      'output_mode' => 'background',
      'dependency' => array(
        array('footer_widget', '==', 'yes'),
        array('footer_layout_style', '==', 'footer-default'),
      ),
    ),

    array(
      'type'    => 'subheading',
      'content' => esc_html__('Footer Copyright', 'conbix'),
      'dependency' => array('footer_layout_style', '==', 'footer-default'),
    ),

    array(
      'id'          => 'footer_bottom_color',
      'type'        => 'color',
      'title'       => esc_html__('Copyright Color', 'conbix'),
      'output'      => '.copyright_bottom p',
      'output_mode' => 'color',
      'dependency'  => array('footer_layout_style', '==', 'footer-default'),
    ),

    array(
      'id'          => 'footer_bottom_bg',
      'type'        => 'color',
      'title'       => esc_html__('Copyright Background', 'conbix'),
      'output'      => '.copyright_bottom',
      'output_mode' => 'background',
      'dependency'  => array('footer_layout_style', '==', 'footer-default'),
    ),

  )
));

// Footer Options one

CSF::createSection($conbix_theme_option, array(
  'title'  => esc_html__('Footer Style 01', 'conbix'),
  'icon'   => 'fas fa-eye',
  'id'     => 'footer_style_one',
  'parent' => 'footer_options',
  'fields' => array(

    array(
      'id'      => 'footer_one_cta',
      'type'    => 'button_set',
      'title'   => esc_html__('Footer CTA', 'conbix'),
      'options' => array(
        'yes'   => esc_html__('Yes', 'conbix'),
        'no'    => esc_html__('No', 'conbix'),
      ),
      'default' => 'yes',
      'desc'    => esc_html__('Enable or Disable', 'conbix'),
    ),

    array(
      'id'      => 'footer_one_content',
      'type'    => 'textarea',
      'title'   => esc_html__('CTA Content', 'conbix'),
      'default' => esc_html__('Small Business Grow faster With Our Consulting Services', 'conbix'),
      'dependency'  => array('footer_one_cta', '==', 'yes'),
    ),

    array(
      'id'      => 'footer_one_button_text',
      'type'    => 'text',
      'title'   => esc_html__('CTA Button Text', 'conbix'),
      'default' => esc_html__('get started', 'conbix'),
      'dependency'  => array('footer_one_cta', '==', 'yes'),
    ),

    array(
      'id'         => 'footer_on_button_url',
      'type'       => 'text',
      'title'      => esc_html__('CTA Button URL', 'conbix'),
      'default'    => esc_attr__('http://google.com', 'conbix'),
      'dependency'  => array('footer_one_cta', '==', 'yes'),
    ),

    array(
      'id'          => 'footer_one_bg',
      'type'        => 'color',
      'title'       => esc_html__('Footer Background', 'conbix'),
      'output'      => '.footer__one',
      'output_mode' => 'background',
    ),

  )

));

// Footer Option Two
CSF::createSection($conbix_theme_option, array(
  'title'  => esc_html__('Footer Style 02', 'conbix'),
  'icon'   => 'fas fa-eye',
  'id'     => 'footer_style_two',
  'parent' => 'footer_options',
  'fields' => array(

    array(
      'id'      => 'footer_two_cta',
      'type'    => 'button_set',
      'title'   => esc_html__('Footer CTA', 'conbix'),
      'options' => array(
        'yes'   => esc_html__('Yes', 'conbix'),
        'no'    => esc_html__('No', 'conbix'),
      ),
      'default' => 'yes',
      'desc'    => esc_html__('Enable or Disable', 'conbix'),
    ),

    array(
      'id'      => 'footer_two_cta_bg',
      'type'    => 'background',
      'title'   => esc_html__('CTA Background', 'conbix'),
      'dependency'  => array('footer_two_cta', '==', 'yes'),
      'output'      => '.subscribe__area-bg',
      'output_mode' => 'background',
    ),

    array(
      'id'      => 'footer_two_cta_title',
      'type'    => 'text',
      'title'   => esc_html__('CTA Title', 'conbix'),
      'default' => esc_html__('Stay Connected', 'conbix'),
      'dependency'  => array('footer_two_cta', '==', 'yes'),
    ),

    array(
      'id'      => 'footer_two_cta_sub',
      'type'    => 'text',
      'title'   => esc_html__('CTA Notify Text', 'conbix'),
      'default' => esc_html__('get all notifications', 'conbix'),
      'dependency'  => array('footer_two_cta', '==', 'yes'),
    ),

    array(
      'id'         => 'footer_two_cta_icon',
      'type'       => 'icon',
      'default'    => 'far fa-bell',
      'title'      => esc_html__('CTA Notify Icon', 'conbix'),
      'dependency'  => array('footer_two_cta', '==', 'yes'),
    ),

    array(
      'id'      => 'footer_two_cta_form',
      'type'    => 'number',
      'title'   => esc_html__('Subscribe Form id', 'conbix'),
      'desc'    => esc_html__('Worked with Contact Form 7 Unique ID Only. Like a Number: 12', 'conbix'),
      'dependency'  => array('footer_two_cta', '==', 'yes'),
    ),

    array(
      'id'          => 'footer_two_bg',
      'type'        => 'color',
      'title'       => esc_html__('Footer Background', 'conbix'),
      'output'      => '.footer__two',
      'output_mode' => 'background',
    ),

  )

));

// Footer Option Three

CSF::createSection($conbix_theme_option, array(
  'title'  => esc_html__('Footer Style 03', 'conbix'),
  'icon'   => 'fas fa-eye',
  'id'     => 'footer_style_three',
  'parent' => 'footer_options',
  'fields' => array(

    array(
      'id'      => 'footer_three_cta',
      'type'    => 'button_set',
      'title'   => esc_html__('Footer CTA', 'conbix'),
      'options' => array(
        'yes'   => esc_html__('Yes', 'conbix'),
        'no'    => esc_html__('No', 'conbix'),
      ),
      'default' => 'yes',
      'desc'    => esc_html__('Enable or Disable', 'conbix'),
    ),

    array(
      'id'      => 'footer_three_cta_bg',
      'type'    => 'color',
      'title'   => esc_html__('CTA Background', 'conbix'),
      'dependency'  => array('footer_three_cta', '==', 'yes'),
      'output'      => '.subscribe',
      'output_mode' => 'background',
    ),

    array(
      'id'      => 'footer_three_cta_title',
      'type'    => 'text',
      'title'   => esc_html__('CTA Title', 'conbix'),
      'default' => esc_html__('Stay informed, subscribe to our newsletter', 'conbix'),
      'dependency'  => array('footer_three_cta', '==', 'yes'),
    ),

    array(
      'id'      => 'footer_three_cta_form',
      'type'    => 'number',
      'title'   => esc_html__('Subscribe Form id', 'conbix'),
      'desc'    => esc_html__('Worked with Contact Form 7 Unique ID Only. Like a Number: 12', 'conbix'),
      'dependency'  => array('footer_three_cta', '==', 'yes'),
    ),

    array(
      'id'          => 'footer_three_bg',
      'type'        => 'color',
      'title'       => esc_html__('Footer Background', 'conbix'),
      'output'      => '.footer__three',
      'output_mode' => 'background',
    ),

  )

));


// Footer CopyRight Options

CSF::createSection($conbix_theme_option, array(
  'title'  => esc_html__('CopyRight Content', 'conbix'),
  'icon'   => 'fas fa-eye',
  'id'     => 'footer_copyright',
  'parent' => 'footer_options',
  'fields' => array(

    array(
      'id'            => 'footer_copyright',
      'type'          => 'wp_editor',
      'title'         => esc_html__('Copyright Text', 'conbix'),
      'tinymce'       => true,
      'quicktags'     => true,
      'media_buttons' => false,
      'height'        => '50px',
    ),

  )
));
