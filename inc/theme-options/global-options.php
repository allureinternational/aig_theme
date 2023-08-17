<?php
CSF::createSection($conbix_theme_option, array(
    'title'  => esc_html__('Global Settings', 'conbix'),
    'icon'   => 'far fa-circle',
    'id'     => 'global_settings',
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
            'desc'    => esc_html__('Enable or Disable', 'conbix'),
        ),

        array(
            'id'      => 'preloader',
            'type'    => 'button_set',
            'title'   => esc_html__('Preloader', 'conbix'),
            'options' => array(
                'yes'   => esc_html__('Yes', 'conbix'),
                'no'    => esc_html__('No', 'conbix'),
            ),
            'default' => 'no',
            'desc'    => esc_html__('Enable or Disable', 'conbix'),
        ),

        array(
            'id'          => 'preloader_bg',
            'type'        => 'color',
            'title'       => esc_html__('Preloader Background', 'conbix'),
            'desc'        => esc_html__('Select a Background', 'conbix'),
            'output'      => '.theme-loader',
            'output_mode' => 'background-color',
            'dependency'  => array('preloader', '==', 'yes') // 
        ),

        array(
            'id'      => 'sticky_header',
            'type'    => 'button_set',
            'title'   => esc_html__('Sticky Menu', 'conbix'),
            'options' => array(
                'yes'   => esc_html__('Yes', 'conbix'),
                'no'    => esc_html__('No', 'conbix'),
            ),
            'default' => 'no',
            'desc'    => esc_html__('Enable or Disable', 'conbix'),
        ),

        array(
            'id'      => 'theme_scroll_up',
            'type'    => 'button_set',
            'title'   => esc_html__('Scroll Up', 'conbix'),
            'options' => array(
                'yes'   => esc_html__('Yes', 'conbix'),
                'no'    => esc_html__('No', 'conbix'),
            ),
            'default' => 'no',
            'desc'    => esc_html__('Enable or Disable', 'conbix'),
        ),

    )
));
