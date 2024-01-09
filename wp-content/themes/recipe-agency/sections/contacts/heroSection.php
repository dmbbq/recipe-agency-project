<?php
$tel_roma = get_field('number_roma');

$tel_valik = get_field('number_valik');

$location = get_field('address_link');

$email = get_field('email_link');

$contacts_image = get_field('info_image');
?>

<section class="hero main-section main-section--padding-mob">
    <div class="container">
        <h1 class="title">
            <?php the_field('contacts_title');?>
        </h1>
        <div class="contacts-wrapper justify-content-between row">
            <div class="col-lg-6">
                <div class="contacts-wrapper__content">
                    <?php get_template_part('templates/ownersList'); ?>
                    <ul class="contacts-list">
                        <li class="contacts-list__item">
                            <p class="contacts-list__text">
                                <?php the_field('info_number'); ?>
                            </p>

                            <a class="contacts-list__link" href="<?php echo $tel_roma['url']; ?>"
                               target="<?php echo $tel_roma['target']; ?>">
                                <?php echo $tel_roma['title']; ?>
                            </a>
                            <a class="contacts-list__link" href="<?php echo $tel_valik['url']; ?>"
                               target="<?php echo $tel_valik['target']; ?>">
                                <?php echo $tel_valik['title']; ?>
                            </a>
                        </li>
                        <li class="contacts-list__item">
                            <p class="contacts-list__text">
                                <?php the_field('info_address'); ?>
                            </p>
                            <a class="contacts-list__link" href="<?php echo $location['url']; ?>"
                               target="<?php echo $location['target']; ?>">
                                <?php echo $location['title']; ?>
                            </a>
                        </li>
                        <li class="contacts-list__item">
                            <p class="contacts-list__text">
                                <?php the_field('info_email'); ?>
                            </p>
                            <a class="contacts-list__link" href="<?php echo $email['url']; ?>"
                               target="<?php echo $email['target']; ?>">
                                <?php echo $email['title']; ?>
                            </a>
                        </li>
                        <li class="contacts-list__item">
                            <p class="contacts-list__text">
                                <?php the_field('info_shedule'); ?>
                            </p>
                            <p class="contacts-list__link m-0">
                                <?php the_field('shedule_text'); ?>
                            </p>
                        </li>
                    </ul>
                    <div class="">
                        <p class="contacts-list__text">
                            <?php the_field('socials_list_text'); ?>
                        </p>
                        <?php get_template_part('templates/socialsList'); ?></div>
                </div>
            </div>
            <div class="col-lg-5 d-none d-xl-block">
                <div class="contacts-wrapper__thumb ">
                    <?php echo wp_get_attachment_image($contacts_image, 'full', false, array('class' => '')); ?>
                </div>
            </div>
        </div>

    </div>
</section>
