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

<h1><?php the_archive_title(); ?></h1>

<?php
if (have_posts()) : while (have_posts()) : the_post();
?>

        <?php get_template_part('template-parts/content', 'archives'); ?>

    <?php endwhile; else : ?>

    <?php get_template_part('template-parts/content', 'none'); ?>

<?php endif; ?>

<!-- Nothing below here, edit footer content in footer.php -->
<?php get_footer(); ?>