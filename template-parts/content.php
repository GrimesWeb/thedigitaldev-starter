<?php

/**
 * Template for regular WP blog posts
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<section class="post-content">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <header class="entry-header">
            <?php the_title('<h2>', '</h2>'); ?>
            <div class="byline">
                <span class="entry-author"><?php esc_html_e('Author:'); ?> <a href="<?php echo get_author_posts_url($post->post_author); ?>"><?php the_author(); ?></a></span>
                <span class="entry-date"><?php esc_html_e('Date:'); ?> <?php the_time('M. j, Y'); ?></span>
                <span class="entry-category"><?php esc_html_e('Categories:'); ?> <?php the_category(', '); ?></span>
            </div>
        </header>

        <div class="entry-content">
            <?php the_content(); ?>
        </div>

        <footer class="entry-footer">

        </footer>

        <?php
        // Display comments only if they are open
			if ( comments_open() ) :
				comments_template();
			endif;
        ?>

    </article>

</section>