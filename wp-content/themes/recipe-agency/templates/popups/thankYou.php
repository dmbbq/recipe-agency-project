<?php $current_lang = pll_current_language(); ?>

<div class="backdrop is-hidden d-flex d-md-block" id="thank-you">
    <div class="modal d-flex align-items-center justify-content-center m-auto">
        <div class="text-center">
            <div class="thank-you__thumb">
            </div>
            <h2 class="thank-you__title">
                <?php the_field('thank_you_title', pll_get_post(119, $current_lang)); ?>
            </h2>
            <p class="thank-you__text mb-0">
                <?php the_field('thank_you_text', pll_get_post(119, $current_lang)); ?>
            </p>
        </div>
        <button type="button" class="modal-button position-absolute">
            <svg class="modal-button__icon" width="38" height="24">
                <use href="<?php get_image('sprite.svg#icon-close'); ?>"></use>
            </svg>
        </button>
    <div>
<div>