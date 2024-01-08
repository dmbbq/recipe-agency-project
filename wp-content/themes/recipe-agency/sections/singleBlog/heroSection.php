<section class="hero">
    <div class="container d-flex align-items-end h-100">
        <div class="w-100">
            <h1 class="hero-title">
                <?php the_field('title'); ?>
            </h1>
            <div class="hero-content d-flex justify-content-between align-items-center">
                <?php get_template_part('templates/singleBlog/infoList'); ?>
                <?php get_template_part('templates/singleBlog/categoryList'); ?>
            </div>
        </div>
    </div>
</section>

<style>
    .hero {
        background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url(<?php the_field('single_hero_image'); ?>);
        -webkit-background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url(<?php the_field('single_hero_image'); ?>);
        -moz-background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url(<?php the_field('single_hero_image'); ?>);
        -ms-background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url(<?php the_field('single_hero_image'); ?>);
        -o-background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url(<?php the_field('single_hero_image'); ?>);
    }
</style>