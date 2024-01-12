<section class="section--padding results">
    <div class="container">
        <h2 class="section-title results-title">
            <?php the_field('single_results_title');?>
        </h2>
        <?php get_template_part('templates/singleService/casesList');?>
        <a class="button-secondary  all-cases-link mx-auto" href="">
            <?= translate_and_output('all_cases'); ?>
        </a>
    </div>
</section>