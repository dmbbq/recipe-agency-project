<?php
$tags = get_the_tags(get_the_ID());

if ($tags) :
    ?>
    <ul class="d-flex flex-wrap tag-list">
        <?php foreach ($tags as $tag) : ?>
            <li class="tag-list__item">
                <?= esc_html($tag->name); ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php
endif;
?>
