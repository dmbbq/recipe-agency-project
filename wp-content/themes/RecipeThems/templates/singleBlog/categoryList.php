<?php
$categories = get_the_category(get_the_ID());

if ($categories) :
    ?>
    <ul class="d-flex category-list">
        <?php foreach ($categories as $category) : ?>
            <li class="category-list__item">
                    <?= esc_html($category->name); ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php
else :
    echo 'Цей пост не належить жодній категорії.';
endif;
?>
