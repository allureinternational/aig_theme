<?php
$site_logo      = conbix_option('default_logo');
$site_logo_2    = conbix_option('default_logo_2');
$default_search = conbix_option('default_search', true);
$sticky_header  = conbix_option('sticky_header', false);

if ($sticky_header ==  'yes') {
    $sticky_enable  = 'header__sticky';
} else {
    $sticky_enable  = 'disable_sticky_header';
}
?>

<!-- Header Area Start -->
<div class="header__area default_header  <?php echo esc_attr($sticky_enable); ?>">
    <div class="container">
        <div class="header__area-menubar">
            <div class="header__area-menubar-left">
                <div class="header__area-menubar-left-logo">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        if (!empty($site_logo['url']) && !empty($site_logo_2['url'])) { ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <img class="dark-n" src="<?php echo esc_url($site_logo['url']); ?>" alt="<?php bloginfo('name'); ?>">
                                <img class="light-n" src="<?php echo esc_url($site_logo_2['url']); ?>" alt="<?php bloginfo('name'); ?>">
                            </a>
                        <?php
                        } else {
                        ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <img class="dark-n" src="<?php echo get_theme_file_uri(); ?>/assets/img/logo-1.png" alt="<?php bloginfo('name'); ?>">
                                <img class="light-n" src="<?php echo get_theme_file_uri(); ?>/assets/img/logo-2.png" alt="<?php bloginfo('name'); ?>">
                            </a>
                    <?php
                        }
                    }
                    ?>

                </div>
            </div>
            <?php if (has_nav_menu('header-menu')) : ?>
                <div class="header__area-menubar-center">
                    <div class="header__area-menubar-center-menu menu-responsive">

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
            <?php endif; ?>
            <?php if ($default_search == 'yes') : ?>
            <div class="header__area-menubar-right">
                <div class="header__area-menubar-right-box">
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
                </div>
                <div class="responsive-menu"></div>
            </div>
            <?php endif;?>
        </div>
    </div>
</div>
<!-- Header Area End -->