<div class="aside-cta">
    <h2 class="aside-cta__title fw-semibold">
        <?php the_field('single_cta_title'); ?>
    </h2>
    <p class="aside-cta__text">
        <?php the_field('single_cta_text'); ?>
    </p>
    <button class="button-primary" type="button">
        <?= translate_and_output('write_us'); ?>
    </button>
</div>