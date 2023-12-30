<?php
/*
Template Name: Contacts
*/
?>

<?php get_header(); ?>

<main id="contacts">

    <?php get_template_part('sections/contacts/heroSection');?>
    <?php get_template_part('sections/ctaSection', null, array('page' => 'contacts')); ?>


</main>

<?php get_footer(); ?>

