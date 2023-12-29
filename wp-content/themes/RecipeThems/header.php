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

<?php
$page_id = get_the_ID();
$is_black_theme = in_array($page_id, array(132, 129, 140, 138, 124, 121, 136, 134, 128, 126)) || is_page_template('services.php') || is_page_template('cases.php') ? true : false;
?>

<body style="visibility: hidden">

<div class="wrapper">
    <header class="header <?php echo $is_black_theme ? "black-theme" : "white-theme"; ?>">
        <div class="container">
            <div class="header-wrapper d-flex align-items-center justify-content-between">

                <?php $is_black_theme ? custom_theme_logo() : the_custom_logo(); ?>

                <nav class="main-nav d-none d-lg-flex">
                    <?php get_template_part('templates/navigation', null, array('location' => 'menu-header')); ?>
                </nav>

                <?php get_template_part('templates/languagesList'); ?>

                <button class="button-primary d-none d-lg-flex">
                    <?php translate_and_output('write_us'); ?>
                </button>

                <button class="hamburger hamburger--collapse d-flex align-items-center justify-content-center menu-button p-0 border-0 d-md-none"
                type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </button>
            </div>

        </div>
    </header>

