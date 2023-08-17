<?php

CSF::createSection($conbix_theme_option, array(
  'title'  => esc_html__('Header Options', 'conbix'),
  'icon'   => 'fas fa-heading',
  'id'     => 'header_options',
  'fields' => array()
));


CSF::createSection($conbix_theme_option, array(
  'title'  => esc_html__('General Header', 'conbix'),
  'icon'   => 'fas fa-eye',
  'id'     => 'general_header',
  'parent' => 'header_options',
  'fields' => array(

    array(
      'id'      => 'header_layout',
      'type'    => 'select',
      'title'   => esc_html__('General Header Style', 'conbix'),
      'options' => array(
        'header-default' => esc_html__('Default Header', 'conbix'),
        'header-custom'  => esc_html__('Theme Builder', 'conbix'),
        'header-one'     => esc_html__('Header Style 01', 'conbix'),
        'header-two'     => esc_html__('Header Style 02', 'conbix'),
        'header-three'   => esc_html__('Header Style 03', 'conbix'),
      ),
      'default' => 'header-default',
      'desc'    => esc_html__('Select Header Style', 'conbix'),
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
      'dependency' => array('header_layout', '==', 'header-custom'),
    ),


    array(
      'id'           => 'default_logo',
      'type'         => 'media',
      'title'        => esc_html__('Default Logo - Light', 'conbix'),
      'subtitle'     => esc_html__('Light Mode Logo', 'conbix'),
      'library'      => 'image',
      'url'          => false,
      'button_title' => esc_html__('Upload', 'conbix'),
      'dependency' => array('header_layout', '==', 'header-default'),
    ),

    array(
      'id'           => 'default_logo_2',
      'type'         => 'media',
      'title'        => esc_html__('Default Logo - Dark', 'conbix'),
      'subtitle'     => esc_html__('Dark Mode Logo', 'conbix'),
      'library'      => 'image',
      'url'          => false,
      'button_title' => esc_html__('Upload', 'conbix'),
      'dependency' => array('header_layout', '==', 'header-default'),
    ),


    array(
      'id'      => 'default_search',
      'type'    => 'button_set',
      'title'   => esc_html__('Search icon', 'conbix'),
      'options' => array(
        'yes'   => esc_html__('Yes', 'conbix'),
        'no'    => esc_html__('No', 'conbix'),
      ),
      'default' => 'yes',
      'desc'    => esc_html__('Enable or Disable', 'conbix'),
      'dependency' => array('header_layout', '==', 'header-default'),
    ),


  )
));

// Header Options One

