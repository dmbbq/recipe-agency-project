<section class="hero">
    <div class="container">
        <h1>
           <?php the_field('title'); ?>
        </h1>
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