<?= get_header(); ?>

<?php
$cta_post_id = pll_get_post(140, pll_current_language());
$cta_args = [
    'title' => get_field('single_cta_title', $cta_post_id),
    'text' => get_field('single_cta_text', $cta_post_id),
    'image_url' => get_field('single_cta_image', $cta_post_id),
    'image_url_mob' => get_field('single_cta_image_mob', $cta_post_id),
    'page' => 'single-service'
];
?>

<main id="single-service">
    <?php get_template_part('sections/singleService/heroSection'); ?>

    <?php get_template_part('sections/singleService/advertingSection'); ?>

    <?php get_template_part('sections/singleService/questionSection'); ?>

    <?php get_template_part('sections/singleService/typesSection'); ?>

    <?php get_template_part('sections/partnersSection'); ?>

    <?php get_template_part('sections/singleService/resultsSection'); ?>

    <?= get_template_part('sections/ctaSection', null, $cta_args); ?>
</main>

<?= get_footer(); ?>
