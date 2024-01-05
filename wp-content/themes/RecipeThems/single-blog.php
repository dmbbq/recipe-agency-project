<?php
get_header();
$current_lang = pll_current_language();

$args = array(
    'page' => 'blog',
    'title' => get_field('cta_title', pll_get_post(124, $current_lang)),
    'text' => get_field('cta_text', pll_get_post(124, $current_lang)),
    'image_url' => get_field('cta_image', pll_get_post(124, $current_lang)),
);
?>

<main id="single-blog">
    <?php get_template_part('sections/singleBlog/heroSection'); ?>
    <?php get_template_part('sections/singleBlog/detailsSection'); ?>
    <?php get_template_part('sections/singleBlog/blogSection'); ?>
    <?php get_template_part('sections/ctaSection', null, $args); ?>
</main>

<?php get_footer(); ?>
