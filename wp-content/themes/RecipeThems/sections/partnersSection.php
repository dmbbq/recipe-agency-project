<?php

?>

<section class="section section--padding">
    <div class="container">
        <div class="d-flex justify-content-between">
            <h2 class="section-title">
                <?php the_field('partners_title'); ?>
            </h2>
            <p class="">
                <?php the_field('partners_text'); ?>
            </p>
        </div>

        <?php get_template_part('templates/partnersList'); ?>

    </div>
</section>