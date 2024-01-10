<?php
$categories = $_POST['categories'];
$page = $_POST['page'];

$args = array(
    'post_type' => 'cases',
    'posts_per_page' => 8,
    'paged' => $page,
    'order' => 'DESC',
);

if (!in_array('all', $categories)) {
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'category',
            'field' => 'id',
            'terms' => $categories,
            'operator' => 'IN',
        ),
    );
}

$query = new WP_Query($args);

if ($query->have_posts()) {
    ?>
    <ul class="cases-list row">
        <?php
        while ($query->have_posts()) {
            $query->the_post();
            $image_url = get_field('card_image')['url'];
            ?>
            <li class="cases-list__item col-lg-6">
                <a href="<?php the_permalink(); ?>" class="cases-list__link d-md-flex align-items-end"
                   style="background-image: linear-gradient(193deg, rgba(0, 0, 0, 0.00) 41.57%, rgba(45, 100, 227, 0.35) 90.73%), url(<?= $image_url; ?>)">
                    <div class="cases-list__thumb overflow-hidden d-md-none d-flex align-items-end justify-content-end" style="background-image: linear-gradient(193deg, rgba(0, 0, 0, 0.00) 41.57%, rgba(45, 100, 227, 0.35) 90.73%), url(<?= $image_url; ?>)">
                        <?php the_field('stats'); ?>
                    </div>
                    <div class="cases-list__wrapper d-flex justify-content-between align-items-end w-100 gap-3">
                        <div>
                            <h3 class="cases-list__title">
                                <?php the_field('card_title'); ?>
                            </h3>
                            <p class="cases-list__text">
                                <?php the_field('card_text'); ?>
                            </p>
                            <?php get_template_part('templates/tagList'); ?>
                        </div>
                        <?php the_field('stats'); ?>
                    </div>
                </a>
            </li>
        <?php } ?>
    </ul>
    <?php
    if ($query->max_num_pages > 1) {
        get_template_part('templates/casesPagination', null, array('page' => $page, 'query' => $query));
    }
} else {
    ?>
    <h2 class="section-title mb-0">
        <?= translate_and_output('no_cases'); ?>
    </h2>
    <?php
}

wp_die();
?>
