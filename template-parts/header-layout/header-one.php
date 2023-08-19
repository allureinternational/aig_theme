<?php
$enable_topbar = conbix_option('enable_top_1', true);
$search_icon = conbix_option('search_1', true);
$hamburger_show = conbix_option('hamburger_show', true);
$cta_menu = conbix_option('cta_menu_1', true);
$header_logo_one = conbix_option('header_logo_one');
$header_logo_two = conbix_option('header_logo_two');
$hamburger_icon = conbix_option('hamburger_icon');
$sticky_header = conbix_option('sticky_header');
$top_header_one_left = conbix_option('top_header_one_left');
$top_header_one_right = conbix_option('top_header_one_right');
$top_header_one_social = conbix_option('top_header_one_social');

if ($sticky_header == 'yes') {
	$sticky_enable = 'header__sticky';
} else {
	$sticky_enable = 'disable_sticky_header';
}
?>
<?php if ($enable_topbar == 'yes'): ?>
	<!-- Top Bar Start -->
	<!-- <div class="top__bar">
		<div class="container custom__container">
			<div class="row">
				<div class="col-xl-5 col-md-6">
					<div class="top__bar-left">
						<?php if (is_array($top_header_one_left)): ?>
							<?php foreach ($top_header_one_left as $top_header_left): ?>
								<a href="<?php echo esc_url($top_header_left['header_one_left_url']); ?>">
									<i class="<?php echo esc_attr($top_header_left['header_one_left_icon']); ?>"></i>
									<?php echo esc_html($top_header_left['header_one_left_text']); ?>
								</a>
							<?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-xl-7 col-md-6">
					<div class="top__bar-right">
						<?php if (is_array($top_header_one_right)): ?>
							<?php foreach ($top_header_one_right as $top_header_right): ?>
								<a href="<?php echo esc_url($top_header_right['header_one_right_url']); ?>">
									<i class="<?php echo esc_attr($top_header_right['header_one_right_icon']); ?>"></i>
									<?php echo esc_html($top_header_right['header_one_right_text']); ?>
								</a>
							<?php endforeach; ?>
						<?php endif; ?>
						<div class="top__bar-right-social">
							<?php if (is_array($top_header_one_social)): ?>
								<ul>
									<?php foreach ($top_header_one_social as $top_header_social): ?>
										<li><a href="<?php echo esc_url($top_header_social['header_one_social_url']); ?>">
												<i
													class="<?php echo esc_attr($top_header_social['header_one_social_icon']); ?>"></i>
											</a></li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- Top Bar End -->
<?php endif; ?>
<!-- Header Area Start -->
<!-- <div class="header__area <?php echo esc_attr($sticky_enable); ?>">
	<div class="container custom__container">
		<div class="header__area-menubar">
			<!-- <div class="header__area-menubar-left">
				<div class="header__area-menubar-left-logo">
					<?php
					//if (has_custom_logo()) {
						//the_custom_logo();
					//} else {
						//if (!empty($header_logo_one['url']) && !empty($header_logo_two['url'])) { ?>
							<a href="<?php //echo esc_url(home_url('/')); ?>">
								<img class="dark-n" src="<?php //echo esc_url($header_logo_one['url']); ?>"
									alt="<?php //bloginfo('name'); ?>">
								<img class="light-n" src="<?php //echo esc_url($header_logo_two['url']); ?>"
									alt="<?php //bloginfo('name'); ?>">
							</a>
							<?php
						//} else {
							?>
							<a href="<?php //echo esc_url(home_url('/')); ?>">
								<img class="dark-n" src="<?php //echo get_theme_file_uri(); ?>/assets/img/logo-1.png"
									alt="<?php //bloginfo('name'); ?>">
								<img class="light-n" src="<?php //echo get_theme_file_uri(); ?>/assets/img/logo-2.png"
									alt="<?php //bloginfo('name'); ?>">
							</a>
							<?php
						//}
					//}
					?>
				</div>
			</div> -->
			<!-- <?php if (has_nav_menu('header-menu')): ?>
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
			<?php endif; ?> -->
					<!-- sidebar Menu Start -->
					<!-- <div class="header__area-menubar-right-sidebar-popup">
						<div class="sidebar-close-btn"><i class="fal fa-times"></i></div>
						<?php dynamic_sidebar('hamburger-menu'); ?>
					</div>
					<div class="sidebar-overlay"></div>-->
					<!-- sidebar Menu Start -->
				<!-- </div>
				<div class="responsive-menu"></div>
			</div>
		</div>
	</div>
</div> -->
<!-- Header Area End -->