<?= get_header(); ?>

<?php
$cta_post_id = pll_get_post(124, pll_current_language());
$cta_args = [
    'title' => get_field('cta_title', $cta_post_id),
    'text' => get_field('cta_text', $cta_post_id),
    'image_url' => get_field('cta_image', $cta_post_id),
    'image_url_mob' => get_field('cta_image_mob', $cta_post_id),
    'page' => 'blog'
];
$blog_args = [
    'template' => 'templates/singleBlog/blogList',
    'title' => translate_and_output('same_posts')
];
?>

<main id="single-blog">
    <?= get_template_part('sections/singleBlog/heroSection'); ?>
    <?= get_template_part('sections/singleBlog/detailsSection'); ?>
    <?= get_template_part('sections/blogSection', null, $blog_args); ?>
    <?= get_template_part('sections/ctaSection', null, $cta_args); ?>
</main>

<?= get_footer(); ?>
