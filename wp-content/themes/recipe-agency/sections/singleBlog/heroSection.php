<?php
$image_url = get_field('single_hero_image');
$image_url_mob = get_field('single_hero_image_mob');
?>

<section class="hero">
    <div class="container d-flex align-items-end h-100">
        <div class="w-100">
            <h1 class="hero-title">
                <?php the_field('title'); ?>
            </h1>
            <div class="hero-content d-md-flex justify-content-md-between align-items-md-center">
                <?php get_template_part('templates/singleBlog/infoList'); ?>
                <?php get_template_part('templates/tagList'); ?>
            </div>
        </div>
    </div>
</section>

<style>
    .hero {
        background-image:  linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url(<?= $image_url_mob; ?>);
        -webkit-background-image:  linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url(<?= $image_url_mob; ?>);
        -moz-background-image:  linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url(<?= $image_url_mob; ?>);
        -ms-background-image:  linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url(<?= $image_url_mob; ?>);
        -o-background-image:  linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url(<?= $image_url_mob; ?>);
    }

    @media screen and (min-width: 768px){
        .hero {
            background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url(<?= $image_url; ?>);
            -webkit-background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url(<?= $image_url; ?>);
            -moz-background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url(<?= $image_url; ?>);
            -ms-background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url(<?= $image_url; ?>);
            -o-background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url(<?= $image_url; ?>);
        }
    }
</style>