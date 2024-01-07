<ul class="blog-list row">
    <?php
    $current_post_id = get_the_ID();
    $args = array(
        'post_type'      => 'blog',
        'posts_per_page' => -1,
        'order'          => 'DESC',
    );

    $query = new WP_Query($args);

    $matching_posts = array();

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();

            $post_categories = get_the_category();
            $current_post_categories = get_the_category($current_post_id);

            $category_match = false;
            foreach ($post_categories as $post_category) {
                if (in_array($post_category, $current_post_categories) && get_the_ID() !== $current_post_id) {
                    $category_match = true;
                    break;
                }
            }

            if ($category_match) {
                $matching_posts[] = array(
                    'date'      => get_the_date('d.m.Y'),
                    'image_id'  => get_field('card_image'),
                    'permalink' => get_the_permalink(),
                    'title'     => get_field('title'),
                );
            }
        endwhile;
        wp_reset_postdata();

        $counter = 0;
        foreach ($matching_posts as $post) {
            if ($counter < 3) {
                ?>
                <li class="blog-list__item col-lg-4">
                    <a href="<?php echo $post['permalink']; ?>" class="blog-list__link">
                        <div class="blog-list__thumb overflow-hidden">
                            <?php echo wp_get_attachment_image($post['image_id'], 'full', false, array('class' => 'blog-list__image')); ?>
                        </div>
                        <span class="blog-list__date fw-medium d-inline-block">
                                <?php echo date('d.m.Y', strtotime($post['date'])); ?>
                            </span>
                        <h2 class="blog-list__title fw-medium mb-0">
                            <?php echo $post['title']; ?>
                        </h2>
                    </a>
                </li>
                <?php
                $counter++;
            } else {
                break;
            }
        }
    else :
        echo 'Немає постів для відображення.';
    endif;
    ?>
</ul>