<section class="hero">
    <div class="container">
        <div class="hero-content-wrapper d-lg-flex justify-content-between align-items-center">

            <h1 class="hero-title">
                <?php the_field('hero_title');?>
            </h1>
            <p class="hero-uppertitle">
                <svg class="pre-title_icon d-none d-lg-flex" width="77" height="63">
                    <use href="<?php get_image('sprite.svg#icon-arrow_icon'); ?>"></use>
                </svg>
                <?php the_field('hero_pre_title');?>
            </p>
            <a class="hero-button" href="#cta">
                <?php the_field('hero_button');?>
            </a>
        </div>
    </div>
</section>

<style>
    .hero {
        background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.00) 0%, rgba(0, 0, 0, 0.45) 100%), url(<?php the_field('hero_bg_mob'); ?>);
    }

    @media screen and (min-width: 992px) {
        .hero {
            background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.00) 0%, rgba(0, 0, 0, 0.45) 100%), url(<?php the_field('hero_bg_desk'); ?>);
        }
    }
</style>