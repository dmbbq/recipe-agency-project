<section class="section section--padding cases">
    <div class="container">
        <h2 class="section-title">
            <?php the_field('cases_title'); ?>
        </h2>
        <?php get_template_part('templates/home/casesList'); ?>
        <a class="button-secondary d-inline-flex d-md-flex all-cases-link" href="<?= get_permalink(pll_get_post(129, pll_current_language())); ?>">
            <?= translate_and_output('all_cases'); ?>
            <svg class="services-list__icon" width="12" height="11">
                <use href="<?php get_image('sprite.svg#icon-second-carret-right'); ?>"></use>
            </svg>
        </a>
    </div>
</section>
