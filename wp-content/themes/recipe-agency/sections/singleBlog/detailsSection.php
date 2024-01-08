<section class="section details overflow-visible">
    <div class="container">
        <div class="d-lg-flex align-items-lg-start">
            <aside class="details-aside">
                <h2 class="details-aside__title">
                    <?= translate_and_output('author'); ?>
                </h2>
                <?php get_template_part('templates/singleBlog/authorsList'); ?>
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
            </aside>
            <div class="details-content">
                <div class="details-content__item">
                    <?php the_content(); ?>
                </div>
                <div class="details-content__item">
                    <span class="details-content__span d-inline-block">
                    <?= translate_and_output('keywords'); ?>
                </span>
                    <?= get_template_part('templates/singleBlog/categoryList'); ?>
                    <span class="details-content__span d-inline-block">
                    <?= translate_and_output('share'); ?>
                </span>
                    <div class="d-flex align-items-center">
                        <?= do_shortcode('[addtoany]'); ?>
                        <?php get_template_part('templates/singleBlog/infoList'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>