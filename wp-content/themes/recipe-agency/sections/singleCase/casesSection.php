<?php
$current_lang = pll_current_language();
$current_post_id = get_the_ID();
$categories = get_the_category($current_post_id);

$args = array(
    'post_type' => 'cases',
    'posts_per_page' => -1,
    'order' => 'DESC',
    'post__not_in' => array($current_post_id),
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'id',
            'terms' => wp_list_pluck($categories, 'term_id'),
            'operator' => 'IN',
        ),
    ),
);

$query = new WP_Query($args);

$matching_posts_count = $query->post_count;

if ($matching_posts_count !== 0) {
    ?>
    <section class="section">
        <div class="container">
            <h2 class="cases-title section-title">
                <?= translate_and_output('other_cases'); ?>
            </h2>

            <?php get_template_part('templates/singleCase/casesList'); ?>

            <a class="all-cases-link button-secondary mx-auto" href="<?= get_permalink(pll_get_post(132, $current_lang)); ?>">
                <?= translate_and_output('all_cases'); ?>
                <svg class="" width="12" height="11">
                    <use href="<?php get_image('sprite.svg#icon-second-carret-right'); ?>"></use>
                </svg>
            </a>
        </div>
    </section>
    <?php
}


