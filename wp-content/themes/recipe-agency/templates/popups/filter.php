<div class="backdrop is-hidden" id="filter">
    <div class="filter d-flex flex-column popup ms-auto overflow-y-scroll">
        <div class="filter-wrapper d-flex justify-content-between align-items-center">
            <h2 class="filter-title mb-0">
                <?= translate_and_output('services'); ?>
            </h2>
            <button class="hamburger hamburger--collapse filter-button p-0"
                    type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
            </button>
        </div>

        <?php get_template_part('templates/filterList', null, array('type' => 'slug')); ?>

        <ul class="buttons-list d-flex justify-content-between">
            <li class="buttons-list__item">
                <button class="buttons-list__button clean border-0" type="button">
                    <?= translate_and_output('clean'); ?>
                </button>
            </li>
            <li class="buttons-list__item">
                <button class="buttons-list__button border-0" type="button">
                    <?= translate_and_output('apply'); ?>
                </button>
            </li>
        </ul>
    </div>
</div>