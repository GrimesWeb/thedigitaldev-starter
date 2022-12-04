<?php

// Enqueue scripts here
function thedd_enqueued_files()
{
    /*
    * CSS
    */
    // Main CSS style for appearance > editor > style.css, enqueue everything below main-css
    wp_enqueue_style('default-css', get_stylesheet_uri());
    // Get main css stylesheet generated from SASS folder
    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/assets/css/main.css', [], filemtime(get_stylesheet_directory() . '/assets/css/main.css'), false );

     /*
    * JS
    */
    // Enqueue theme js files here
    wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri() . '/assets/js/theme.js', ['jquery'], filemtime(get_stylesheet_directory() . '/assets/js/theme.js'), true );
}
add_action('wp_enqueue_scripts', 'thedd_enqueued_files');
/***** NOTHING SNIPPETS BELOW HERE - ONLY INCLUDES *****/

/*
- Add all additional functions in seperate files in include folder to keep everything organized.
- If creating a new file, be sure to include it here.
- Don't need to use () since it's a construct and not a function - allowed
- Use template_directory since this will be used as a standalone or parent theme
*/

// Site Setup
require_once get_template_directory() .  '/includes/template-setup.php';
// Template Functions
require_once get_template_directory() .  '/includes/template-functions.php';
// Template Settings
require_once get_template_directory() .  '/includes/template-settings.php';
/*
Set up support for Woocommerce. If not needed, feel free to comment out
the following include "includes/template-woocommerce-setup.php" to save
on code execution
*/
require_once get_template_directory() .  '/includes/template-woocommerce-setup.php';
