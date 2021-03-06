<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <?php wp_head(); ?>
</head>

<body <?php body_class("site"); ?>>

    <?php wp_body_open(); ?>


    <body <?php body_class(); ?>>
        <header class="header">

            <a href="<?php echo home_url( '/' ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/logo/logo_lepays.png" alt="Logo">
                <nav class="navbar navbar-expand-lg navbar-light bg-warning">
                    <!-- Brand and toggle button -->
                    <a class="navbar-brand" href="#">HOME</a>
                    <a class="navbar-brand" href="#">CULTURE</a>
                    <a class="navbar-brand" href="#">SPORT</a>
                    <a class="navbar-brand" href="#">CONTACT</a>
            </a>
            <!-- End -->
            <!-- Your website Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php 
             wp_nav_menu( array(
             'menu'              => 'primary',
             'theme_location'    => 'my-custom-menu',
             'depth'             => 2,
             'container'         => 'div',
             'theme_location' => 'my-custom-menu', 
              'container_class' => 'custom-menu-class',
             'menu_class'        => 'navbar-nav mr-auto',
             'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
             'walker'            => new wp_bootstrap_navwalker()
             ));
        ?>
            </div>
            <!-- End -->
            </nav>

        </header>