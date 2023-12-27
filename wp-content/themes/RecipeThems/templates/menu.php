<div class="backdrop is-hidden" id="menu">
    <div class="menu d-flex flex-column justify-content-between ms-auto">
        <div class="menu-wrapper d-flex align-items-center justify-content-between">
            <div class="logo-thumb">
                <?php the_custom_logo(); ?>
            </div>
            <button class="hamburger hamburger--collapse d-flex align-items-center justify-content-center menu-button p-0 border-0 d-md-none"
                    type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
            </button>
        </div>
        <div class="menu-content">
            <?php get_template_part('templates/navigation'); ?>

        </div>
        <a id="appointment" class="button-cta button-style d-flex align-items-center justify-content-center" href="#cta">

            <?php the_field('menu_button');?>

            <svg class="arrow-btn" width="12" height="11">
                <use href="<?php get_image('sprite.svg#icon-arrowbtn'); ?>"></use>
            </svg>

        </a>
    </div>
</div>