CSF::createSection($conbix_theme_option, array(
  'title'  => esc_html__('Header Style 01', 'conbix'),
  'icon'   => 'fas fa-eye',
  'id'     => 'header_style_one',
  'parent' => 'header_options',
  'fields' => array(

    array(
      'type'    => 'subheading',
      'content' => esc_html__('Topbar', 'conbix'),
    ),

    array(
      'id'      => 'enable_top_1',
      'type'    => 'button_set',
      'title'   => esc_html__('Enable Topbar', 'conbix'),
      'options' => array(
        'yes'   => esc_html__('Yes', 'conbix'),
        'no'    => esc_html__('No', 'conbix'),
      ),
      'default' => 'yes',
      'desc'    => esc_html__('Enable or Disable', 'conbix'),
    ),

    array(
      'id'          => 'top_header_one_left',
      'type'        => 'group',
      'max'         => 1,
      'title'       => esc_html__('Tobar Left Content', 'conbix'),
      'fields'      => array(
        array(
          'id'    => 'header_one_left_text',
          'type'  => 'text',
          'title' => esc_html__('Text', 'conbix'),
        ),
        array(
          'id'    => 'header_one_left_url',
          'type'  => 'text',
          'title' => esc_html__('Url', 'conbix'),
        ),
        array(
          'id'    => 'header_one_left_icon',
          'type'  => 'icon',
          'title' => esc_html__('Icon', 'conbix'),
        ),
      ),
      'default'   => array(
        array(
          'header_one_left_icon'  => 'far fa-map-marker-alt',
          'header_one_left_text'  => esc_html__('8502 Preston Rd. Inglewood, Maine 98380', 'conbix'),
          'header_one_left_url'  => esc_attr__('http://google.com/maps', 'conbix'),
        ),
      ),
      'dependency' => array('enable_top_1', '==', 'yes'),
    ),

    array(
      'id'          => 'top_header_one_right',
      'type'        => 'group',
      'max'         => 1,
      'title'       => esc_html__('Tobar Right Content', 'conbix'),
      'fields'      => array(
        array(
          'id'    => 'header_one_right_text',
          'type'  => 'text',
          'title' => esc_html__('Text', 'conbix'),
        ),
        array(
          'id'    => 'header_one_right_url',
          'type'  => 'text',
          'title' => esc_html__('Url', 'conbix'),
        ),
        array(
          'id'    => 'header_one_right_icon',
          'type'  => 'icon',
          'title' => esc_html__('Icon', 'conbix'),
        ),
      ),
      'default'   => array(
        array(
          'header_one_right_icon'  => 'fas fa-envelope',
          'header_one_right_text'  => esc_html__('conbix@gmail.com', 'conbix'),
          'header_one_right_url'  => esc_attr__('mailto:conbix@gmail.com', 'conbix'),
        ),
      ),
      'dependency' => array('enable_top_1', '==', 'yes'),
    ),

    array(
      'id'          => 'top_header_one_social',
      'type'        => 'group',
      'title'       => esc_html__('Social links', 'conbix'),
      'max'         => 5,
      'fields'      => array(
        array(
          'id'    => 'header_one_social_icon',
          'type'  => 'icon',
          'title' => esc_html__('Social Icon', 'conbix'),
        ),
        array(
          'id'    => 'header_one_social_url',
          'type'  => 'text',
          'title' => esc_html__('Social Url', 'conbix'),
        ),
      ),
      'default'   => array(
        array(
          'header_one_social_icon'  => 'fab fa-facebook-f',
          'header_one_social_url'  => 'facebook.com',
        ),
        array(
          'header_one_social_icon'  => 'fab fa-twitter',
          'header_one_social_url'  => 'twitter.com',
        ),
      ),
      'dependency' => array('enable_top_1', '==', 'yes'),
    ),

    array(
      'type'    => 'subheading',
      'content' => esc_html__('Header 01', 'conbix'),
    ),
    array(
      'id'           => 'header_logo_one',
      'type'         => 'media',
      'title'        => esc_html__('Light Logo', 'conbix'),
      'library'      => 'image',
      'url'          => false,
      'button_title' => esc_html__('Upload', 'conbix'),
      'default'   => array(
        'url' => get_theme_file_uri('assets/img/logo-1.png'),
        'thumbnail' => get_theme_file_uri('assets/img/logo-1.png'),
      ),
    ),

    array(
      'id'           => 'header_logo_two',
      'type'         => 'media',
      'title'        => esc_html__('Dark Logo', 'conbix'),
      'library'      => 'image',
      'url'          => false,
      'button_title' => esc_html__('Upload', 'conbix'),
      'default'   => array(
        'url' => get_theme_file_uri('assets/img/logo-2.png'),
        'thumbnail' => get_theme_file_uri('assets/img/logo-2.png'),
      ),
    ),

    array(
      'id'      => 'search_1',
      'type'    => 'button_set',
      'title'   => esc_html__('Search Icon', 'conbix'),
      'options' => array(
        'yes'   => esc_html__('Yes', 'conbix'),
        'no'    => esc_html__('No', 'conbix'),
      ),
      'default' => 'yes',
      'desc'    => esc_html__('Enable or Disable', 'conbix'),
    ),

    array(
      'id'      => 'hamburger_show',
      'type'    => 'button_set',
      'title'   => esc_html__('Hamburger', 'conbix'),
      'options' => array(
        'yes'   => esc_html__('Yes', 'conbix'),
        'no'    => esc_html__('No', 'conbix'),
      ),
      'default' => 'yes',
      'desc'    => esc_html__('Enable or Disable', 'conbix'),
    ),

    array(
      'id'           => 'hamburger_icon',
      'type'         => 'media',
      'title'        => esc_html__('Hamburger Icon', 'conbix'),
      'library'      => 'image',
      'url'          => false,
      'button_title' => esc_html__('Upload', 'conbix'),
      'default'   => array(
        'url' => get_theme_file_uri('assets/img/icon/menu.png'),
        'thumbnail' => get_theme_file_uri('assets/img/icon/menu.png'),
      ),
      'dependency' => array('hamburger_show', '==', 'yes'),
    ),

    array(
      'id'      => 'cta_menu_1',
      'type'    => 'button_set',
      'title'   => esc_html__('CTA Menu', 'conbix'),
      'options' => array(
        'yes'   => esc_html__('Yes', 'conbix'),
        'no'    => esc_html__('No', 'conbix'),
      ),
      'default' => 'yes',
      'desc'    => esc_html__('Enable or Disable', 'conbix'),
    ),

    array(
      'id'      => 'header_one_button_text',
      'type'    => 'text',
      'title'   => esc_html__('Header CTA Text', 'conbix'),
      'default' => esc_html__('Request quote', 'conbix'),
      'dependency' => array('cta_menu_1', '==', 'yes'),
    ),

    array(
      'id'         => 'header_one_button_url',
      'type'       => 'text',
      'title'      => esc_html__('Header CTA URL', 'conbix'),
      'default'    => esc_attr__('#', 'conbix'),
      'dependency' => array('cta_menu_1', '==', 'yes'),
    ),

  )
));

