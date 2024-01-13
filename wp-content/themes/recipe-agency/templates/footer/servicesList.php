<ul class="services-list d-flex flex-column">
    <?php
    $args = array(
        'post_type'      => 'services',
        'posts_per_page' => -1,
        'order'          => 'ASC',
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $categories = get_the_category();
            if (!empty($categories)) :
                $category = $categories[0];
                ?>
                <li class="services-list__item">
                    <a class="services-list__link" href="<?= get_permalink(); ?>">
                        <?= esc_html($category->name); ?>
                    </a>
                </li>
            <?php
            endif;
        endwhile;
        wp_reset_postdata();
    else :
        echo 'Немає постів для відображення.';
    endif;
    ?>
</ul>
