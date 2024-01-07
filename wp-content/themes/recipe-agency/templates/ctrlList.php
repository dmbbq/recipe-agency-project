<?php
$custom_class = $args['class'] ?? '';
?>

<ul class="ctrl-list <?= $custom_class; ?>">
    <li class="ctrl-list__item prev align-items-center justify-content-center">
        <svg class="ctrl-list__icon" width="10" height="18">
            <use href="<?php get_image('sprite.svg#icon-carret-left-rounded'); ?>"></use>
        </svg>
    </li>
    <li class="ctrl-list__item next align-items-center justify-content-center">
        <svg class="ctrl-list__icon" width="10" height="18">
            <use href="<?php get_image('sprite.svg#icon-carret-right-rounded'); ?>"></use>
        </svg>
    </li>
</ul>