<?php
$copyright = conbix_option('footer_copyright');
$enable_widget = conbix_option('footer_widget');
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

<?php if (is_active_sidebar('footer-1') && $enable_widget !== 'no') : ?>
	<div class="theme__footer">
		<div class="container">
			<div class="row">
				<?php dynamic_sidebar('footer-1'); ?>
			</div>
		</div>
	</div>
<?php endif; ?>



<div class="copyright_bottom">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<?php echo wp_kses($copyright, $conbix_htmls); ?>
			</div>
		</div>
	</div>
</div>