<?php
$current_lang = pll_current_language();
$page = isset($args['page']) ? $args['page'] : 'home';
$title = isset($args['title']) ? $args['title'] : get_field('cta_title');
$text = isset($args['text']) ? $args['text'] : get_field('cta_text');
$image_url = isset($args['image_url']) ? $args['image_url'] : get_field('cta_image');
?>

<section class="section <?php echo $page; ?>" id="cta">
    <div class="container">
        <?php echo $title; ?>
        <?php echo do_shortcode('[cf7form cf7key="appointment"]'); ?>
        <p>
            <?php echo $text; ?>
        </p>
    </div>
</section>

<style>
    #cta {
        background-image: url(<?php echo $image_url; ?>);
    }
</style>
