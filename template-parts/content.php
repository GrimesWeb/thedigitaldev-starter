<?php
/**
 * Template for regular WP blog posts
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1><?php the_title(); ?></h1>
        <p class="byline">
            <span class="entry-author">Author: <a href="<?php echo get_author_posts_url($post->post_author); ?>"><?php the_author(); ?></a></span>
            <span class="entry-date">Date: <?php the_time('M. j, Y'); ?></span>
            <span class="entry-category">Categories: <?php the_category(', '); ?></span>
        </p>
    </header>
    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div>
    <footer class="entry-footer">

    </footer>
</article>