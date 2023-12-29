<?php
$current_lang = pll_current_language();
$page = isset($args['page']) ? $args['page'] : 'home';
$title = isset($args['title']) ? $args['title'] : get_field('cta_title');
$text = isset($args['text']) ? $args['text'] : get_field('cta_text');
$image_url = isset($args['image_url']) ? $args['image_url'] : get_field('cta_image');
?>

<section class="section" id="cta">
    <div class="container">
        <div class="cta-wrapper <?php echo $page; ?>">
            <?php echo $title; ?>
            <p class="cta-text">
                <?php echo $text; ?>
            </p>
            <?php echo do_shortcode('[cf7form cf7key="appointment"]'); ?>
            <p class="cta-link mb-0">
                <?php translate_and_output('privacy_text'); ?>
                <a href="<?php echo get_permalink(pll_get_post(283)); ?>">
                    <?php translate_and_output('privacy_link'); ?>
                </a>
            </p>
        </div>
    </div>
</section>

<style>
    .cta-wrapper {
        background-image: url(<?php echo $image_url; ?>);
    }
</style>
