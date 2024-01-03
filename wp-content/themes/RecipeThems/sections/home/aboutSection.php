<?php $link_to_post = get_field('benefits_button'); ?>

<section class="section about-section">
    <div class="container">
        <?php get_template_part('templates/ownersList'); ?>
        <h2 class="about-title text-center mx-auto">
            <?php the_field('about_recipe_title');?>
        </h2>
        <div class="row">
            <div class="col-lg-8 benefits-wrapper">
                <?php the_field('benefits_list'); ?>
            </div>
            <div class="col-lg-4 ">
                <a class="benefits-link" href="<?php echo get_permalink(pll_get_post(128)); ?>"
                   target="<?php echo $link_to_post['target']; ?>">
                    <?php the_field('benefits_button_text'); ?>
                </a>
            </div>
        </div>

    </div>
</section>



