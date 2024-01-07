<?php
$languages = pll_the_languages(array('raw' => 1));
$current_language = pll_current_language();
?>

<div class="d-flex align-items-center languages-wrapper">
    <svg class="languages-wrapper__icon" width="20" height="20">
        <use href="<?php get_image('sprite.svg#icon-planet'); ?>"></use>
    </svg>
    <ul class="languages-list d-flex">
        <?php foreach ($languages as $lang_code => $language) : ?>
            <?php if ($lang_code === $current_language) : ?>
                <li>
                    <a class="current languages-list__link text-uppercase fw-medium d-inline-block" href="<?php echo esc_url($language['url']); ?>">
                        <?php echo esc_html($language['name']); ?>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>

        <?php foreach ($languages as $lang_code => $language) : ?>
            <?php if ($lang_code !== $current_language) : ?>
                <li>
                    <a class="languages-list__link text-uppercase fw-medium d-inline-block" href="<?php echo esc_url($language['url']); ?>">
                        <?php echo esc_html($language['name']); ?>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</div>