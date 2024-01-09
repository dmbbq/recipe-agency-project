<section class="section details overflow-visible">
    <div class="container">
        <div class="d-xl-flex align-items-xl-start">
            <aside class="details-aside">
                <h2 class="details-aside__title">
                    <?= translate_and_output('author'); ?>
                </h2>
                <?php get_template_part('templates/singleBlog/authorsList'); ?>
                <?php get_template_part('templates/singleBlog/asideCta'); ?>
            </aside>
            <div class="details-content">
                <div class="details-content__item">
                    <?php the_content(); ?>
                </div>
                <div class="details-content__item flex-lg-row-reverse gap-5 align-items-lg-end d-lg-flex justify-content-lg-between d-xl-block">
                    <div>
                        <span class="details-content__span d-inline-block">
                            <?= translate_and_output('keywords'); ?>
                        </span>
                        <?= get_template_part('templates/tagList'); ?>
                        <span class="details-content__span d-inline-block">
                            <?= translate_and_output('share'); ?>
                        </span>
                        <div class="d-md-flex align-items-md-center">
                            <?= do_shortcode('[addtoany]'); ?>
                            <?php get_template_part('templates/singleBlog/infoList'); ?>
                        </div>
                    </div>
                    <?php get_template_part('templates/singleBlog/asideCta'); ?>
                </div>
            </div>
        </div>
    </div>
</section>