<?php
$image_id = get_field('single_logo');
$link = get_field('single_site_link');
$indexes_visibility = get_field('single_indexes_visibility');
$results_visibility = get_field('single_results_visibility');
?>

<section class="details">
    <div class="container">
        <div class="details-info row">
            <div>
                <?=
                $image_id
                    ? wp_get_attachment_image($image_id, 'full', false, array('class' => ''))
                    : '<p class="details-info__text mb-0">' . translate_and_output('project_info') . '</p>';
                ?>
            </div>
            <div>
                <?php the_field('single_info_list'); ?>
            </div>
        </div>
        <div class="details-content mx-auto">
            <?php the_field('single_content'); ?>
            <?php
            if ($indexes_visibility) {
                ?>
                <h2>
                    <?php the_field('single_indexes_title'); ?>
                </h2>
                <div class="indexes-list">
                    <?php the_field('single_indexes_list'); ?>
                </div>
                <?php
            }
            if ($results_visibility) {
                ?>
                <h2>
                    <?php the_field('single_results_title'); ?>
                </h2>
                <p>
                    <?php the_field('single_results_text'); ?>
                </p>

                <div class="single-case-cta-wrapper d-lg-flex align-items-lg-center justify-content-lg-between">
                    <?php the_field('single_cta_title'); ?>
                    <button type="button" class="button-primary feedback-js">
                        <?= translate_and_output('write_us'); ?>
                    </button>
                </div>
                <?php
            }
            ?>
            <?php
            if ($link) {
                ?>
                <a class="details-link button-secondary" href="<?= $link['url']; ?>"
                   target="<?= $link['target']; ?>">
                    <?= translate_and_output('watch_site'); ?>
                    <svg class="details-link__icon" width="12" height="11">
                        <use href="<?php get_image('sprite.svg#icon-second-carret-right'); ?>"></use>
                    </svg>
                </a>
                <?php
            }
            ?>
        </div>
    </div>
</section>