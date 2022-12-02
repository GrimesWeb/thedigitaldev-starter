<?php
/**
 * Single post Template File - Used for single posts
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<?php get_header(); ?>
<!-- Nothing above here - edit header content in header.php -->

<?php
if (have_posts()) : while (have_posts()) : the_post();
?>

        <?php get_template_part('template-parts/content'); ?>

    <?php endwhile; else : ?>

    <?php get_template_part('template-parts/content', 'none'); ?>

<?php endif; ?>

<?php
// Pull in sidebar if one is used
get_sidebar('posts');
?>

<!-- Nothing below here, edit footer content in footer.php -->
<?php get_footer(); ?>