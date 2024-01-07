<?php
$tel_roma = get_field('number_roma', 136);

$tel_valik = get_field('number_valik', 136);

$email = get_field('email_link', 136);

?>

<footer class="footer">
    <div class="container">

        <div class="d-lg-flex justify-content-between footer-wrapper">
            <div class="footer-wrapper-one">

                <div class="d-flex footer-thumb--mob">
                    <?php the_custom_logo(); ?>

                    <div class="d-lg-none d-flex">
                        <?php get_template_part('templates/languagesList'); ?>
                    </div>
                </div>
                <div class="d-none d-lg-flex footer-thumb--desk">
                    <?php get_template_part('templates/socialsList'); ?>

                    <?php get_template_part('templates/languagesList'); ?>
                </div>
                <div class="d-flex justify-content-between footer-content--mob">
                    <div class="">
                        <p class="upper-nav">
                            Навігація по сайту
                        </p>
                        <nav class="main-nav">
                            <?php get_template_part('templates/navigation', null, array('location' => 'menu-header')); ?>
                        </nav>
                    </div>
                    <div class="d-flex flex-column d-lg-none">
                        <p class="upper-nav">
                            Послуги
                        </p>
                        <?php get_template_part('templates/footerServices'); ?>
                    </div>
                </div>
            </div>


            <div class="footer-wrapper__item">
                <p class="footer-content__text">
                    <?php the_field('footer_text'); ?>
                </p>
                <button class="button-primary ">
                    <?php translate_and_output('write_us'); ?>
                </button>

                <div class="d-flex justify-content-between footer-content">
                    <div class="d-none d-lg-block">
                        <p class="upper-nav">
                            Послуги
                        </p>
                        <?php get_template_part('templates/footerServices'); ?>
                    </div>
                    <div class="d-flex justify-content-between justify-content-lg-around justify-content-xl-between flex-lg-column footer-info">
                        <div class="">
                            <p class="upper-nav">
                                Номер телефону
                            </p>
                            <ul class="contacts-list">
                                <li class="contacts-list__item">
                                    <a class="contacts-list__link" href="<?php echo $tel_roma['url']; ?>"
                                       target="<?php echo $tel_roma['target']; ?>">
                                        <?php echo $tel_roma['title']; ?>
                                    </a>
                                </li>
                                <li>
                                    <a class="contacts-list__link" href="<?php echo $tel_valik['url']; ?>"
                                       target="<?php echo $tel_valik['target']; ?>">
                                        <?php echo $tel_valik['title']; ?>
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div class="mail-wrapper d-none d-lg-block">
                            <p class="upper-nav">
                                Електронна пошта
                            </p>
                            <a class="contacts-list__link" href="<?php echo $email['url']; ?>"
                               target="<?php echo $email['target']; ?>">
                                <?php echo $email['title']; ?>
                            </a>
                        </div>
                        <div class="d-lg-none">
                            <?php get_template_part('templates/socialsList'); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="footer-bottom d-flex flex-column flex-lg-row">
            <a class="footer-bottom__info" href="#">Політика конфіденційності</a>
            <p class="footer-bottom__info">2019 — 2023 © All rights reserved</p>
            <a class="footer-bottom__info" href="#">Дизайн сайту</a>
        </div>
    </div>


    </div>
</footer>
</div>

<?php get_template_part('templates/menu'); ?>

<?php wp_footer(); ?>

</body>

</html>

<style>
    @media screen and (min-width: 992px) {
        .footer {
            background-image: url(<?php the_field('footer_image_bg'); ?>);
        }
    }
</style>