<?php

/**
 * Template for archive pages (Categories, CPT's, etc)
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<section class="post-content">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <header class="entry-header">
            <?php
            the_title('<h2><a href="' . esc_url(get_permalink()) . '">', '</a></h2>');
            ?>
            <div class="byline">
                <span class="entry-author"><?php esc_html_e('Author:'); ?> <?php esc_url(the_author_posts_link()); ?></span>
                <span class="entry-date"><?php esc_html_e('Date:'); ?> <?php the_time('M. j, Y'); ?></span>
                <span class="entry-category"><?php esc_html_e('Categories:'); ?> <?php the_category(', '); ?></span>
            </div>
        </header>

        <div class="entry-content">
            <?php the_excerpt(); ?>
        </div>

        <footer class="entry-footer">

        </footer>

    </article>

</section>