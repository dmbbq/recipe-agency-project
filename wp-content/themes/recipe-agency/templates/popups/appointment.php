<?php $current_lang = pll_current_language(); ?>

<div class="backdrop is-hidden d-flex d-md-block" id="appointment">
    <div class="modal d-flex align-items-center justify-content-center m-auto">
        <div>
            <?php the_field('appointment_title', pll_get_post(119, $current_lang)); ?>
            <?= do_shortcode('[cf7form cf7key="appointment"]'); ?>
        </div>
        <button type="button" class="modal-button position-absolute">
            <svg class="modal-button__icon" width="38" height="24">
                <use href="<?php get_image('sprite.svg#icon-close'); ?>"></use>
            </svg>
        </button>
    </div>
</div>