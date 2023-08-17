<?php

/* Template Name: Full Width - Theme */

get_header();

if (get_post_meta($post->ID, 'conbix_meta_options', true)) {
    $conbix_meta = get_post_meta($post->ID, 'conbix_meta_options', true);
} else {
    $conbix_meta = array();
}

if (array_key_exists('breadcrumb_enable', $conbix_meta)) {
    $enable_banner = $conbix_meta['breadcrumb_enable'];
} else {
    $enable_banner = 'yes';
}

if (array_key_exists('section_padding', $conbix_meta)) {
    $section_padding = $conbix_meta['section_padding'];
} else {
    $section_padding = 'section-padding';
}
?>

<main id="primary" class="site-main">
    <?php
    if ($enable_banner == 'yes'):
        get_template_part('template-parts/default-options/' . 'breadcrumb');
    endif;
    ?>
    <div class="<?php echo esc_attr($section_padding); ?>">
        <div class="full-width">
            <?php the_content(); ?>
        </div>
    </div>
</main><!-- #main -->

<?php

get_footer();