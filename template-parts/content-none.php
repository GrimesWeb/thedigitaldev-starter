<?php
/**
 * Template for displaying custom message when no posts found in a query or custom query
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<section class="not-found">
    <header class="entry-header">
        <?php esc_html_e( 'Sorry, no posts match your criteria', 'thedd' ); ?>
    </header>
</section>

