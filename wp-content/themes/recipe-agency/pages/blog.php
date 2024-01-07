<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<main id="blog">
    <?php get_template_part('sections/blog/heroSection');?>
    <?php get_template_part('sections/ctaSection', null, array('page' => 'blog')); ?>
</main>

<?php get_footer(); ?>

