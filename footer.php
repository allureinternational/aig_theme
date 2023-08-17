<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package conbix
 */

if (is_page() || is_singular('post') && get_post_meta($post->ID, 'conbix_meta_options', true)) {
    $conbix_meta = get_post_meta($post->ID, 'conbix_meta_options', true);
} else {
    $conbix_meta = array();
}
$footer_custom = conbix_option('footer_layout_style');
if (is_array($conbix_meta) && array_key_exists('meta_footer_stlye', $conbix_meta) && $conbix_meta['meta_footer_layout'] != 'no') {
    $footer_layout = $conbix_meta['meta_footer_stlye'];
} else if (!empty($footer_custom) && class_exists('CSF')) {
    $footer_layout = conbix_option('footer_layout_style');
} else {
    $footer_layout = 'footer-default';
}
?>


<?php get_template_part('template-parts/footer-layout/' .  $footer_layout . ''); ?>


<?php get_template_part('template-parts/default-options/' . 'scroll-up'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>