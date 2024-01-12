<section class="section">
    <div class="container">
        <div class="adverting-wrapper d-block d-lg-flex flex-lg-column flex-xl-row">
            <div class="adverting-wrapper__content">

                <?php the_field('single_advert_title'); ?>
                <?php the_field('single_advert_text'); ?>
            </div>

            <div class="adverting-wrapper__gallery flex-shrink-0">
                <div class="adverting-swiper swiper init">
                    <?php the_field('single_advert_gallery'); ?>
                </div>
            </div>
        </div>

    </div>
</section>
