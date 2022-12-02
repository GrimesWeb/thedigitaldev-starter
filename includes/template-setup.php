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
    */
}
add_action('after_setup_theme', 'thdd_theme_support');

// Register Menu Locations

if (function_exists('register_nav_menus')) {
    register_nav_menus([
        'header-menu' => esc_html__('Header Menu', 'thedd'),
        //'footer-menu' => esc_html__( 'Footer Menu', 'thedd' )
    ]);
}

// Setup Widget Areas
if (function_exists('register_sidebar')) {
    function thedd_widget_init() {
        register_sidebar([
            'name' => esc_html__('Main Sidebar', 'thedd'),
            'id' => 'main-sidebar',
            'description' => esc_html__('Add widgets for main sidebar here', 'thedd'),
            'before_widget' => '<div class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ]);
        register_sidebar([
            'name' => esc_html__('Page Sidebar', 'thedd'),
            'id' => 'page-sidebar',
            'description' => esc_html__('Add widgets for page sidebar here', 'thedd'),
            'before_widget' => '<div class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ]);
        register_sidebar([
            'name' => esc_html__('Post Sidebar', 'thedd'),
            'id' => 'post-sidebar',
            'description' => esc_html__('Add widgets for post sidebar here', 'thedd'),
            'before_widget' => '<div class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ]);
    };
}
add_action('widgets_init', 'thedd_widget_init');
