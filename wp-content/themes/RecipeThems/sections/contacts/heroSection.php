<?php
$tel_roma = get_field('number_roma');

$loc_valik = get_field('number_valik');

$location = get_field('address_link');

$email = get_field('email_link');

$contacts_image = get_field('info_image');

?>


<section class="section" id="">
    <div class="container">
        <div class="contacts-wrapper d-lg-flex">
            <div class="contacts-wrapper_content">
                <?php get_template_part('templates/ownersList'); ?>
                <ul class="contacts-list">
                    <li class="contacts-list_item ">
                        <p class="contacts-list_text">
                            <?php the_field('info_number'); ?>
                        </p>

                        <a class="contacts-list__link" href="<?php echo $tel_roma['url']; ?>"
                           target="<?php echo $tel_roma['target']; ?>">
                            <?php echo $tel_roma['title']; ?>
                        </a>
                        <a class="contacts-list__link" href="<?php echo $loc_valik['url']; ?>"
                           target="<?php echo $loc_valik['target']; ?>">
                            <?php echo $loc_valik['title']; ?>
                        </a>
                    </li>
                    <li class="contacts-list_item">
                        <p class="contacts-list_text">
                            <?php the_field('info_address'); ?>
                        </p>
                        <a class="contacts-list__link" href="<?php echo $location['url']; ?>"
                           target="<?php echo $location['target']; ?>">
                            <?php echo $location['title']; ?>
                        </a>
                    </li>
                    <li class="contacts-list_item">
                        <p class="contacts-list_text">
                            <?php the_field('info_email'); ?>
                        </p>
                        <a class="contacts-list__link" href="<?php echo $email['url']; ?>"
                           target="<?php echo $email['target']; ?>">
                            <?php echo $email['title']; ?>
                        </a>
                    </li>
                    <li class="contacts-list_item">
                        <p class="contacts-list_text">
                            <?php the_field('info_shedule'); ?>
                        </p>
                        <p class="contacts-list__link">
                            <?php the_field('shedule_text'); ?>
                        </p>
                    </li>
                </ul>
            </div>
            <div class="contacts-wrapper__thumb d-none d-lg-block col-lg-5">
                <?php echo wp_get_attachment_image($contacts_image, 'full', false, array('class' => '')); ?>
            </div>
        </div>

    </div>
</section>
