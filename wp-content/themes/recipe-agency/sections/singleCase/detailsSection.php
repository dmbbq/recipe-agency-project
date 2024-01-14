<?php
$image_id = get_field('single_logo');
$link = get_field('single_site_link');
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
            <?php the_content(); ?>
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