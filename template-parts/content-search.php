<?php

/**
 * Search template - used to pull in content from searching for posts,pages
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<section class="page-content">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <header class="entry-header">
            <h3>
                <a href="<?php the_permalink(); ?>">
                    <?php echo ucwords(get_post_type($post)); ?>:
                    <?php ucwords(the_title()); ?>
            </a>
            </h3>
            <div class="byline">
                <!-- <span class="entry-date">Date: --> <?php // the_time('M. j, Y'); ?><!-- </span> -->
            </div>
        </header>

        <div class="entry-content">
            <?php the_excerpt(); ?>
        </div>


        <footer class="entry-footer">

        </footer>

    </article>

</section>