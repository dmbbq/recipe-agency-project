<?php
$current_lang = pll_current_language()
?>

<section class="section section--padding">
    <div class="container">
        <div class="d-flex justify-content-between section-header">
            <h2 class="section-title mb-0">
                <?php the_field('partners_title', pll_get_post(119, $current_lang)); ?>
            </h2>
            <p class="partners-text d-flex mb-0">
                <span class="partners-text__icon fw-medium">
                    *
                </span>
                <span class="partners-text__content">
                    <?php the_field('partners_text', pll_get_post(119, $current_lang)); ?>
                </span>
            </p>
        </div>
        <?php get_template_part('templates/partnersList'); ?>
        <button class="button-secondary partners-button d-md-none" type="button">
            <span class="show">
                <?= translate_and_output('more_partners'); ?>
            </span>
            <span class="hide">
                <?= translate_and_output('hide'); ?>
            </span>
            <svg class="partners-button__icon" width="12" height="11">
                <use href="<?php get_image('sprite.svg#icon-second-carret-right'); ?>"></use>
            </svg>
        </button>
    </div>
</section>