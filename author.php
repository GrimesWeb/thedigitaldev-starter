<?php

/**
 * Author template - Display all posts by Author
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<?php get_header(); ?>
<!-- Nothing above here - edit header content in header.php -->

<div class="author-bio">
    <h1><?php the_archive_title(); ?></h1>
    <?php
    // Add in author description if wanted - uncomment here
    // echo the_author_meta( 'description', $post->post_author);
    ?>
</div>

<?php
if (have_posts()) : while (have_posts()) : the_post();
?>

        <?php get_template_part('template-parts/content', 'archives'); ?>

    <?php endwhile;
else : ?>

    <?php get_template_part('template-parts/content', 'none'); ?>

<?php endif; ?>

<!-- Nothing below here, edit footer content in footer.php -->
<?php get_footer(); ?>