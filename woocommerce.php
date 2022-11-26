<?php
/**
 * Index template - used for blog page content
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<?php get_header(); ?>
<!-- Nothing above here - edit header content in header.php -->

<?php woocommerce_content(); ?>

<!-- Nothing below here, edit footer content in footer.php -->
<?php get_footer(); ?>