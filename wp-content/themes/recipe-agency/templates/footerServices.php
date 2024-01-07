<ul class="services-list d-flex flex-column">
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
                <a class="services-list__link" href="#">
                   <?php the_field('thumbnail_title');?>
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