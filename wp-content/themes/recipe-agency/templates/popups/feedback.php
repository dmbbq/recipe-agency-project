<?php $current_lang = pll_current_language(); ?>

<div class="backdrop is-hidden" id="feedback">
    <div class="modal">
        <?php the_field('feedback_title', pll_get_post(119, $current_lang)); ?>
        <?= do_shortcode('[cf7form cf7key="feedback"]'); ?>
    </div>
</div>