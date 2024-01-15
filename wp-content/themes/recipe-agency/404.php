<?php
/*
Template Name: 404
*/

$current_lang = pll_current_language();
?>

<?= get_header(); ?>

<main id="not-found">
    <section class="section">
        <div class="container">
            <p class="not-found-accent">
                Error 404. Page not found
            </p>
            <h1 class="not-found-title">
                <?php the_field('404_title', pll_get_post(573, $current_lang)); ?>
            </h1>
            <p class="not-found-text">
                <?php the_field('404_text', pll_get_post(573, $current_lang)); ?>
            </p>
            <div class="button-wrapper d-lg-flex align-items-center justify-content-start">
                <a class="button-primary" href="/">
                    <?= translate_and_output('go_home'); ?>
                </a>
                <a class="button-secondary" href="<?= get_permalink(pll_get_post(140, $current_lang)); ?>">
                    <?= translate_and_output('our_services'); ?>
                </a>
            </div>
        </div>
    </section>
</main>

<style>

    .section {
        background-image: radial-gradient(50% 50% at 50% 50%, rgba(0, 0, 0, 0.00) 0%, #010101 99.48%),url(<?php the_field('404_image_mob',  pll_get_post(573, $current_lang)); ?>);
    }

    @media screen and (min-width: 992px) {
        .section {
            background-image: radial-gradient(50% 50% at 50% 50%, rgba(0, 0, 0, 0.00) 0%, #010101 99.48%), url(<?php the_field('404_image_desk',  pll_get_post(573, $current_lang)); ?>);
        }
    }
</style>


<?= get_footer(); ?>

