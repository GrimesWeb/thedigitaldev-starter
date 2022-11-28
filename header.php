<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title added by title tag theme support -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header id="masthead">
        <nav id="site-navigation" class="main-navigation" role="navigation">
            <?php
                // Nav args
                $nav_args = [
                    'theme_location' => 'header-menu'
                ];
            ?>
            <?php wp_nav_menu($nav_args); ?>
        </nav>
    </header>

    <main id="primary" class="site-main">
        <!-- Begin Main content -->