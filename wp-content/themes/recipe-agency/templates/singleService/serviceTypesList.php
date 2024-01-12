<?php
$connected = new WP_Query(array(
    'connected_type' => 'service_types_to_services',
    'connected_items' => get_queried_object(),
    'nopaging' => true,
));

if ($connected->have_posts()) :
    ?>
    <ul class="service-types-list d-flex flex-column mx-auto">
        <?php while ($connected->have_posts()) : $connected->the_post();
            $image_id = get_field('service_types_image');
            ?>
            <li class="service-types-list__item d-lg-flex align-items-lg-stretch justify-content-lg-between flex-lg-row-reverse">
                <div class="service-types-list__thumb flex-shrink-0 overflow-hidden">
                    <?php echo wp_get_attachment_image($image_id, 'full', false, array('class' => '')); ?>
                </div>

                <div class="service-types-list__content">
                    <h3>
                        <?php the_field('title_service_types'); ?>
                    </h3>
                    <p>
                        <?php the_field('text_service_types'); ?>
                    </p>
                    <button class="button-secondary ">
                        <?= translate_and_output('leave_statement'); ?>
                    </button>
                </div>
            </li>
        <?php endwhile; ?>
    </ul>
    <?php
    wp_reset_postdata();
endif;
?>