// Header Options Two 

CSF::createSection($conbix_theme_option, array(
  'title'  => esc_html__('Header Style 02', 'conbix'),
  'icon'   => 'fas fa-eye',
  'id'     => 'header_style_two',
  'parent' => 'header_options',
  'fields' => array(

    // Subheading
    array(
      'type'    => 'subheading',
      'content' =>  esc_html__('Topbar', 'conbix'),
    ),

    array(
      'id'      => 'topbar_2',
      'type'    => 'button_set',
      'title'   => esc_html__('Enable Topbar', 'conbix'),
      'options' => array(
        'yes'   => esc_html__('Yes', 'conbix'),
        'no'    => esc_html__('No', 'conbix'),
      ),
      'default' => 'yes',
      'desc'    => esc_html__('Enable or Disable', 'conbix'),
    ),


    array(
      'id'          => 'top_header_two_left',
      'type'        => 'group',
      'max'         => 1,
      'title'       => esc_html__('Tobar Left Content', 'conbix'),
      'fields'      => array(
        array(
          'id'    => 'header_two_left_text',
          'type'  => 'text',
          'title' => esc_html__('Text', 'conbix'),
        ),
        array(
          'id'    => 'header_two_left_url',
          'type'  => 'text',
          'title' => esc_html__('Url', 'conbix'),
        ),
        array(
          'id'    => 'header_two_left_icon',
          'type'  => 'icon',
          'title' => esc_html__('Icon', 'conbix'),
        ),
      ),
      'default'   => array(
        array(
          'header_two_left_icon'  => 'far fa-clock',
          'header_two_left_text'  => esc_html__('Working Hours : Monday - Friday 9: - 5 PM', 'conbix'),
          'header_two_left_url'  => esc_attr__('http://google.com', 'conbix'),
        ),
      ),
      'dependency' => array('topbar_2', '==', 'yes'),
    ),

    array(
      'id'          => 'top_header_two_social',
      'type'        => 'group',
      'title'       => esc_html__('Topbar Right Social', 'conbix'),
      'max'         => 4,
      'fields'      => array(
        array(
          'id'    => 'header_two_social_icon',
          'type'  => 'icon',
          'title' => esc_html__('Social Icon', 'conbix'),
        ),
        array(
          'id'    => 'header_two_social_url',
          'type'  => 'text',
          'title' => esc_html__('Social Url', 'conbix'),
        ),
      ),
      'default'   => array(
        array(
          'header_two_social_icon'  => 'fab fa-facebook-f',
          'header_two_social_url'  => 'facebook.com',
        ),
        array(
          'header_two_social_icon'  => 'fab fa-twitter',
          'header_two_social_url'  => 'twitter.com',
        ),
      ),
      'dependency' => array('topbar_2', '==', 'yes'),
    ),


    array(
      'type'    => 'subheading',
      'content' => esc_html__('Header 02', 'conbix'),
    ),

    array(
      'id'           => 'header_two_logo_desk',
      'type'         => 'media',
      'title'        => esc_html__('Desktop Logo', 'conbix'),
      'library'      => 'image',
      'url'          => false,
      'button_title' => esc_html__('Upload', 'conbix'),
      'default'   => array(
        'url' => get_theme_file_uri('assets/img/logo-3.png'),
        'thumbnail' => get_theme_file_uri('assets/img/logo-3.png'),
      ),
    ),

    array(
      'id'           => 'header_two_logo_one',
      'type'         => 'media',
      'title'        => esc_html__('Mobile Light Logo', 'conbix'),
      'library'      => 'image',
      'url'          => false,
      'button_title' => esc_html__('Upload', 'conbix'),
      'default'   => array(
        'url' => get_theme_file_uri('assets/img/logo-5.png'),
        'thumbnail' => get_theme_file_uri('assets/img/logo-5.png'),
      ),
    ),

    array(
      'id'           => 'header_two_logo_two',
      'type'         => 'media',
      'title'        => esc_html__('Mobile Dark Logo', 'conbix'),
      'library'      => 'image',
      'url'          => false,
      'button_title' => esc_html__('Upload', 'conbix'),
      'default'   => array(
        'url' => get_theme_file_uri('assets/img/logo-4.png'),
        'thumbnail' => get_theme_file_uri('assets/img/logo-4.png'),
      ),
    ),

    array(
      'id'      => 'search_icon_2',
      'type'    => 'button_set',
      'title'   => esc_html__('Enable Search', 'conbix'),
      'options' => array(
        'yes'   => esc_html__('Yes', 'conbix'),
        'no'    => esc_html__('No', 'conbix'),
      ),
      'default' => 'yes',
      'desc'    => esc_html__('Enable or Disable', 'conbix'),
    ),

    array(
      'id'      => 'menu_info2',
      'type'    => 'button_set',
      'title'   => esc_html__('Enable Contact Info', 'conbix'),
      'options' => array(
        'yes'   => esc_html__('Yes', 'conbix'),
        'no'    => esc_html__('No', 'conbix'),
      ),
      'default' => 'yes',
      'desc'    => esc_html__('Enable or Disable', 'conbix'),
    ),

    array(
      'id'          => 'header_two_middle',
      'type'        => 'group',
      'max'         => 1,
      'title'       => esc_html__('Contact Info', 'conbix'),
      'fields'      => array(
        array(
          'id'    => 'header_two_middle_title',
          'type'  => 'text',
          'title' => esc_html__('Title', 'conbix'),
        ),
        array(
          'id'    => 'header_two_middle_text',
          'type'  => 'text',
          'title' => esc_html__('Text', 'conbix'),
        ),
        array(
          'id'    => 'header_two_middle_url',
          'type'  => 'text',
          'title' => esc_html__('Url', 'conbix'),
        ),
        array(
          'id'    => 'header_two_middle_icon',
          'type'  => 'icon',
          'title' => esc_html__('Icon', 'conbix'),
        ),
      ),
      'default'   => array(
        array(
          'header_two_middle_title'  => esc_html__('Need Help', 'conbix'),
          'header_two_middle_icon'  => 'fal fa-envelope-open-text',
          'header_two_middle_text'  => esc_html__('conbix@gmail.com', 'conbix'),
          'header_two_middle_url'  => esc_attr__('mailto:conbix@gmail.com', 'conbix'),
        ),
      ),
      'dependency' => array('menu_info2', '==', 'yes'),
    ),

    array(
      'id'      => 'header_two_button_text',
      'type'    => 'text',
      'title'   => esc_html__('Header CTA Text', 'conbix'),
      'default' => esc_html__('get started', 'conbix'),
    ),

    array(
      'id'         => 'header_two_button_url',
      'type'       => 'text',
      'title'      => esc_html__('Header CTA URL', 'conbix'),
      'default'    => esc_attr__('#', 'conbix'),

    ),



  )
));

