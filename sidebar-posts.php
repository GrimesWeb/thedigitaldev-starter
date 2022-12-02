<?php
if (!is_active_sidebar('post-sidebar')) {
    return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
    <?php
    dynamic_sidebar('post-sidebar');
    dynamic_sidebar('test-sidebar');
    ?>

</aside>