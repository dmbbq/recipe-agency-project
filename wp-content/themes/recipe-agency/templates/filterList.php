<?php
$id_type = $args['type'] ?? 'id';

$args = array(
    'post_type' => 'cases',
    'taxonomy' => 'category',
    'hide_empty' => false,
    'exclude' => get_cat_ID('Uncategorized'),
);

$categories = get_categories($args);
?>

<ul class="filter-list">
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
            <?php
            $checkbox_id = ($id_type === 'slug') ? $category->slug : $category->term_id;
            ?>
            <input id="<?= $checkbox_id; ?>" type="checkbox" class="filter-list__input" value="<?= $category->term_id; ?>">
            <label for="<?= $checkbox_id; ?>" class="filter-list__label">
                <?= $category->name; ?>
            </label>
        </li>
        <?php
    }
    ?>
</ul>