// Header Options Three 

CSF::createSection($conbix_theme_option, array(
  'title'  => esc_html__('Header Style 03', 'conbix'),
  'icon'   => 'fas fa-eye',
  'id'     => 'header_style_two',
  'parent' => 'header_options',
  'fields' => array(

    array(
      'type'    => 'subheading',
      'content' => esc_html__('Topbar', 'conbix'),
    ),

    array(
      'id'      => 'topbar_3',
      'type'    => 'button_set',
      'title'   => esc_html__('Enable Topbar', 'conbix'),
      'options' => array(
        'yes'   => esc_html__('Yes', 'conbix'),
        'no'    => esc_html__('No', 'conbix'),
      ),
      'default' => 'yes',
      'desc'    => esc_html__('Enable or Disable', 'conbix'),
    ),

    array(
      'id'          => 'top_header_three_left',
      'type'        => 'group',
      'max'         => 1,
      'title'       => esc_html__('Tobar Left Content', 'conbix'),
      'fields'      => array(
        array(
          'id'    => 'header_three_left_text',
          'type'  => 'text',
          'title' => esc_html__('Text', 'conbix'),
        ),
        array(
          'id'    => 'header_three_left_url',
          'type'  => 'text',
          'title' => esc_html__('Url', 'conbix'),
        ),
        array(
          'id'    => 'header_three_left_icon',
          'type'  => 'icon',
          'title' => esc_html__('Icon', 'conbix'),
        ),
      ),
      'default'   => array(
        array(
          'header_three_left_icon'  => 'fas fa-bell',
          'header_three_left_text'  => esc_html__('We help take your small business the next level.', 'conbix'),
          'header_three_left_url'  => esc_attr__('http://google.com', 'conbix'),
        ),
      ),
      'dependency' => array('topbar_3', '==', 'yes'),
    ),

    array(
      'id'          => 'top_header_three_right',
      'type'        => 'group',
      'max'         => 2,
      'title'       => esc_html__('Tobar Right Content', 'conbix'),
      'fields'      => array(
        array(
          'id'    => 'header_three_right_text',
          'type'  => 'text',
          'title' => esc_html__('Text', 'conbix'),
        ),
        array(
          'id'    => 'header_three_right_url',
          'type'  => 'text',
          'title' => esc_html__('Url', 'conbix'),
        ),
        array(
          'id'    => 'header_three_right_icon',
          'type'  => 'icon',
          'title' => esc_html__('Icon', 'conbix'),
        ),
      ),
      'default'   => array(
        array(
          'header_three_right_icon'  => 'fas fa-phone-alt',
          'header_three_right_text'  => esc_html__('(+107) 555-0133', 'conbix'),
          'header_three_right_url'  => esc_attr__('tel:(+107) 555-0133', 'conbix'),
        ),
        array(
          'header_three_right_icon'  => 'fas fa-envelope',
          'header_three_right_text'  => esc_html__('conbix@gmail.com', 'conbix'),
          'header_three_right_url'  => esc_attr__('mailto:conbix@gmail.com', 'conbix'),
        ),
      ),
      'dependency' => array('topbar_3', '==', 'yes'),
    ),

    array(
      'type'    => 'subheading',
      'content' => esc_html__('Header 03', 'conbix'),
    ),

    array(
      'id'           => 'header_logo_three_one',
      'type'         => 'media',
      'title'        => esc_html__('Light Logo', 'conbix'),
      'library'      => 'image',
      'url'          => false,
      'button_title' => esc_html__('Upload', 'conbix'),
      'default'   => array(
        'url' => get_theme_file_uri('assets/img/logo-6.png'),
        'thumbnail' => get_theme_file_uri('assets/img/logo-6.png'),
      ),
    ),

    array(
      'id'           => 'header_logo_three_two',
      'type'         => 'media',
      'title'        => esc_html__('Dark Logo', 'conbix'),
      'library'      => 'image',
      'url'          => false,
      'button_title' => esc_html__('Upload', 'conbix'),
      'default'   => array(
        'url' => get_theme_file_uri('assets/img/logo-7.png'),
        'thumbnail' => get_theme_file_uri('assets/img/logo-7.png'),
      ),
    ),

    array(
      'id'      => 'search_icon_3',
      'type'    => 'button_set',
      'title'   => esc_html__('Enable Search', 'conbix'),
      'options' => array(
        'yes'   => esc_html__('Yes', 'conbix'),
        'no'    => esc_html__('No', 'conbix'),
      ),
      'default' => 'yes',
      'desc'    => esc_html__('Enable or Disable', 'conbix'),
    ),

    array(
      'id'      => 'menu_cta_3',
      'type'    => 'button_set',
      'title'   => esc_html__('Menu CTA', 'conbix'),
      'options' => array(
        'yes'   => esc_html__('Yes', 'conbix'),
        'no'    => esc_html__('No', 'conbix'),
      ),
      'default' => 'yes',
      'desc'    => esc_html__('Enable or Disable', 'conbix'),
    ),

    array(
      'id'         => 'header_three_button_text',
      'type'       => 'text',
      'title'      => esc_html__('Header CTA Text', 'conbix'),
      'default'    => esc_html__('get started', 'conbix'),
      'dependency' => array('menu_cta_3', '==', 'yes'),
    ),

    array(
      'id'         => 'header_three_button_url',
      'type'       => 'text',
      'title'      => esc_html__('Header CTA URL', 'conbix'),
      'default'    => esc_attr__('#', 'conbix'),
      'dependency' => array('menu_cta_3', '==', 'yes'),

    ),


  )
));
