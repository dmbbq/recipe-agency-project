<?php
$current_lang = pll_current_language();
?>

<section class="<?= (is_page(pll_get_post(128, $current_lang)) ) ? 'section--padding' : ''; ?>">
    <div class="container">
        <div class="section-header d-flex align-items-center justify-content-between">
            <h2 class="section-title-secondary">
                <?php the_field('blog_title', pll_get_post(119, $current_lang)); ?>
            </h2>
            <a class="button-secondary d-none d-md-block" href="<?= get_permalink(pll_get_post(124, $current_lang)); ?>">
                <?= translate_and_output('all_posts'); ?>
                <svg class="button-secondary__icon flex-shrink-0" width="12" height="11">
                    <use href="<?php get_image('sprite.svg#icon-second-carret-right'); ?>"></use>
                </svg>
            </a>
        </div>
        <?php get_template_part('templates/blogList'); ?>
        <a class="blog-link mx-auto d-md-none button-secondary" href="<?= get_permalink(pll_get_post(124, $current_lang)); ?>">
            <?= translate_and_output('all_posts'); ?>
            <svg class="button-secondary__icon flex-shrink-0" width="12" height="11">
                <use href="<?php get_image('sprite.svg#icon-second-carret-right'); ?>"></use>
            </svg>
        </a>
    </div>
</section>