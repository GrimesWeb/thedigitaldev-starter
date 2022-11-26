<?php
/**
 * Add in some additional functional code to the website
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<?php

// Add custom body classes to the body tag
function thedd_add_classes($classes) {

    if( ! is_active_sidebar('left-sidebar') || ! is_active_sidebar( 'right-sidebar' ) ) {
        $classes[] = 'no-sidebar';
    };

    if( is_front_page() ) {
        $classes[] = 'is-front-page';
    };

    return $classes;
}
add_filter('body_class', 'thedd_add_classes');