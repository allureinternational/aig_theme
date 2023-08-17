<?php

CSF::createSection($conbix_theme_option, array(
    'title'  => esc_html__('Blog Settings', 'conbix'),
    'icon'   => 'fas fa-edit',
    'id'     => 'blog_settings',
  ));


  CSF::createSection($conbix_theme_option, array(
    'title'  => esc_html__('Blog Page', 'conbix'),
    'icon'   => 'fas fa-list',
    'id'     => 'blog_page',
    'parent' => 'blog_settings',
    'fields' => array(

      array(
        'id'      => 'blog_list_date',
        'type'    => 'button_set',
        'title'   => esc_html__('Show Date', 'conbix'),
        'options' => array(
          'yes'   => esc_html__('Yes', 'conbix'),
          'no'    => esc_html__('No', 'conbix'),
        ),
        'default' => 'yes',
      ),

      array(
        'id'      => 'blog_list_author',
        'type'    => 'button_set',
        'title'   => esc_html__('Show Author', 'conbix'),
        'options' => array(
          'yes'   => esc_html__('Yes', 'conbix'),
          'no'    => esc_html__('No', 'conbix'),
        ),
        'default' => 'yes',
      ),

      array(
        'id'      => 'blog_list_comment',
        'type'    => 'button_set',
        'title'   => esc_html__('Show Comment', 'conbix'),
        'options' => array(
          'yes'   => esc_html__('Yes', 'conbix'),
          'no'    => esc_html__('No', 'conbix'),
        ),
        'default' => 'yes',
      ),

      array(
        'id'      => 'blog-cta-btn',
        'type'    => 'text',
        'title'   => esc_html__('Button Text', 'conbix'),
      ),

    )
  ));


  CSF::createSection($conbix_theme_option, array(
    'title'  => esc_html__('Single Blog', 'conbix'),
    'icon'   => 'fas fa-eye',
    'id'     => 'single_blog',
    'parent' => 'blog_settings',
    'fields' => array(

      array(
        'id'      => 'blog_single_date',
        'type'    => 'button_set',
        'title'   => esc_html__('Show Date', 'conbix'),
        'options' => array(
          'yes'   => esc_html__('Yes', 'conbix'),
          'no'    => esc_html__('No', 'conbix'),
        ),
        'default' => 'yes',
      ),

      array(
        'id'      => 'blog_single_author',
        'type'    => 'button_set',
        'title'   => esc_html__('Show Author', 'conbix'),
        'options' => array(
          'yes'   => esc_html__('Yes', 'conbix'),
          'no'    => esc_html__('No', 'conbix'),
        ),
        'default' => 'yes',
      ),

      array(
        'id'      => 'blog_single_comment',
        'type'    => 'button_set',
        'title'   => esc_html__('Show Comment', 'conbix'),
        'options' => array(
          'yes'   => esc_html__('Yes', 'conbix'),
          'no'    => esc_html__('No', 'conbix'),
        ),
        'default' => 'yes',
      ),

    )
  ));