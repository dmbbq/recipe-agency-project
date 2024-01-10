<?php
$args = array(
    'post_type' => 'cases',
    'taxonomy' => 'category',
    'hide_empty' => false,
    'exclude' => get_cat_ID('Uncategorized'),
);

$categories = get_categories($args);
?>

<ul class="filter-list flex-wrap d-none d-lg-flex">
    <li class="filter-list__item">
        <input type="checkbox" id="all" class="filter-list__input" value="all" checked>
        <label for="all" class="filter-list__label">
            <?= translate_and_output('all_services'); ?>
        </label>
    </li>
    <?php
    foreach ($categories as $category) {
        ?>
        <li class="filter-list__item">
            <input id="<?= $category->term_id; ?>" type="checkbox" class="filter-list__input" value="<?= $category->term_id; ?>">
            <label for="<?= $category->term_id; ?>" class="filter-list__label">
                <?= $category->name; ?>
            </label>
        </li>
        <?php
    }
    ?>
</ul>
