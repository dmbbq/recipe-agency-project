<?php
$views = get_post_meta(get_the_ID(), 'post_views', true);
$post_date = get_the_date('d.m.Y');
?>

<ul class="info-list d-flex">
    <li class="info-list__item d-flex align-items-center">
        <svg class="info-list__item" width="19.2253" height="14">
            <use href="<?php get_image('sprite.svg#icon-eye'); ?>"></use>
        </svg>
        <?php
        echo intval($views) . ' ';
        echo translate_and_output('views');
        ?>
    </li>
    <li class="info-list__item d-flex align-items-center">
        <svg class="info-list__item" width="17.851" height="20">
            <use href="<?php get_image('sprite.svg#icon-calendar'); ?>"></use>
        </svg>
        <?php echo date('d.m.Y', strtotime($post_date)); ?>
    </li>
</ul>