<?php
$image_url = get_field('values_image');
$image_url_mob = get_field('values_image_mob');
?>

<section class="values">
    <div class="container d-flex flex-column justify-content-between h-100 gap-3">
        <div>
            <h2 class="section-title-secondary values-title">
                <?php the_field('values_title'); ?>
            </h2>
            <p class="values-text mb-0">
                <?php the_field('values_text'); ?>
            </p>
        </div>
        <?php the_field('values_list'); ?>
    </div>
</section>

<style>
    .values {
        background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.40) 0%, rgba(0, 0, 0, 0.40) 100%), url(<?= $image_url_mob; ?>);
        -webkit-background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.40) 0%, rgba(0, 0, 0, 0.40) 100%), url(<?= $image_url_mob; ?>);
        -moz-background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.40) 0%, rgba(0, 0, 0, 0.40) 100%), url(<?= $image_url_mob; ?>);
        -ms-background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.40) 0%, rgba(0, 0, 0, 0.40) 100%), url(<?= $image_url_mob; ?>);
        -o-background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.40) 0%, rgba(0, 0, 0, 0.40) 100%), url(<?= $image_url_mob; ?>);
    }

    @media screen and (min-width: 992px) {
        .values {
            background-image: linear-gradient(97deg, rgba(0, 0, 0, 0.40) 34.14%, rgba(0, 0, 0, 0.00) 70.79%), url(<?= $image_url; ?>);
            -webkit-background-image: linear-gradient(97deg, rgba(0, 0, 0, 0.40) 34.14%, rgba(0, 0, 0, 0.00) 70.79%), url(<?= $image_url; ?>);
            -moz-background-image: linear-gradient(97deg, rgba(0, 0, 0, 0.40) 34.14%, rgba(0, 0, 0, 0.00) 70.79%), url(<?= $image_url; ?>);
            -ms-background-image: linear-gradient(97deg, rgba(0, 0, 0, 0.40) 34.14%, rgba(0, 0, 0, 0.00) 70.79%), url(<?= $image_url; ?>);
            -o-background-image: linear-gradient(97deg, rgba(0, 0, 0, 0.40) 34.14%, rgba(0, 0, 0, 0.00) 70.79%), url(<?= $image_url; ?>);
        }
    }
</style>
