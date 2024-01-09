<?php
$current_lang = pll_current_language();

$template = $args['template'] ?? 'templates/blogList';
$title = $args['title'] ?? get_field('blog_title', pll_get_post(119, $current_lang));

$current_post_id = get_the_ID();
$current_post_tags = get_the_tags($current_post_id);

$args = array(
    'post_type' => 'blog',
    'posts_per_page' => -1,
    'order' => 'DESC',
    'tax_query' => array(
        array(
            'taxonomy' => 'post_tag',
            'field' => 'id',
            'terms' => wp_list_pluck($current_post_tags, 'term_id'),
        ),
    ),
);

$query = new WP_Query($args);

$matching_posts_count = $query->post_count;

if (is_singular('blog') && $matching_posts_count > 1 || !is_singular('blog')) {
    ?>
    <section
            class="<?= (is_page(pll_get_post(128, $current_lang)) ? 'section--padding ' : '') . (is_singular('blog') ? 'section' : ''); ?>">
        <div class="container">
            <div class="section-header d-flex align-items-center justify-content-between">
                <h2 class="section-title-secondary">
                    <?= $title; ?>
                </h2>
                <a class="button-secondary d-none d-md-block"
                   href="<?= get_permalink(pll_get_post(124, $current_lang)); ?>">
                    <?= translate_and_output('all_posts'); ?>
                    <svg class="button-secondary__icon flex-shrink-0" width="12" height="11">
                        <use href="<?php get_image('sprite.svg#icon-second-carret-right'); ?>"></use>
                    </svg>
                </a>
            </div>
            <?php get_template_part($template); ?>
            <a class="blog-link mx-auto d-md-none button-secondary"
               href="<?= get_permalink(pll_get_post(124, $current_lang)); ?>">
                <?= translate_and_output('all_posts'); ?>
                <svg class="button-secondary__icon flex-shrink-0" width="12" height="11">
                    <use href="<?php get_image('sprite.svg#icon-second-carret-right'); ?>"></use>
                </svg>
            </a>
        </div>
    </section>
    <?php
}
wp_reset_postdata();
?>
