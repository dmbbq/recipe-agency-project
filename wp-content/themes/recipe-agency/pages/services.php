<?php
/*
Template Name: Services
*/
?>
<?php get_header(); ?>

<main id="services">
    <?php get_template_part('sections/servicesSection');?>
    <?php get_template_part('sections/ctaSection', null, array('page' => 'services')); ?>
</main>

<?php get_footer(); ?>


