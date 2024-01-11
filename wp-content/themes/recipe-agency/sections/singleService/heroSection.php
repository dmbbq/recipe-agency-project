<?php

$hero_image = get_field('single_hero_image');

?>


<section>
    <div class="container">
        <div class="hero-wrapper--services d-lg-flex align-items-lg-center justify-content-between">
            <div class="hero-wrapper__content">
                <?php the_field('single_hero_title'); ?>
                <p>
                    <?php the_field('single_hero_text'); ?>

                </p>
            </div>
            <div class="hero-image-thumb">
                <?php echo wp_get_attachment_image($hero_image, 'full', false, array('class' => '')); ?>
            </div>
        </div>
    </div>
</section>