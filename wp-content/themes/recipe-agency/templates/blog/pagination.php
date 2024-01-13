<?php
$custom_class = $args['class'] ?? '';
$ctrl_visibility = $args['ctrl'] ?? ''
?>

<div class="pagination <?= $custom_class; ?>">
    <div class="pagination__item fw-medium d-inline-flex align-items-center justify-content-center first align-items-center justify-content-center <?= $ctrl_visibility; ?>">
        <svg class="pagination__icon" width="20" height="20">
            <use href="<?php get_image('sprite.svg#icon-double-carret-left'); ?>"></use>
        </svg>
    </div>
    <div class="pagination__item fw-medium d-inline-flex align-items-center justify-content-center prev align-items-center justify-content-center">
        <svg class="pagination__icon" width="20" height="20">
            <use href="<?php get_image('sprite.svg#icon-carret-left'); ?>"></use>
        </svg>
    </div>
    <div class="swiper-pagination"></div>
    <div class="pagination__item fw-medium d-inline-flex align-items-center justify-content-center next align-items-center justify-content-center">
        <svg class="pagination__icon" width="20" height="20">
            <use href="<?php get_image('sprite.svg#icon-carret-right'); ?>"></use>
        </svg>
    </div>
    <div class="pagination__item fw-medium d-inline-flex align-items-center justify-content-center last align-items-center justify-content-center <?= $ctrl_visibility; ?>">
        <svg class="pagination__icon" width="20" height="20">
            <use href="<?php get_image('sprite.svg#icon-double-carret-right'); ?>"></use>
        </svg>
    </div>
</div>