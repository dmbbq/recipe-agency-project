<?php
$processes_image = get_field('processes_image');
?>

<section class="section processes-section">
    <div class="container">
        <div class="processes-wrapper row flex-column-reverse flex-md-row">
            <div class="col-lg-6 p-0">
                <div class="processes-wrapper__content d-flex flex-column justify-content-between h-100">
                    <?php the_field('processes_title'); ?>
                    <p>
                        <?php the_field('processes_text'); ?>
                    </p>
                    <a class="processes-wrapper__link d-flex align-items-center justify-content-center" href="#">
                        <?php translate_and_output('leave_statement'); ?>
                    </a>
                </div>
            </div>
           <div class="col-lg-6 p-0 position-relative">
               <div class="processes-wrapper__thumb overflow-hidden ">
                   <?php echo wp_get_attachment_image($processes_image, 'full', false, array('class' => '')); ?>
               </div>
               <div class="position-absolute image-text-wrapper d-none d-lg-flex">
                   <svg class="" width="78" height="63">
                     <use href="<?php get_image('sprite.svg#icon-procesess'); ?>"></use>
                    </svg>
                   <p class="processes-image-text m-0">
                       <?php the_field('processes_text_in_image');?>
                   </p>
               </div>

           </div>
        </div>
    </div>
</section>