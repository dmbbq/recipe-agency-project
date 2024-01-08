<?php
    $image_id = get_field('hero_image');
    $image_id_mob = get_field('hero_image_mob');
?>

<section class="hero">
    <div class="container">
        <div class="hero-wrapper position-relative overflow-hidden">
            <?php the_field('hero_title'); ?>
            <div class="hero-content d-flex flex-column flex-lg-row">
                <svg class="hero-content__icon" width="42" height="42">
                   <use href="<?php get_image('sprite.svg#icon-denis-penis'); ?>"></use>
                 </svg>
                <div>
                    <?php the_field('hero_title_second'); ?>
                    <p class="hero-text">
                         <?php the_field('hero_text'); ?>
                    </p>
                    <button class="hero-button button-primary" type="button">
                        <?= translate_and_output('write_us'); ?>
                    </button>
                </div>
            </div>
            <div class="hero-thumb position-absolute bottom-0 start-0 d-none d-lg-block">
                <?php echo wp_get_attachment_image($image_id, 'full', false, array('class' => '')); ?>
            </div>
            <div class="hero-thumb position-absolute top-0 end-0 d-lg-none">
                <?php echo wp_get_attachment_image($image_id_mob, 'full', false, array('class' => '')); ?>
            </div>
        </div>
    </div>
</section>




