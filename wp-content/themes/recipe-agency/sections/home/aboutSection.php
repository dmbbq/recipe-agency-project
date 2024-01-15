<?php
$current_lang = pll_current_language();
?>

<section class="section section--padding about-section position-relative">
    <div class="container">
        <?php get_template_part('templates/ownersList'); ?>
        <h2 class="about-title text-center mx-auto">
            <?php the_field('about_recipe_title'); ?>
        </h2>
        <div class="row ">
            <div class="col-xxl-8 benefits-wrapper">
                <?php the_field('benefits_list'); ?>
            </div>
            <div class="col-md-6 col-xxl-4 ms-auto">
                <a class="benefits-link" href="<?= get_permalink(pll_get_post(128, $current_lang)); ?>">
                    <?php the_field('benefits_button_text'); ?>
                </a>
            </div>
        </div>
    </div>
</section>
