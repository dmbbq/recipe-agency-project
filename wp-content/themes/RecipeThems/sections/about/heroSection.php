<?php
    $image_id = get_field('hero_image');
?>

<section class="hero">
    <div class="container">
        <div class="hero-wrapper position-relative">
            <?php the_field('hero_title'); ?>
            <div class="hero-content d-flex">
                <svg class="hero-content__icon" width="40" height="42">
                   <use href="<?php get_image('sprite.svg#icon-denis-penis'); ?>"></use>
                 </svg>
                <div>
                    <?php the_field('hero_title_second'); ?>
                    <p class="hero-text">
                         <?php the_field('hero_text'); ?>
                    </p>
                    <button class="button-primary" type="button">
                        <?php translate_and_output('write_us'); ?>
                    </button>
                </div>
            </div>
            <div class="hero-thumb position-absolute bottom-0 start-0">
                <?php echo wp_get_attachment_image($image_id, 'full', false, array('class' => '')); ?>
            </div>
        </div>
    </div>
</section>




