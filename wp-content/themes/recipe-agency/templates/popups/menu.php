<div class="backdrop is-hidden" id="menu">
    <div class="menu popup d-flex flex-column justify-content-between ms-auto overflow-y-scroll">
        <div class="menu-wrapper d-flex align-items-center justify-content-between">
            <?= custom_theme_logo(); ?>
            <button class="hamburger hamburger--collapse d-flex align-items-center justify-content-center menu-button p-0 border-0 d-md-none"
                    type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
            </button>
        </div>
        <?php get_template_part('templates/navigation'); ?>
        <button class="button-primary flex-shrink-0 feedback-js">
            <?= translate_and_output('write_us'); ?>
        </button>
    </div>
</div>