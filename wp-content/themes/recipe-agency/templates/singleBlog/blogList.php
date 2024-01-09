<ul class="blog-list row">
    <?php
    $current_post_id = get_the_ID();
    $current_post_tags = wp_get_post_tags($current_post_id, array('fields' => 'ids'));

    $args = array(
        'post_type'      => 'blog',
        'posts_per_page' => -1,
        'order'          => 'DESC',
    );

    $query = new WP_Query($args);

    $matching_posts = array();

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();

            $post_tags = wp_get_post_tags(get_the_ID(), array('fields' => 'ids'));

            $tag_match = false;
            foreach ($post_tags as $post_tag) {
                if (in_array($post_tag, $current_post_tags) && get_the_ID() !== $current_post_id) {
                    $tag_match = true;
                    break;
                }
            }

            if ($tag_match) {
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
            if ($counter < 4) {
                ?>
                <li class="blog-list__item col-xl-4 col-md-6 <?= ($counter === 4) ? 'd-none d-md-block d-xl-none' : ''; ?>">
                    <a href="<?= $post['permalink']; ?>" class="blog-list__link">
                        <div class="blog-list__thumb overflow-hidden">
                            <?= wp_get_attachment_image($post['image_id'], 'full', false, array('class' => 'blog-list__image')); ?>
                        </div>
                        <span class="blog-list__date fw-medium d-inline-block">
                            <?= date('d.m.Y', strtotime($post['date'])); ?>
                        </span>
                        <h2 class="blog-list__title fw-medium mb-0">
                            <?= $post['title']; ?>
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