<?php
$args = array(
    'post_type' => 'blog',
    'posts_per_page' => -1,
    'order' => 'DESC',
);

$query = new WP_Query($args);

if ($query->have_posts()) {
    $total_posts = $query->post_count;

    $posts_per_list = 1;
    $lists_count = ceil($total_posts / $posts_per_list);

    $posts_per_list_mob = 6;
    $lists_count_mob = ceil($total_posts / $posts_per_list_mob);
    ?>

    <div class="swiper blog-page-swiper">
        <ul class="swiper-wrapper">

            <?php
            for ($list_num = 0; $list_num < $lists_count; $list_num++) {
                ?>
                <li class="swiper-slide">
                    <ul class="blog-list row">
                        <?php
                        for ($i = $list_num * $posts_per_list; $i < min(($list_num + 1) * $posts_per_list, $total_posts); $i++) {
                            $query->the_post();
                            $date = get_the_date('d.m.Y');
                            $image_id = get_field('card_image');
                            ?>

                            <li class="blog-list__item col-lg-4">
                                <a href="<?php the_permalink(); ?>" class="blog-list__link">
                                    <div class="blog-list__thumb overflow-hidden">
                                        <?php echo wp_get_attachment_image($image_id, 'full', false, array('class' => 'blog-list__image')); ?>
                                    </div>
                                    <span class="blog-list__date fw-medium d-inline-block">
                                        <?php echo date('d.m.Y', strtotime($date)); ?>
                                    </span>
                                    <h2 class="blog-list__title fw-medium mb-0">
                                        <?php the_field('title'); ?>
                                    </h2>
                                </a>
                            </li>

                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>
        </ul>
        <?php get_template_part('templates/blogCtrl'); ?>
    </div>

    <?php
} else {
    echo 'Немає постів для відображення.';
}

wp_reset_postdata();
?>