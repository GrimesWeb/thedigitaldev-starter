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

Page Template

<?php
if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php
        // Get content for single pages
        get_template_part('template-parts/content', 'page');
        ?>

        <?php
        // Display comments if they are open OR atleast 1 comment is added
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
        ?>

    <?php endwhile; endif; ?>

    <?php
        // Pull in sidebar if in use

            get_sidebar();

    ?>

<!-- Nothing below here, edit footer content in footer.php -->
<?php get_footer(); ?>