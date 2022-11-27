<?php
/**
 * Single post Template File - Used for single posts
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<?php get_header(); ?>
<!-- Nothing above here - edit header content in header.php -->

Post(single) Template

<?php
if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php
        // Get content for single pages
        get_template_part('template-parts/content');
        ?>

        <?php
        // Display comments if they are open and atleast 1 comment is added
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
        ?>

    <?php endwhile; endif; ?>

<!-- Nothing below here, edit footer content in footer.php -->
<?php get_footer(); ?>