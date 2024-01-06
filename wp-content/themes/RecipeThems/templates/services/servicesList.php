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
            <li class="services-list__item d-flex flex-column">
                <div class="services-list__thumb d-flex align-items-center justify-content-center">
                    <?php echo wp_get_attachment_image($services_icon, 'full', false, array('class' => '')); ?>
                </div>
                <h2 class="services-list__title">
                    <?php the_field('card_title'); ?>
                </h2>

                <?php the_field('services_list'); ?>

                <a class="services-list__link button-secondary"
                   href="#">
                    <?= translate_and_output('details'); ?>
                    <svg class="services-list__icon" width="12" height="11">
                        <use href="<?php get_image('sprite.svg#icon-second-carret-right'); ?>"></use>
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