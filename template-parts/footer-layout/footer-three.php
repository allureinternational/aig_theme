<?php
$copyright = conbix_option('footer_copyright');
$footer_cta = conbix_option('footer_three_cta');
$footer_form = conbix_option('footer_three_cta_form');
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
<?php if ($footer_cta == 'yes') : ?>
	<!-- Subscribe Area Start -->
	<div class="subscribe">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6">
					<div class="subscribe-title">
						<h2><?php echo esc_html(conbix_option('footer_three_cta_title')); ?></h2>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<?php if (!empty($footer_form)) : ?>
						<div class="subscribe-form">
							<?php echo do_shortcode('[contact-form-7 id="' . $footer_form . '" ]'); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Subscribe Area End -->
<?php endif; ?>
<!-- Footer One Area Start -->
<div class="footer__three">
	<img class="footer__three-shape" src="<?php echo get_theme_file_uri(); ?>/assets/img/shape/footer-bg-2.png" alt="">
	<?php if (is_active_sidebar('footer-33')) : ?>
		<?php dynamic_sidebar('footer-33'); ?>
	<?php endif; ?>
	<div class="copyright__three">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<?php echo wp_kses($copyright, $conbix_htmls); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Footer One Area End -->