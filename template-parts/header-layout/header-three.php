<?php
$topbar_3         = conbix_option('topbar_3', true);
$search_icon_3    = conbix_option('search_icon_3', true);
$menu_cta_3       = conbix_option('menu_cta_3', true);

$header_logo_one    = conbix_option('header_logo_three_one');
$header_logo_two    = conbix_option('header_logo_three_two');
$top_header_lefts   = conbix_option('top_header_three_left');
$top_header_rights  = conbix_option('top_header_three_right');
$sticky_header      = conbix_option('sticky_header');

if ($sticky_header ==  'yes') {
	$sticky_enable  = 'header__sticky';
} else {
	$sticky_enable  = 'disable_sticky_header';
}
?>
<!-- Header Area Start -->
<div class="header__three">
	<!-- Top Bar Start -->
	<?php if ($topbar_3 == 'yes'): ?>
	<div class="topbar__three">
		<div class="container">
			<div class="row">
				<div class="col-xl-5 col-lg-6">
					<?php if (is_array($top_header_lefts)) : ?>
						<?php foreach ($top_header_lefts as $top_header_left) : ?>
							<div class="topbar__three-left lg-t-center">
								<a href="<?php echo esc_url($top_header_left['header_three_left_url']); ?>">
									<i class="<?php echo esc_attr($top_header_left['header_three_left_icon']); ?> icon-animation"></i>
									<?php echo esc_html($top_header_left['header_three_left_text']); ?>
								</a>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
				<div class="col-xl-7 col-lg-6">
					<?php if (is_array($top_header_rights)) : ?>
						<div class="topbar__three-right t-right lg-t-center">
							<ul>
								<?php foreach ($top_header_rights as $top_header_right) : ?>
									<li><a href="<?php echo esc_url($top_header_right['header_three_right_url']); ?>"><i class="<?php echo esc_attr($top_header_right['header_three_right_icon']); ?>"></i><?php echo esc_html($top_header_right['header_three_right_text']); ?></a></li>
								<?php endforeach; ?>
							</ul>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<?php endif;?>
	<!-- Top Bar End -->
	<!-- Menu Bar Area Start -->
	<div class="header__area <?php echo esc_attr($sticky_enable); ?>">
		<div class="container">
			<div class="header__area-menubar three">
				<div class="header__area-menubar-left">
					<div class="header__area-menubar-left-logo">
						<?php
						if (has_custom_logo()) {
							the_custom_logo();
						} else {
							if (!empty($header_logo_one['url']) && !empty($header_logo_two['url'])) { ?>
								<a href="<?php echo esc_url(home_url('/')); ?>">
									<img class="dark-n" src="<?php echo esc_url($header_logo_one['url']); ?>" alt="<?php bloginfo('name'); ?>">
									<img class="light-n" src="<?php echo esc_url($header_logo_two['url']); ?>" alt="<?php bloginfo('name'); ?>">
								</a>
							<?php
							} else {
							?>
								<a href="<?php echo esc_url(home_url('/')); ?>">
									<img class="dark-n" src="<?php echo get_theme_file_uri(); ?>/assets/img/logo-6.png" alt="<?php bloginfo('name'); ?>">
									<img class="light-n" src="<?php echo get_theme_file_uri(); ?>/assets/img/logo-7.png" alt="<?php bloginfo('name'); ?>">
								</a>
						<?php
							}
						}
						?>
					</div>
				</div>
				<div class="header__area-menubar-center">
					<div class="header__area-menubar-center-menu three menu-responsive">
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
					    <?php if ($search_icon_3 == 'yes'): ?>
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
						<?php if ($menu_cta_3 == 'yes'): ?>
						<div class="header__area-menubar-right-box-btn">
							<a class="btn-seven" href="<?php echo esc_url(conbix_option('header_three_button_url')); ?>"><?php echo esc_html(conbix_option('header_three_button_text')); ?><i class="far fa-chevron-double-right"></i></a>
						</div>
						<?php endif;?>
					</div>
					<div class="responsive-menu"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- Menu Bar Area End -->
</div>
<!-- Header Area End -->