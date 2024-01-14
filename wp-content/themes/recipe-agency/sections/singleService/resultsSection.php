<?php
$current_lang = pll_current_language();
?>

<section class="results">
    <div class="container">
        <h2 class="section-title-secondary results-title">
            <?= translate_and_output('results'); ?>
        </h2>
        <?php get_template_part('templates/singleService/casesList'); ?>
        <a class="button-secondary  all-cases-link mx-auto"
           href="<?= get_permalink(pll_get_post(132, $current_lang)); ?>">
            <?= translate_and_output('all_cases'); ?>
            <svg class="button-secondary__icon flex-shrink-0" width="12" height="11">
                <use href="<?php get_image('sprite.svg#icon-second-carret-right'); ?>"></use>
            </svg>
        </a>
    </div>
</section>