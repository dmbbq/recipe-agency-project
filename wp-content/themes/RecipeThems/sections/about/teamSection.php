<?php
$team_count = wp_count_posts('team')->publish;
$ctrlListClass = ($team_count >= 5) ? '' : 'd-none';
?>

<section class="section team-section">
    <div class="container">
        <div class="section-header d-flex justify-content-between align-items-center">
            <h2 class="section-title mb-0">
                <?php the_field('team_title'); ?>
            </h2>
            <?php get_template_part('templates/ctrlList', null, array('class' => $ctrlListClass)); ?>
        </div>
        <?php get_template_part('templates/about/teamList'); ?>
    </div>
</section>
