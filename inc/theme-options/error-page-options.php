<?php

  // 404 page options

  CSF::createSection($conbix_theme_option, array(
    'title'  => esc_html__('404 Error', 'conbix'),
    'icon'   => 'fas fa-exclamation-circle',
    'id'     => '404_error',
    'fields' => array(

      array(
        'id'           => '404_light',
        'type'         => 'media',
        'title'        => esc_html__('404 Light Image', 'conbix'),
        'library'      => 'image',
        'url'          => false,
        'button_title' => esc_html__('Upload', 'conbix'),
        'default'      => array(
          'url' => get_theme_file_uri('assets/img/pages/404.png'),
          'thumbnail' => get_theme_file_uri('assets/img/pages/404.png'),
        ),
      ),
  
      array(
        'id'           => '404_dark',
        'type'         => 'media',
        'title'        => esc_html__('404 Dark Image', 'conbix'),
        'library'      => 'image',
        'url'          => false,
        'button_title' => esc_html__('Upload', 'conbix'),
        'default'   => array(
          'url' => get_theme_file_uri('assets/img/pages/404-dark.png'),
          'thumbnail' => get_theme_file_uri('assets/img/pages/404-dark.png'),
        ),
      ),

      array(
        'id'    => 'error_page_title',
        'type'  => 'text',
        'title' => esc_html__('404 Title', 'conbix'),
      ),

      array(
        'id'    => 'error_page_content',
        'type'  => 'textarea',
        'title' => esc_html__('404 Content', 'conbix'),
      ),

      array(
        'id'      => 'error_page_btn',
        'type'    => 'button_set',
        'title'   => esc_html__('Home Button', 'conbix'),
        'options' => array(
          'yes'   => esc_html__('Yes', 'conbix'),
          'no'    => esc_html__('No', 'conbix'),
        ),
        'default' => 'yes',
        'desc'    => esc_html__('Enable or Disable', 'conbix'),
      ),

      array(
        'id'    => 'error_page_btn_text',
        'type'  => 'text',
        'title' => esc_html__('Button Text', 'conbix'),
        'dependency'  => array('error_page_btn', '==', 'yes'),
      ),

    )
  ));