<section class="section section--padding main-section--padding-mob">
    <div class="container">
        <?php get_template_part('templates/breadCrumbs'); ?>
        <h1>
            <?php the_field('privacy_policy_title'); ?>
        </h1>
        <div class="d-flex align-items-center justify-content-center">
            <?php the_field('general_provisions_list'); ?>
        </div>
    </div>
</section>