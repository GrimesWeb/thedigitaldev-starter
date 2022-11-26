<?php
/**
 * Add in some additional functional code to the website
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<?php

// Register Theme Support
function thdd_theme_support()
{
    // Output HTML5 code
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'navigation-widgets',
        'search-form',
        'script',
        'style',
    ]);
    // Needed to add title to head of document - do not manually add title tag
    add_theme_support('title-tag');
    // Feed Links
    add_theme_support('automatic-feed-links');
    // Featured Images
    add_theme_support('post-thumbnails');
    // Refresh Widgets
    add_theme_support('customize-selective-refresh-widgets');
    // Custom Background
    /*
    $thedd_bg_args = [
        'default-image'          => '',
        'default-preset'         => 'default',
        'default-size'           => 'cover',
        'default-repeat'         => 'no-repeat',
        //'default-attachment'     => 'scroll',
    ];
    add_theme_support( 'custom-background', $thedd_bg_args );
    */
    // Custom Header
    /*
    $thedd_header_args = [
        'default-image'          => '',
        'width'                  => '##',
        'height'                 => '##',
        'flex-height'            => true,
        'flex-width'             => true,
        'default-text-color'     => '',
        'header-text'            => true,
        'uploads'                => true,
    ];
    add_theme_support( 'custom-header', $thedd_header_args );
    */
    // Custom Logo
    /*
    $thedd_logo_args = [
        'height'      => '##',
        'width'       => '##',
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    ];
    add_theme_support('custom-logo', $thedd_logo_args);
    *//*
    Add support for WC features
    */

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
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action('after_setup_theme', 'thdd_theme_support');

/*
FILTERS
*/

// Remove WC Default styles
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );