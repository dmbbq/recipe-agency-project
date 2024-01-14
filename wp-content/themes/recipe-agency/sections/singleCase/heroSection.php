<?php
$link = get_field('single_site_link');
$stats = get_field('stats');
?>

<section class="hero">
    <div class="container d-flex align-items-end h-100 d-lg-block">
        <div class="d-lg-flex flex-lg-column justify-content-lg-between">
            <div>
                <h1 class="hero-title">
                    <?php the_field('single_title'); ?>
                </h1>
                <p class="hero-text <?= $stats ? 'hero-text--margin' : ''; ?>">
                    <?php the_field('card_text'); ?>
                </p>
            </div>
            <div class="hero-wrapper d-flex flex-column-reverse flex-md-row justify-content-md-between align-items-md-end">
                <div class="hero-info d-flex flex-column-reverse flex-lg-row align-items-lg-center">
                    <?php
                    get_template_part('templates/tagList');
                    if ($link) {
                        ?>
                        <div class="hero-content d-flex align-items-center">
                            <button class="hero-content__button" type="button">
                                <svg class="hero-content__icon" width="35" height="35">
                                    <use href="<?php get_image('sprite.svg#icon-copy-link'); ?>"></use>
                                </svg>
                            </button>
                            <div class="hero-content__link">
                                <span class="d-block">
                                    <?= translate_and_output('site_link'); ?>
                                </span>
                                <a class="fw-medium d-block" href="<?= $link['url']; ?>" target="<?= $link['target']; ?>">
                                    <?= $link['title']; ?>
                                </a>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                </div>
                <?= $stats ? $stats : '' ?>
            </div>
        </div>
    </div>
</section>

<style>
    .hero {
        background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url(<?= the_field('single_image_mob'); ?>);
    }

    @media screen and (min-width: 992px) {
        .hero {
            background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url(<?= the_field('single_image_desk'); ?>);
        }
    }
</style>