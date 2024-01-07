<?php
$current_lang = pll_current_language();

$partners_count = wp_count_posts('partners')->publish;
?>

<section class="section section--padding">
    <div class="container">
        <div class="d-lg-flex justify-content-lg-between section-header">
            <h2 class="partners-title section-title-secondary mb-lg-0">
                <?php the_field('partners_title', pll_get_post(119, $current_lang)); ?>
            </h2>
            <p class="partners-text d-flex justify-content-center justify-content-lg-start align-self-lg-end mb-0">
                <span class="partners-text__icon fw-medium">
                    *
                </span>
                <span class="partners-text__content align-self-lg-end">
                    <?php the_field('partners_text', pll_get_post(119, $current_lang)); ?>
                </span>
            </p>
        </div>
        <?php get_template_part('templates/partnersList'); ?>
        <button class="button-secondary partners-button <?= ($partners_count < 9) ? 'd-none' : '' ?> d-md-none" type="button">
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