<?php
$facebook_link = get_field('facebook_link', 119);
$instagram_link = get_field('instagram_link', 119);
?>

    <ul class="socials-list d-flex align-items-center">
        <li class="socials-list__item">
            <a class="socials-list__link" href="<?php echo $facebook_link['url']; ?>"
               target="<?php echo $facebook_link['target']; ?>">
                <svg class="socials-list__icon" width="40" height="40">
                    <use href="<?php get_image('sprite.svg#icon-fb'); ?>"></use>
                </svg>
            </a>
        </li>
        <li class="socials-list__item">
            <a class="socials-list__link" href="<?php echo $instagram_link['url']; ?>"
                target="<?php echo $instagram_link['target']; ?>">
                <svg class="socials-list__icon" width="40" height="40">
                    <use href="<?php get_image('sprite.svg#icon-ig'); ?>"></use>
                </svg>
            </a>
        </li>
    </ul>


