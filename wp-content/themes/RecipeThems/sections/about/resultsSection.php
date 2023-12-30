<section class="results section">
    <div class="container">
        <div class="section-header row">
            <div class="col-lg-3">
                <?php get_template_part('templates/ownersList'); ?>
            </div>
            <div class="col-lg-9">
                <h2 class="results-title mb-0">
                    <strong>
                        <?php echo get_bloginfo('name') . ' — '; ?>
                    </strong>
                      <?php the_field('results_title'); ?>
                </h2>
            </div>
        </div>
        <?php the_field('results_list'); ?>
    </div>
</section>