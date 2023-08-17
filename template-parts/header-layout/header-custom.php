<?php
if (is_page() || is_singular('post') && get_post_meta($post->ID, 'conbix_meta_options', true)) {
    $conbix_meta = get_post_meta($post->ID, 'conbix_meta_options', true);
} else {
    $conbix_meta = array();
}
if (is_array($conbix_meta) && array_key_exists('meta_header_stlye', $conbix_meta) && array_key_exists('conbix_builder_id', $conbix_meta) && $conbix_meta['meta_header_layout'] != 'no') {
    $conbix_builder = $conbix_meta['conbix_builder_id'];
} else {
    $conbix_builder = conbix_option('conbix_builder_id');
}

if (true == post_type_exists('conbix_builder')):
    $header_args = array(
        'p' => $conbix_builder,
        'post_type' => 'conbix_builder',
    );
    $header_has_style = new WP_Query($header_args);
    if ($header_has_style->have_posts()):
        while ($header_has_style->have_posts()):
            $header_has_style->the_post(); ?>
            <div class="conbix-builder-header">
                <?php the_content(); ?>
            </div>
        <?php endwhile;
        wp_reset_postdata();
    endif;
endif;
?>