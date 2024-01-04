<?php
$categories = get_the_category(get_the_ID());

if ($categories) :
    ?>
    <ul class="d-flex category-list">
        <?php foreach ($categories as $category) : ?>
            <li class="category-list__item">
                <a class="category-list__link" href="<?= esc_url(get_category_link($category->term_id)); ?>">
                    <?= esc_html($category->name); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php
else :
    echo 'Цей пост не належить жодній категорії.';
endif;
?>
