<?php

/**
 * Archive Template - Used for archive pages (Cats, CPT's, etc)
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<?php get_header(); ?>
<!-- Nothing above here - edit header content in header.php -->

Archive Template

<?php
if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php
        the_archive_title('<h1 class="page-title">', '</h1>');
        ?>

        <?php get_template_part('template-parts/content', get_post_type()); ?>

    <?php endwhile; ?>

    <!-- Display the posts navigation -->
    <?php
    the_posts_navigation([
        'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous', 'thedd'),
        'next_text' => '<span class="nav-subtitle">' . esc_html__('Next', 'thedd'),
    ]);
    ?>

<?php else : ?>
    <?php get_template_part('template-parts/content', 'none'); ?>
<?php endif; ?>

<!-- Nothing below here, edit footer content in footer.php -->
<?php get_footer(); ?>