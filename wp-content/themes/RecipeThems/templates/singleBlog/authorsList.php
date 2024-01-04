<?php
$connected = new WP_Query( array(
    'connected_type' => 'team_to_blog',
    'connected_items' => get_queried_object(),
    'nopaging' => true,
) );

if ( $connected->have_posts() ) :
    ?>
    <ul class="authors-list">
        <?php while ($connected->have_posts()) : $connected->the_post();
            $image_id = get_field('thumbnail_image');
            ?>
            <li class="authors-list__item d-flex align-items-center">
                <div class="authors-list__thumb overflow-hidden">
                    <?php echo wp_get_attachment_image($image_id, 'full', false, array('class' => 'authors-list__image')); ?>
                </div>
                <div>
                    <h3 class="authors-list__title">
                        <?php the_field('name'); ?>
                    </h3>
                    <p class="authors-list__text mb-0">
                        <?php the_field('thumbnail_position'); ?>
                    </p>
                </div>
            </li>
        <?php endwhile; ?>
    </ul>
    <?php
    wp_reset_postdata();
endif;
?>
