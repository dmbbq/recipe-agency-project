<?php
$processes_image = get_field('processes_image');
?>


<section class="section" id="processes">
    <div class="container">
        <div class="processes-wrapper d-lg-flex ">

            <div class="processes-wrapper__content d-flex flex-column justify-content-between">

                <?php the_field('processes_title'); ?>
                <p>
                    <?php the_field('processes_text'); ?>
                </p>
                <a class="processes-wrapper__link d-flex align-items-center justify-content-center" href="#">
                    <?php translate_and_output('leave_statement'); ?>
                </a>
            </div>
            <div class="processes-wrapper__thumb">
                <?php echo wp_get_attachment_image($processes_image, 'full', false, array('class' => '')); ?>
            </div>
        </div>
    </div>
</section>
