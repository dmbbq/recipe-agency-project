<?php
$current_lang = pll_current_language();
$is_main_section = is_page(pll_get_post(140, $current_lang));
?>

<section class="<?= $is_main_section ? 'main-section main-section--padding-mob' : 'section'; ?>">
    <div class="container">
        <?php $title_tag = $is_main_section ? 'h1' : 'h2'; ?>
        <<?= $title_tag ?> class="<?= $is_main_section ? 'title' : 'section-title'; ?>">
        <?php the_field('our_services_title', pll_get_post(140, $current_lang)); ?>
    </<?= $title_tag ?>>
    <?php get_template_part('templates/services/servicesList'); ?>
    </div>
</section>
