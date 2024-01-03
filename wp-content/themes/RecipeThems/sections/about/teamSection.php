<section class="section team-section">
    <div class="container">
        <div class="section-header d-flex justify-content-between align-items-center">
            <h2 class="section-title mb-0">
                <?php the_field('team_title'); ?>
            </h2>
            <?php get_template_part('templates/ctrlList');  ?>
        </div>
        <div class="swiper team-swiper init">
            <?php the_field('team_list'); ?>
        </div>
    </div>
</section>