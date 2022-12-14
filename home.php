<?php

/**
 * Home template - Used as Blog page template
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<?php get_header(); ?>
<!-- Nothing above here - edit header content in header.php -->

<h1><?php wp_title(' '); ?></h1>

<?php
if (have_posts()) : while (have_posts()) : the_post();
?>

        <?php get_template_part('template-parts/content', 'posts'); ?>

    <?php endwhile; else : ?>

    <?php get_template_part('template-parts/content', 'none'); ?>

<?php endif; ?>

<?php
    // Output pagination on posts page
    echo paginate_links();
?>

<?php
// Pull in posts sidebar if wanted
get_sidebar('posts');
?>

<!-- Nothing below here, edit footer content in footer.php -->
<?php get_footer(); ?>