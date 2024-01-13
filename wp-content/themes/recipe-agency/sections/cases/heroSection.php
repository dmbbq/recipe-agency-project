<section class="section--padding main-section main-section--padding-mob">
    <div class="container">
        <div class="cases-wrapper d-flex align-items-center justify-content-between">
            <h1 class="mb-0">
                <?php the_field('title'); ?>
            </h1>
            <button type="button" class="filter-button d-md-none">
                <svg class="filter-button__icon" width="45" height="45">
                    <use href="<?php get_image('sprite.svg#icon-filter'); ?>"></use>
                </svg>
            </button>
        </div>
        <?php get_template_part('templates/filterList'); ?>
        <div class="hero-content"></div>
    </div>
</section>