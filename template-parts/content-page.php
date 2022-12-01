<?php

/**
 * Page template - used to pull in content from the backend page editor
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<section class="page-content">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <header class="entry-header">
            <?php the_title('<h2>', '</h2>'); ?>
            <div class="byline">
                <!-- <span class="entry-date">Date: <?php //the_time('M. j, Y'); ?></span> -->
            </div>

            </p>
        </header>

        <div class="entry-content">
            <?php the_content(); ?>
        </div>

        <footer class="entry-footer">

        </footer>

    </article>

</section>

<?php the_content(); ?>