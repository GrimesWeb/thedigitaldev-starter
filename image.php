<?php

/**
 * Image template - Only used to redirect image attachment pages to the attachment itself
 * Used for SEO purposes when not using attachment pages
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<?php
 wp_safe_redirect( home_url('/') , 301 );
 exit;
?>