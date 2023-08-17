<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package conbix
 */
$error_page_btn = conbix_option('error_page_btn', true);
$error_light    = conbix_option('404_light');
$error_dark     = conbix_option('404_dark');

get_header();
get_template_part('template-parts/default-options/' . 'breadcrumb');
?>

<div class="error section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="error-page">
					<?php if (!empty($error_light['url']) && !empty($error_dark['url'])) { ?>
						<img class="dark-n" src="<?php echo esc_url($error_light['url']); ?>" alt="<?php echo esc_attr('404') ?>">
						<img class="light-n" src="<?php echo esc_url($error_dark['url']); ?>" alt="<?php echo esc_attr('404') ?>">
					<?php
					} else {
					?>
						<img class="dark-n" src="<?php echo get_theme_file_uri(); ?>/assets/img/pages/404.png" alt="<?php echo esc_attr('404') ?>">
						<img class="light-n" src="<?php echo get_theme_file_uri(); ?>/assets/img/pages/404-dark.png" alt="<?php echo esc_attr('404') ?>">
					<?php	} ?>
					<h2><?php echo esc_html(conbix_option('error_page_title')); ?></h2>
					<p><?php echo esc_html(conbix_option('error_page_content')); ?></p>
					<?php if ($error_page_btn  == 'yes') : ?>
						<a class="btn-one" href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html(conbix_option('error_page_btn_text')); ?><i class="far fa-chevron-double-right"></i></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
