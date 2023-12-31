<ul class="blog-list row">
    <?php
    $args = array(
        'post_type' => 'blog',
        'posts_per_page' => 4,
        'order' => 'DESC',
    );

    $query = new WP_Query($args);
    $counter = 0;

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $date = get_the_date('d.m.Y');
            $image_id = get_field('card_image');
            $counter++;
            ?>
            <li class="blog-list__item col-xl-4 col-md-6 <?= ($counter === 4) ? 'd-none d-md-block d-xl-none' : ''; ?>">
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
        <?php endwhile;
        wp_reset_postdata();
    else :
        echo 'Немає постів для відображення.';
    endif;
    ?>
</ul>
