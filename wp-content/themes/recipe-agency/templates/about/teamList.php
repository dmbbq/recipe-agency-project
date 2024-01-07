<div class="swiper team-swiper ms-0">
    <ul class="team-list swiper-wrapper">
        <?php
        $args = array(
            'post_type' => 'team',
            'posts_per_page' => -1,
            'order' => 'DESC',
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                $image_id = get_field('card_image');
                ?>
                <li class="team-list__item swiper-slide">
                    <div class="team-list__thumb">
                        <?php echo wp_get_attachment_image($image_id, 'full', false, array('class' => 'team-list__image')); ?>
                    </div>
                    <h3 class="team-list__title">
                        <?php the_field('name'); ?>
                    </h3>
                    <p class="team-list__text">
                        <?php the_field('card_position'); ?>
                    </p>
                </li>
            <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo 'Немає постів для відображення.';
        endif;
        ?>
    </ul>
</div>