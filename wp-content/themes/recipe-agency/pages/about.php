<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<main id="about">
    <?php get_template_part('sections/about/heroSection'); ?>
    <?php get_template_part('sections/about/resultsSection'); ?>
    <?php get_template_part('sections/about/aboutSection'); ?>
    <?php get_template_part('sections/partnersSection'); ?>
    <?php get_template_part('sections/about/valuesSection'); ?>
    <?php get_template_part('sections/about/teamSection'); ?>
    <?php get_template_part('sections/ctaSection', null, array('page' => 'about')); ?>
    <?php get_template_part('sections/blogSection'); ?>
</main>

<?php get_footer(); ?>

