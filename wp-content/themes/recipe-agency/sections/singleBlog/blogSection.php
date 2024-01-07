<section class="section">
    <div class="container">
        <div class="section-header d-flex align-items-center justify-content-between">
            <h2 class="section-title mb-0">
                <?= translate_and_output('same_posts'); ?>
            </h2>
            <a class="button-secondary" href="<?= get_permalink(pll_get_post(124)); ?>">
                <?= translate_and_output('all_posts'); ?>
                <svg class="button-secondary__icon" width="12" height="11">
                    <use href="<?php get_image('sprite.svg#icon-second-carret-right'); ?>"></use>
                </svg>
            </a>
        </div>
        <?php get_template_part('templates/singleBlog/blogList'); ?>
    <div>
</section>