<?php
// breadcrumb remove 
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
// custom related products
function limit_related_products_number( $args ) {
    $args['posts_per_page'] = 4;
    return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'limit_related_products_number' );
// shop/archive post per page 
function change_products_per_page( $products_per_page ) {
    return 8;
}
add_filter( 'loop_shop_per_page', 'change_products_per_page', 20 );