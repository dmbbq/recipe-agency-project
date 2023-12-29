<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<main id="about">
    <?php get_template_part('sections/about/heroSection'); ?>
    <?php get_template_part('sections/ctaSection', null, array('page' => 'about')); ?>
</main>

<?php get_footer(); ?>

