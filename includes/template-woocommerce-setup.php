<?php

/**
 * Theme Woocommerce compatibility setup
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<?php
/*
    Add support for WC features
    */
function thdd_theme_wc_support()
{
    // Add Woocommerce Support for WC features
    add_theme_support('woocommerce', [
        'thumbnail_image_width' => 150,
        'single_image_width'    => 300,
        'product_grid'          => [
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 6,
        ],
    ]);
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'thdd_theme_wc_support');

/*
FILTERS
*/

// Remove WC Default styles
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
