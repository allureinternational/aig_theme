<?php
$copyright = conbix_option('footer_copyright');
$footer_cta = conbix_option('footer_one_cta');
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
	<div class="footer__top">
		<img class="footer__top-shape" src="<?php echo get_theme_file_uri(); ?>/assets/img/shape/footer.png" alt="">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-7 col-lg-8 lg-mb-30">
					<div class="footer__top-title lg-t-center">
						<h2><?php echo esc_html(conbix_option('footer_one_content')); ?></h2>
					</div>
				</div>
				<div class="col-xl-5 col-lg-4">
					<div class="footer__top-btn t-right lg-t-center">
						<a class="btn-two" href="<?php echo esc_url(conbix_option('footer_on_button_url')); ?>"><?php echo esc_html(conbix_option('footer_one_button_text')); ?><i class="far fa-chevron-double-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
<div class="footer__one">
	<img class="footer__one-shape" src="<?php echo get_theme_file_uri(); ?>/assets/img/shape/footer-bg.png" alt="">
	<?php if (is_active_sidebar('footer-11')) : ?>
		<?php dynamic_sidebar('footer-11'); ?>
	<?php endif; ?>
	<div class="copyright__one">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<?php echo wp_kses($copyright, $conbix_htmls); ?>
				</div>
			</div>
		</div>
	</div>
</div>