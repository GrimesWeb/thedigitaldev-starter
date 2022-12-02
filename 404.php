<?php

/**
 * 404 Template File - Used for missing pages
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<?php get_header(); ?>
<!-- Nothing above here - edit header content in header.php -->

<section class="page-content">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <header class="entry-header">
            <h1><?php esc_html_e('404 - Page Not Found', 'thedd'); ?></h1>
        </header>

        <div class="entry-content not-found">
            <?php esc_html_e('Sorry, no posts match your criteria', 'thedd'); ?>

            <p><?php //get_search_form(); ?></p>
        </div>

</section>

<footer class="entry-footer">

</footer>

</article>

</section>

<!-- Nothing below here, edit footer content in footer.php -->
<?php get_footer(); ?>