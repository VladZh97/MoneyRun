<?php
/**
* @package Murami
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
    <!-- Facebook -->
    <meta property="og:title" content="<?php bloginfo( 'name' ); ?>">
    <meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">
    <meta property="og:url" content="<?php echo get_home_url(); ?>">
    <meta property="og:description" content="<?php echo get_bloginfo('description'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/home/logo-header.png">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo get_home_url(); ?>">
    <meta property="twitter:title" content="">
    <meta property="twitter:description" content="<?php echo get_bloginfo('description'); ?>">
    <meta property="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/home/logo-header.png">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
    <div class="spinner__container">
            <div class="spinner">
                <div class="inner one"></div>
                <div class="inner two"></div>
                <div class="inner three"></div>
            </div>
        </div>
        <div class="arrow__up"></div>

        <div class="container">
            <div class="header">



                <div class="header__logo">
                    <a href="<?= get_home_url();?>"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/logo-header.png" alt="logo"></a>
                </div>
                <div class="menu-btn">
                    <div class="menu-btn__burger"></div>
                </div>
                <div class="header__menu">

                    <nav id="menu">
                        <?php
                        wp_nav_menu( array(
                        'theme_location'    => 'main',
                        ) );
                    ?>
                </div>
            </div>
        </div>
    </header>