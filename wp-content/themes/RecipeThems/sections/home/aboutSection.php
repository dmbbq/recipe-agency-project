<?php
$link_to_post = get_field('benefits_button');

?>





<section class="section" id="about">
    <div class="container">
        <?php get_template_part('templates/ownersList'); ?>
        <h2 class="about_title mx-auto">
            <?php the_field('about_recipe_title');?>
        </h2>
        <div class="row">
            <div class="col-lg-8 benefits-thumb">
                <?php the_field('benefits_list'); ?>
                <div class="col-lg-4 link-to-post">
                    <a href=""
                       target="<?php echo $link_to_post['target']; ?>"
                    >
                        <?php the_field('benefits_button_text'); ?>
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>
