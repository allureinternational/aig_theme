<?php
$copyright  = conbix_option('footer_copyright');
$footer_cta = conbix_option('footer_two_cta');
$footer_form = conbix_option('footer_two_cta_form');

if ($footer_cta ==  'yes') {
	$enable_cta  = 'padding-top-none';
} else {
	$enable_cta  = 'pt-100';
}
$conbix_htmls = array(
	'a'      => array(
		'href'   => array(),
		'target' => array()
	),
	'strong' => array(),
	'small'  => array(),
	'span'   => array(),
	'p'      => array(),
);
?>

<div class="footer__two <?php echo esc_attr($enable_cta); ?>" data-background="<?php echo get_theme_file_uri(); ?>/assets/img/shape/footer-bg-1.png">
	<?php if ($footer_cta == 'yes') : ?>
		<!-- Subscribe Area Start -->
		<div class="subscribe__area">
			<div class="container">
				<div class="row align-items-center subscribe__area-bg">
					<div class="col-xl-5 col-lg-5 lg-mb-40">
						<div class="subscribe__area-left">
							<h2><?php echo esc_html(conbix_option('footer_two_cta_title')); ?></h2>
							<div class="subscribe__area-left-notification">
								<h6><?php echo esc_html(conbix_option('footer_two_cta_sub')); ?></h6>
								<div class="subscribe__area-left-notification-icon icon-animation video-pulse">
									<i class="<?php echo esc_attr(conbix_option('footer_two_cta_icon')); ?>"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-7 col-lg-7">
						<?php if (!empty($footer_form)) : ?>
							<div class="subscribe__area-form">
								<?php echo do_shortcode('[contact-form-7 id="' . $footer_form . '" ]'); ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Subscribe Area End -->
	<?php endif; ?>
	<?php if (is_active_sidebar('footer-22')) : ?>
		<?php dynamic_sidebar('footer-22'); ?>
	<?php endif; ?>
	<div class="copyright__two">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<?php echo wp_kses($copyright, $conbix_htmls); ?>
				</div>
			</div>
		</div>
	</div>
</div>