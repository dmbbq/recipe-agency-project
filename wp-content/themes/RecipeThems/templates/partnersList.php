<div class="swiper partners-swiper-top overflow-visible">
    <ul class="partners-list swiper-wrapper">
        <?php
        $args = array(
            'post_type'      => 'partners',
            'posts_per_page' => -1,
            'order'          => 'DESC',
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            $total_posts = $query->found_posts;
            $half_posts  = ceil($total_posts / 2);

            $count = 0;

            while ($query->have_posts()) : $query->the_post();
                $image_id = get_field('logo');
                ?>
                <li class="partners-list__item swiper-slide d-flex align-items-center justify-content-center">
                       <?php echo wp_get_attachment_image($image_id, 'full', false, array('class' => '')); ?>
                </li>
                <?php
                $count++;

                if ($count >= $half_posts) {
                    break;
                }
            endwhile;

            $query->rewind_posts();

            $count = 0;

            while ($query->have_posts()) : $query->the_post();
                $image_id = get_field('logo');
                ?>
                <li class="partners-list__item swiper-slide d-flex align-items-center justify-content-center">
                        <?php echo wp_get_attachment_image($image_id, 'full', false, array('class' => '')); ?>
                </li>
                <?php
                $count++;

                if ($count >= $half_posts) {
                    break;
                }
            endwhile;

            wp_reset_postdata();
        else :
            echo 'No posts to display.';
        endif;
        ?>
    </ul>
</div>

<div class="swiper partners-swiper-bottom overflow-visible">
    <ul class="partners-list swiper-wrapper">
        <?php
        $args = array(
            'post_type' => 'partners',
            'posts_per_page' => -1,
            'order' => 'ASC',
        );

        $query = new WP_Query($args);

        $total_posts = $query->found_posts;
        $half_posts = floor($total_posts / 2);

        $count = 0;

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                $image_id = get_field('logo');
                ?>
                <li class="partners-list__item swiper-slide d-flex align-items-center justify-content-center">
                        <?php echo wp_get_attachment_image($image_id, 'full', false, array('class' => '')); ?>
                </li>
                <?php
                $count++;

                if ($count >= $half_posts) {
                    break;
                }
            endwhile;

            $query->rewind_posts();

            $count = 0;

            while ($query->have_posts()) : $query->the_post();
                $image_id = get_field('logo');
                ?>
                <li class="partners-list__item swiper-slide d-flex align-items-center justify-content-center">
                        <?php echo wp_get_attachment_image($image_id, 'full', false, array('class' => '')); ?>
                </li>
                <?php
                $count++;

                if ($count >= $half_posts) {
                    break;
                }
            endwhile;

            wp_reset_postdata();
        else :
            echo 'No posts to display.';
        endif;
        ?>
    </ul>
</div>