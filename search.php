<?php

/**
 * Page Template File - Used for single pages
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<?php get_header(); ?>
<!-- Nothing above here - edit header content in header.php -->

<h2><?php esc_html_e('Searching For: ', 'thedd'); ?>
    "<?php echo ucwords(get_search_query()); ?>"
</h2>

<?php
if (have_posts()) : while (have_posts()) : the_post();
?>

        <?php get_template_part('template-parts/content', 'search'); ?>

    <?php endwhile;
else : ?>

    <?php get_template_part('template-parts/content', 'none'); ?>

<?php endif; ?>

<?php
// Pull in sidebar if one is used
get_sidebar('page');
?>

<!-- Nothing below here, edit footer content in footer.php -->
<?php get_footer(); ?>