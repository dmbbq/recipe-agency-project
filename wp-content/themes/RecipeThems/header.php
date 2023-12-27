<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <?php wp_head(); ?>

    <title><?php wp_title(); ?></title>

</head>

<body style="visibility: hidden">

<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="header-wrapper d-flex align-items-center justify-content-between">
                <div class="logo-thumb">
                    <?php the_custom_logo(); ?>
                </div>
                <nav class="main-nav d-none d-lg-flex">
                    <?php get_template_part('templates/navigation', null, array('location' => 'menu-header')); ?>
                </nav>
                <div class="">
                    polylang
                </div>
                <a class="header-button button-style d-flex align-items-center justify-content-between d-none d-lg-flex" href="#cta">
                    <?php the_field('header_button');?>
                </a>

                <button class="hamburger hamburger--collapse d-flex align-items-center justify-content-center menu-button p-0 border-0 d-md-none"
                type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </button>
            </div>

        </div>
    </header>

