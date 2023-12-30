<section class="section about">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h2 class="section-title about-title">
                    <?php the_field('about_title'); ?>
                </h2>
                <?php the_field('about_text'); ?>
                <button class="button-primary">
                    <?php translate_and_output('write_us'); ?>
                </button>
            </div>
            <div class="col-lg-8">
                <div class="about-swiper swiper init">
                    <?php the_field('about_gallery'); ?>
                </div>
            </div>
        </div>
    </div>
</section>