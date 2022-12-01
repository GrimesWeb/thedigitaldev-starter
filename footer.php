<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>

</main>
<!-- End Main Page Content -->

<?php
// Pull in sidebar if one is used
get_sidebar();
?>

<footer></footer>
<!-- End footer content, nothing below here -->
<?php wp_footer(); ?>
</body>
</html>