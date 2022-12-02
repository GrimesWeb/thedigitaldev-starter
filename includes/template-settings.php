<?php
/**
 * Add in optional settings to the theme - comment out what is uneeded
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<?php
// Replace the excerpt ellipses with a read more link
function thedd_excerpt_more($more) {
    $more = '<p><a class="moretag" href="'. get_permalink() . '">' . 'Read More' . '</a></p>';
    return $more;
}
add_filter('excerpt_more', 'thedd_excerpt_more');
