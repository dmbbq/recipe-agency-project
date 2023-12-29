<?php
$roma = get_field('owners_roma');
$valik = get_field('owners_valik');
?>

<ul class="owners-list d-flex align-items-center justify-content-center position-relative">
    <li class="owners-list_item ">
        <?php echo wp_get_attachment_image($roma, 'full', false, array('class' => '')); ?>
    </li>
    <li class="owners-list_item ">
        <?php echo wp_get_attachment_image($valik, 'full', false, array('class' => '')); ?>
    </li>
    <li class="owners-list_itemLast">
        +10
    </li>
</ul>

