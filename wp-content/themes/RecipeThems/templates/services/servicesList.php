<ul class="services-list d-flex flex-lg-wrap flex-column flex-lg-row">
    <?php
    $args = array(
        'post_type' => 'our-services',
        'posts_per_page' => -1,
        'order' => 'ASC',
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $services_icon = get_field('our_services_icons');
            ?>
            <li class="services-list__item">
                <div class="services-icon_thumb d-flex align-items-center justify-content-center">
                    <?php echo wp_get_attachment_image($services_icon, 'full', false, array('class' => '')); ?>
                </div>
                <h2 class="services-list__title">
                    <?php the_title();?>
                </h2>

                <div class="services-list__text">
                    <?php the_field('our_services_list');?>

                </div>
                <a class="services-link_post button-style d-inline-flex align-items-center justify-content-center" href="#">
                    Детальніше
                    <svg class="arrow-btn" width="12" height="11">
                        <use href="<?php get_image('sprite.svg#icon-arrowbtn'); ?>"></use>
                    </svg>

                </a>
            </li>

        <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo 'Немає постів для відображення.';
    endif;
    ?>
</ul>