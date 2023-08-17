<?php

CSF::createSection($conbix_theme_option, array(
    'title'  => esc_html__('Theme Colors', 'conbix'),
    'icon'   => 'fas fa-palette',
    'id'     => 'theme_color_settings',
    'fields' => array(
        array(
            'id'    => 'primary_color_1',
            'type'  => 'color',
            'title' => esc_html__('Primary Color 1', 'conbix'),
            'output' => ':root',
            'output_mode' => '--primary-color-1',
            'default' => '#F94C30'
        ),

        array(
            'id'    => 'primary_color_2',
            'type'  => 'color',
            'title' => esc_html__('Primary Color 2', 'conbix'),
            'output' => ':root',
            'output_mode' => '--primary-color-2',
            'default' => '#FCA028'
        ),

        array(
            'id'    => 'primary_color_3',
            'type'  => 'color',
            'title' => esc_html__('Primary Color 3', 'conbix'),
            'output' => ':root',
            'output_mode' => '--primary-color-3',
            'default' => '#406AFF'
        ),
    )
));
