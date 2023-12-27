<section class="section" id="servicesCta">
    <div class="container">
        <div class="cta-wrapper">

          <h2 class="cta-title">
              <?php the_field('cta_title');?>
          </h2>
        <p class="cta-text">
            <?php the_field('cta_text');?>
        </p>
            <?php echo do_shortcode('[contact-form-7 id="aea56ef" title="NazarCTA"]');?>
        </div>


    </div>
</section>

<style>
    .cta-wrapper{
        background-image: url(<?php the_field('cta_image_nazar'); ?>);
    }
</style>
