<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<main id="home">
    <?php get_template_part('sections/home/heroSection'); ?>
    <?php get_template_part('sections/home/aboutSection'); ?>

    <?php get_template_part('sections/services/heroSection');?>
    <?php get_template_part('sections/home/processes'); ?>

    <?php get_template_part('sections/ctaSection', null, array('page' => 'home')); ?>
</main>

<?php get_footer(); ?>

