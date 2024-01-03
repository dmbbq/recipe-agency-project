<section class="values">
    <div class="container d-flex flex-column justify-content-between h-100">
            <div>
                <h2 class="section-title values-title">
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
        background-image: linear-gradient(97deg, rgba(0, 0, 0, 0.40) 34.14%, rgba(0, 0, 0, 0.00) 70.79%), url(<?php the_field('values_image'); ?>);
        -webkit-background-image: linear-gradient(97deg, rgba(0, 0, 0, 0.40) 34.14%, rgba(0, 0, 0, 0.00) 70.79%), url(<?php the_field('values_image'); ?>);
        -moz-background-image: linear-gradient(97deg, rgba(0, 0, 0, 0.40) 34.14%, rgba(0, 0, 0, 0.00) 70.79%), url(<?php the_field('values_image'); ?>);
        -ms-background-image: linear-gradient(97deg, rgba(0, 0, 0, 0.40) 34.14%, rgba(0, 0, 0, 0.00) 70.79%), url(<?php the_field('values_image'); ?>);
        -o-background-image: linear-gradient(97deg, rgba(0, 0, 0, 0.40) 34.14%, rgba(0, 0, 0, 0.00) 70.79%), url(<?php the_field('values_image'); ?>);
    }
</style>
