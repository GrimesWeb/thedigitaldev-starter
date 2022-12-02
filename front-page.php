<?php
/**
 * Front Page template - used for the homepage
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>

<?php get_header(); ?>
<!-- Nothing above here - edit header content in header.php -->

<?php
// Pull in sidebar if in use
get_sidebar();
?>


<!-- Nothing below here, edit footer content in footer.php -->
<?php get_footer(); ?>