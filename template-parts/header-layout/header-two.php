 <?php
    $topbar_2               = conbix_option('topbar_2', true);
    $menu_info2             = conbix_option('menu_info2', true);
    $search_icon_2          = conbix_option('search_icon_2', true);

    $header_two_logo_desk   = conbix_option('header_two_logo_desk');
    $header_logo_one        = conbix_option('header_two_logo_one');
    $header_logo_two        = conbix_option('header_two_logo_two');
    $top_header_two_left    = conbix_option('top_header_two_left');
    $top_header_two_social  = conbix_option('top_header_two_social');
    $header_two_middle      = conbix_option('header_two_middle');

    ?>
 <!-- Header Two Start -->
 <div class="header__two">
     <div class="header__two-topbar">
        <?php if ($topbar_2 == 'yes'): ?>
         <div class="container">
             <div class="row align-items-center borders">
                 <div class="col-xl-6 col-sm-8">
                     <?php if (is_array($top_header_two_left)) : ?>
                         <?php foreach ($top_header_two_left as $top_header_left) : ?>
                             <div class="header__two-topbar-left sm-t-center">
                                 <a href="<?php echo esc_url($top_header_left['header_two_left_url']); ?>">
                                     <i class="<?php echo esc_attr($top_header_left['header_two_left_icon']); ?>"></i>
                                     <?php echo esc_html($top_header_left['header_two_left_text']); ?>
                                 </a>
                             </div>
                         <?php endforeach; ?>
                     <?php endif; ?>
                 </div>
                 <div class="col-xl-6 col-sm-4">
                     <?php if (is_array($top_header_two_social)) : ?>
                         <div class="header__two-topbar-social t-right sm-t-center">
                             <ul>
                                 <?php foreach ($top_header_two_social as $top_header_social) : ?>
                                     <li><a href="<?php echo esc_url($top_header_social['header_two_social_url']); ?>">
                                             <i class="<?php echo esc_attr($top_header_social['header_two_social_icon']); ?>"></i>
                                         </a></li>
                                 <?php endforeach; ?>
                             </ul>
                         </div>
                     <?php endif; ?>
                 </div>
             </div>
         </div>
        <?php endif;?>
     </div>
    
     <div class="auto__container pl-35 pr-35">
         <div class="header__area-menubar two">
             <div class="header__area-menubar-left">
                 <div class="header__area-menubar-left-logo">

                     <?php
                        if (has_custom_logo()) {
                            the_custom_logo();
                        } else {
                            if (!empty($header_two_logo_desk['url']) && !empty($header_logo_two['url']) && !empty($header_logo_one['url'])) { ?>
                             <a href="<?php echo esc_url(home_url('/')); ?>">
                                 <img class="one" src="<?php echo esc_url($header_two_logo_desk['url']); ?>" alt="<?php bloginfo('name'); ?>">
                                 <img class="two" src="<?php echo esc_url($header_logo_one['url']); ?>" alt="<?php bloginfo('name'); ?>">
                                 <img class="light" src="<?php echo esc_url($header_logo_two['url']); ?>" alt="<?php bloginfo('name'); ?>">
                             </a>
                         <?php
                            } else {
                            ?>
                             <a href="<?php echo esc_url(home_url('/')); ?>">
                                 <img class="one" src="<?php echo get_theme_file_uri(); ?>/assets/img/logo-3.png" alt="<?php bloginfo('name'); ?>">
                                 <img class="two" src="<?php echo get_theme_file_uri(); ?>/assets/img/logo-5.png" alt="<?php bloginfo('name'); ?>">
                                 <img class="light" src="<?php echo get_theme_file_uri(); ?>/assets/img/logo-4.png" alt="<?php bloginfo('name'); ?>">
                             </a>
                     <?php
                            }
                        }
                        ?>
                 </div>
             </div>
             <div class="header__area-menubar-center two">
                 <div class="header__area-menubar-center-menu two menu-responsive">
                     <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'header-menu',
                                'menu_id' => 'mobilemenu',
                            )
                        );
                        ?>
                 </div>
             </div>
             <div class="header__area-menubar-right">
                 <div class="header__area-menubar-right-box">
                 <?php if ($search_icon_2 == 'yes'): ?>
                     <div class="header__area-menubar-right-box-search">
                         <div class="search">
                             <span class="header__area-menubar-right-box-search-icon open"><i class="fal fa-search"></i></span>
                         </div>
                         <div class="header__area-menubar-right-box-search-box">
                             <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
                                 <input type="search" placeholder="<?php echo esc_attr('Search Here.....', 'conbix'); ?>" value="<?php the_search_query(); ?>" name="s">
                                 <button value="Search" type="submit"><i class="fal fa-search"></i>
                                 </button>
                             </form>
                             <span class="header__area-menubar-right-box-search-box-icon"><i class="fal fa-times"></i></span>
                         </div>
                     </div>
                     <?php endif;?>
                     <?php if (is_array($header_two_middle) && ($menu_info2 == 'yes')) : ?>
                         <?php foreach ($header_two_middle as $header_two_middl) : ?>
                             <div class="header__area-menubar-right-box-contact">
                                 <div class="header__area-menubar-right-box-contact-icon">
                                     <i class="<?php echo esc_attr($header_two_middl['header_two_middle_icon']); ?>"></i>
                                 </div>
                                 <div class="header__area-menubar-right-box-contact-info">
                                     <span class="text-four"><?php echo esc_html($header_two_middl['header_two_middle_title']); ?></span>
                                     <h6><a href="<?php echo esc_url($header_two_middl['header_two_middle_url']); ?>"><?php echo esc_html($header_two_middl['header_two_middle_text']); ?></a></h6>
                                 </div>
                             </div>
                         <?php endforeach; ?>
                     <?php endif; ?>
                 </div>
                 <div class="responsive-menu"></div>
             </div>
             <div class="header__area-menubar-right-btn">
                 <a class="btn-six" href="<?php echo esc_url(conbix_option('header_two_button_url')); ?>"><?php echo esc_html(conbix_option('header_two_button_text')); ?><i class="far fa-chevron-double-right"></i></a>
             </div>
         </div>
     </div>
 </div>
 <!-- Header Two End -->