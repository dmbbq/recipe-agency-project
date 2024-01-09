<?php
$current_lang = pll_current_language();
?>

<section class="hero main-section main-section--padding-mob">
    <div class="container">
        <h1 class="title">
            <?php the_field('our_services_title', pll_get_post(140, $current_lang)); ?>
        </h1>
        <?php get_template_part('templates/services/servicesList'); ?>
    </div>
</section>