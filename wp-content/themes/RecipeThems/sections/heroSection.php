<section class="" id="hero">
    <div class="container">
        <div class="hero-content-wrapper d-lg-flex justify-content-between align-items-center">

            <h1 class="title hero-title">
                <?php the_field('hero_title');?>
            </h1>
            <h2 class="hero-pre-title">
                <svg class="pre-title_icon d-none d-lg-flex" width="77" height="63">
                  <use href="<?php get_image('sprite.svg#icon-arrow_icon'); ?>"></use>
                 </svg>
                <?php the_field('hero_pre_title');?>
            </h2>
            <a class="hero-button button-style" href="#cta">
                <?php the_field('hero_button');?>

                <svg class="arrow-btn" width="12" height="11">
                    <use href="<?php get_image('sprite.svg#icon-arrowbtn'); ?>"></use>
                </svg>
            </a>
        </div>



    </div>
</section>

<style>

    #hero {
        background: linear-gradient(180deg, rgba(0, 0, 0, 0.00) 0%, rgba(0, 0, 0, 0.45) 100%), url(<?php the_field('hero_bg_mob'); ?>);
    }

    @media screen and (min-width: 992px) {
        #hero {
            background: linear-gradient(180deg, rgba(0, 0, 0, 0.00) 0%, rgba(0, 0, 0, 0.45) 100%), url(<?php the_field('hero_bg_desk'); ?>) 0px -103px / 102.812% 117.5% no-repeat;
        }
    }


</style>