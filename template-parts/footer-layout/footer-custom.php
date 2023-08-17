<?php
if (is_page() || is_singular('post') && get_post_meta($post->ID, 'conbix_meta_options', true)) {
    $conbix_meta = get_post_meta($post->ID, 'conbix_meta_options', true);
} else {
    $conbix_meta = array();
}
if (is_array($conbix_meta) && array_key_exists('meta_footer_stlye', $conbix_meta) && array_key_exists('conbix_builder_deta', $conbix_meta) && $conbix_meta['meta_footer_layout'] != 'no') {
    $conbix_builder = $conbix_meta['conbix_builder_deta'];
} else {
    $conbix_builder = conbix_option('conbix_builder_deta');
}

if (true == post_type_exists('conbix_builder')):
    $footer_args = array(
        'p' => $conbix_builder,
        'post_type' => 'conbix_builder',
    );
    $footer_has_style = new WP_Query($footer_args);
    if ($footer_has_style->have_posts()):
        while ($footer_has_style->have_posts()):
            $footer_has_style->the_post(); ?>
            <div class="conbix-builder-footer">
                <?php the_content(); ?>
            </div>
        <?php endwhile;
        wp_reset_postdata();

    endif;

endif;
?>