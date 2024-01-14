<?= get_header(); ?>

<?php
$cta_post_id = pll_get_post(132, pll_current_language());
$cta_args = [
    'title' => get_field('cta_title', $cta_post_id),
    'text' => get_field('cta_text', $cta_post_id),
    'image_url' => get_field('cta_image', $cta_post_id),
    'image_url_mob' => get_field('cta_image_mob', $cta_post_id),
    'page' => 'single-case'
];
?>

<main id="single-case">
    <?php get_template_part('sections/singleCase/heroSection'); ?>
    <?php get_template_part('sections/singleCase/detailsSection'); ?>
    <?php get_template_part('sections/singleCase/casesSection'); ?>
    <?= get_template_part('sections/ctaSection', null, $cta_args); ?>
</main>

<?= get_footer(); ?>
