<?php

$hero_image = get_field('single_hero_image');

?>


<section class="main-section--padding-mob">
    <div class="container">
        <div class="hero-wrapper--services d-lg-flex align-items-lg-center justify-content-between">
            <div class="hero-wrapper__content">
                <?php get_template_part('templates/breadCrumbs'); ?>
                <?php the_field('single_hero_title'); ?>
                <p>
                    <?php the_field('single_hero_text'); ?>
                </p>
                <button class="button-primary appointment-js">
                    <?= translate_and_output('leave_statement'); ?>
                </button>
            </div>
            <div class="hero-image-thumb">
                <?php echo wp_get_attachment_image($hero_image, 'full', false, array('class' => '')); ?>
            </div>
        </div>
    </div>
</section>