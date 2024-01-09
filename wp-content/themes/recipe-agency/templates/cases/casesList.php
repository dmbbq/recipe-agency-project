<?php
$categories = $_POST['categories'];
$args = array(
    'post_type' => 'cases',
    'posts_per_page' => -1,
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
    $total_posts = $query->post_count;

    $posts_per_list = 8;
    $lists_count = ceil($total_posts / $posts_per_list);

    $posts_per_list_mob = 6;
    $lists_count_mob = ceil($total_posts / $posts_per_list_mob);
    ?>

    <div class="swiper cases-page-swiper desk d-none d-md-block">
        <ul class="swiper-wrapper">

            <?php
            for ($list_num = 0; $list_num < $lists_count; $list_num++) {
                ?>
                <li class="swiper-slide">
                    <ul class="cases-list row">
                        <?php
                        for ($i = $list_num * $posts_per_list; $i < min(($list_num + 1) * $posts_per_list, $total_posts); $i++) {
                            $query->the_post();
                            $image = get_field('card_image');
                            ?>

                            <li class="cases-list__item col-lg-6">
                                <a href="<?php the_permalink(); ?>" class="cases-list__link d-lg-flex align-items-end" style="background-image: linear-gradient(193deg, rgba(0, 0, 0, 0.00) 41.57%, rgba(45, 100, 227, 0.35) 90.73%), url(<?= $image['url'] ?>)">
                                    <div class="cases-list__thumb overflow-hidden d-lg-none">
                                        <?php echo wp_get_attachment_image($image['id'], 'full', false, array('class' => '')); ?>
                                        <?php the_field('stats'); ?>
                                    </div>
                                    <div class="cases-list__wrapper d-flex justify-content-between align-items-end w-100">
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
                </li>
            <?php } ?>
        </ul>

        <?php
        //            $blogCtrlClass = ($lists_count > 1) ? 'd-flex justify-content-center' : 'd-none';
        //            $ctrl_visibility = ($lists_count > 4) ? '' : 'd-none';
        //            get_template_part('templates/blogCtrl', null, array('class' => $blogCtrlClass, 'ctrl' => $ctrl_visibility));
        ?>
    </div>

    <!--        --><?php //$query->rewind_posts(); ?>
    <!---->
    <!--        <div class="swiper blog-page-swiper mob d-xl-none">-->
    <!--            <ul class="swiper-wrapper">-->
    <!---->
    <!--                --><?php
//                for ($list_num = 0; $list_num < $lists_count_mob; $list_num++) {
//                    ?>
    <!--                    <li class="swiper-slide">-->
    <!--                        <ul class="blog-list row">-->
    <!--                            --><?php
//                            for ($i = $list_num * $posts_per_list_mob; $i < min(($list_num + 1) * $posts_per_list_mob, $total_posts); $i++) {
//                                $query->the_post();
//                                $date = get_the_date('d.m.Y');
//                                $image_id = get_field('card_image');
//                                ?>
    <!---->
    <!--                                <li class="blog-list__item col-md-6">-->
    <!--                                    <a href="--><?php //the_permalink(); ?><!--" class="blog-list__link">-->
    <!--                                        <div class="blog-list__thumb overflow-hidden">-->
    <!--                                            --><?php //echo wp_get_attachment_image($image_id, 'full', false, array('class' => 'blog-list__image')); ?>
    <!--                                        </div>-->
    <!--                                        <span class="blog-list__date fw-medium d-inline-block">-->
    <!--                                        --><?php //echo date('d.m.Y', strtotime($date)); ?>
    <!--                                    </span>-->
    <!--                                        <h2 class="blog-list__title fw-medium mb-0">-->
    <!--                                            --><?php //the_field('title'); ?>
    <!--                                        </h2>-->
    <!--                                    </a>-->
    <!--                                </li>-->
    <!---->
    <!--                            --><?php //} ?>
    <!--                        </ul>-->
    <!--                    </li>-->
    <!--                --><?php //} ?>
    <!--            </ul>-->
    <!---->
    <!--            --><?php
//            $blogCtrlClass = ($lists_count_mob > 1) ? 'd-flex justify-content-center' : 'd-none';
//            $ctrl_visibility = ($lists_count_mob > 4) ? '' : 'd-none';
//            get_template_part('templates/blogCtrl', null, array('class' => $blogCtrlClass, 'ctrl' => $ctrl_visibility));
//            ?>
    <!--        </div>-->

    <?php
} else {
    echo 'Немає постів для відображення.';
}

wp_die();
?>