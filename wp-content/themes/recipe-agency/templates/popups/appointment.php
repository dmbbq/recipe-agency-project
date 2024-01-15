<?php $current_lang = pll_current_language(); ?>

<div class="backdrop is-hidden" id="appointment">
    <div class="modal">
        <?php the_field('appointment_title', pll_get_post(119, $current_lang)); ?>
        <?= do_shortcode('[cf7form cf7key="appointment"]'); ?>
    </div>
</div>