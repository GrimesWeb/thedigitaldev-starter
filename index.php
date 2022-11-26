<?php
/**
 * Index template - used as blog page template
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<?php get_header(); ?>
<!-- Nothing above here - edit header content in header.php -->

Index Template

<?php
if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content'); ?>

    <?php endwhile; ?>
<?php else : ?>
    <?php get_template_part('template-parts/content', 'none'); ?>
<?php endif; ?>

<!-- Nothing below here, edit footer content in footer.php -->
<?php get_footer(); ?>