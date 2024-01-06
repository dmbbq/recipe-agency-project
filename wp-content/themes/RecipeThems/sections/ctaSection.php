<?php
$current_lang = pll_current_language();

$page = $args['page'] ?? 'home';
$title = $args['title'] ?? get_field('cta_title');
$text = $args['text'] ?? get_field('cta_text');
$image_url = $args['image_url'] ?? get_field('cta_image');

$is_mailing = is_page(pll_get_post(124, $current_lang)) || is_singular('blog');
?>

<section class="<?= (!is_page(pll_get_post(119, $current_lang))) ? 'section' : ''; ?> section--padding" id="cta">
    <div class="container">
        <div class="cta-wrapper <?= $page; ?>">
            <?= preg_match('/<h2>/', $title) ? $title : "<h2>$title</h2>"; ?>
            <p class="cta-text <?= $is_mailing ? 'd-flex' : ''; ?>">
                <?php if ($is_mailing): ?>
                    <svg class="cta-text__icon" width="28" height="28">
                        <use href="<?= get_image('sprite.svg#icon-mail-check'); ?>"></use>
                    </svg>
                <?php endif; ?>
                <?= $text; ?>
            </p>

            <?php if ($is_mailing): ?>
                <?= do_shortcode('[cf7form cf7key="mailing"]'); ?>
            <?php else: ?>
                <?= do_shortcode('[cf7form cf7key="appointment"]'); ?>
                <p class="cta-link mb-0">
                    <?= translate_and_output('privacy_text'); ?>
                    <a href="<?= get_permalink(pll_get_post(283)); ?>">
                        <?= translate_and_output('privacy_link'); ?>
                    </a>
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>

<style>
    .cta-wrapper {
        background-image: url(<?= $image_url; ?>);
    }
</style>
