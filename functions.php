<?php

// Enqueue scripts here
function thedd_enqueued_files()
{
    // Main CSS style for appearance > editor > style.css, enqueue everything below main-css
    wp_enqueue_style('main-css', get_stylesheet_uri());
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
/*
Set up support for Woocommerce. If not needed, feel free to comment out
the following include "includes/template-woocommerce-support.php" to save
on code execution
*/
require_once get_template_directory() .  '/includes/template-woocommerce-support.php';
