<?php

/* Template Name: O nas */
get_header(); ?>


<div class="page-about-us subpage">


    <div class="container">
        <section class="sec1">
        <h3 class="main-header main-header-second"
        data-aos="fade-up" 
                    data-aos-easing="linear" 
                    data-aos-delay="400"
        ><?php the_title(); ?></h3>
            <div class="sec1__img"
                data-aos="fade-zoom-in"
                 data-aos-easing="ease-in-back"
                 data-aos-delay="200"
                 data-aos-offset="0">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/home_sec2.png" alt="onas">
            </div>
            <div class="sec1__content">
                <h3 class="main-header" 
                    data-aos="fade-up" 
                    data-aos-easing="linear">
                    <?php the_title(); ?>
                </h3>
                <div class="sec1__text text-main--18"
                    data-aos="fade-up" 
                    data-aos-easing="linear" 
                    data-aos-delay="400"
                >
                    <?php the_field('about-main')?>
                </div>
            </div>
        </section>
        <section class="sec2">
            <div class="sec2__content text-main--18"
                data-aos="fade-up" 
                data-aos-easing="linear">
            <?php the_field('about-main2')?>
            </div>
        </section>
        <section class="sec3"
            data-aos="fade-up" 
            data-aos-easing="linear">
            <h2 class="main-header main-hader--blue"><?php the_field('title')?></h2>
                <?php if( have_rows('sec3-list') ): ?>
                    <ul class="sec3-list">
                        <?php while( have_rows('sec3-list') ): the_row(); 
                                $text = get_sub_field('text');
                                ?>
                            <li class="sec3-list__item"><?php echo $text?></li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
        </section>
        <section class="sec4"
                data-aos="fade-up" 
                data-aos-easing="linear">
            <h2 class="main-header main-hader--blue"><?php the_field('team-title')?></h2>
            <div class="sec4__text-top text-main--18">
                <?php the_field('team-des')?>
            </div>
            <div class="sec4-crew">
                <div class="sec4-crew__box"
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="200"
                    data-aos-offset="0"
                    data-aos-duration="800">
                    <div class="sec4-crew__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/onas/foto1.png"
                            alt="Natalia Maruszczak">
                    </div>
                    <div class="sec4-crew__content">
                        <h3 class="sec4-crew__header"><?php the_field('person-title1')?></h3>
                        <div class="sec4-crew__text text-main--18">
                            <?php the_field('person-des1')?>
                        </div>
                        <div class="sec4-crew__contact">
                            <div class="sec4-crew__email">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/onas/mail.png"
                                    alt="email">
                                <a href="mailto:<?= get_field('mail1')?>" class="sec4-crew__email"><?php the_field('mail1')?></a>
                            </div>
                            <a href="mailto:<?= get_field('mail1')?>" class="sec4-crew__btn btn btn--blue">Napisz do Natalii</a>
                        </div>
                    </div>
                </div>
                <div class="sec4-crew__box"
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="200"
                    data-aos-offset="0"
                    data-aos-duration="800">
                    <div class="sec4-crew__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/onas/foto2.png"
                            alt="Natalia Maruszczak">
                    </div>
                    <div class="sec4-crew__content">
                        <h3 class="sec4-crew__header"><?php the_field('person-title2')?></h3>
                        <div class="sec4-crew__text text-main--18">
                        <?php the_field('person-des2')?>
                        </div>
                        <div class="sec4-crew__contact">
                            <div class="sec4-crew__email">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/onas/mail.png"
                                    alt="email">
                                <a href="mailto:<?= get_field('mail2')?>" class="sec4-crew__email"><?php the_field('mail2')?></a>
                            </div>
                            <a href="mailto:<?= get_field('mail2')?>" class="sec4-crew__btn btn btn--blue">Napisz do Łukasza</a>
                        </div>
                    </div>
                </div>
                <div class="sec4-crew__box"
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="200"
                    data-aos-offset="0"
                    data-aos-duration="800"
                    >
                    <div class="sec4-crew__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/onas/foto3.png"
                            alt="Natalia Maruszczak">
                    </div>
                    <div class="sec4-crew__content">
                        <h3 class="sec4-crew__header"><?php the_field('person-title3')?></h3>
                        <div class="sec4-crew__text text-main--18">
                            <?php the_field('person-des3')?>
                        </div>
                        <div class="sec4-crew__contact">
                            <div class="sec4-crew__email">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/onas/mail.png"
                                    alt="email">
                                <a href="mailto:<?= get_field('mail3')?>" class="sec4-crew__email"><?php the_field('mail3')?></a>
                            </div>
                            <a href="mailto:<?= get_field('mail3')?>" class="sec4-crew__btn btn btn--blue">Napisz do Anny</a>
                        </div>
                    </div>
                </div>
                <div class="sec4-crew__box"
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="200"
                    data-aos-offset="0"
                    data-aos-duration="800">
                    <div class="sec4-crew__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/onas/foto4.png"
                            alt="Natalia Maruszczak">
                    </div>
                    <div class="sec4-crew__content">
                        <h3 class="sec4-crew__header"><?php the_field('person-title4')?></h3>
                        <div class="sec4-crew__text text-main--18">
                            <?php the_field('person-des4')?>
                        </div>
                        <div class="sec4-crew__contact">
                            <div class="sec4-crew__email">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/onas/mail.png"
                                    alt="email">
                                <a href="mailto:<?= get_field('mail4')?>" class="sec4-crew__email"><?php the_field('mail4')?></a>
                            </div>
                            <a href="mailto:<?= get_field('mail4')?>" class="sec4-crew__btn btn btn--blue">Napisz do Aleksandry</a>
                        </div>
                    </div>
                </div>
                <div class="sec4-crew__box"
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="200"
                    data-aos-offset="0"
                    data-aos-duration="800">
                    <div class="sec4-crew__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/onas/foto5.png"
                            alt="Natalia Maruszczak">
                    </div>
                    <div class="sec4-crew__content">
                        <h3 class="sec4-crew__header"><?php the_field('person-title5')?></h3>
                        <div class="sec4-crew__text text-main--18">
                            <?php the_field('person-des5')?>
                        </div>
                        <div class="sec4-crew__contact">
                            <div class="sec4-crew__email">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/onas/mail.png"
                                    alt="email">
                                <a href="mailto:<?= get_field('mail5')?>" class="sec4-crew__email"><?php the_field('mail5')?></a>
                            </div>
                            <a href="mailto:<?= get_field('mail5')?>" class="sec4-crew__btn btn btn--blue">Napisz do
                                Natalii</a>
                        </div>
                    </div>
                </div>
                <div class="sec4-crew__box"
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="200"
                    data-aos-offset="0"
                    data-aos-duration="800">
                    <div class="sec4-crew__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/onas/foto6.png"
                            alt="Natalia Maruszczak">
                    </div>
                    <div class="sec4-crew__content">
                        <h3 class="sec4-crew__header"><?php the_field('person-title6')?></h3>
                        <div class="sec4-crew__text text-main--18">
                        <?php the_field('person-des6')?>
                        </div>
                        <div class="sec4-crew__contact">
                            <div class="sec4-crew__email">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/onas/mail.png"
                                    alt="email">
                                <a href="mailto:<?= get_field('mail6')?>" class="sec4-crew__email"><?php the_field('mail6')?></a>
                            </div>
                            <a href="mailto:<?= get_field('mail6')?>" class="sec4-crew__btn btn btn--blue">Napisz do Elwiry</a>
                        </div>
                    </div>
                </div>
                <div class="sec4-crew__box"
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="200"
                    data-aos-offset="0"
                    data-aos-duration="800">
                    <div class="sec4-crew__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/onas/foto7.png"
                            alt="Natalia Maruszczak">
                    </div>
                    <div class="sec4-crew__content">
                        <h3 class="sec4-crew__header"><?php the_field('person-title7')?></h3>
                        <div class="sec4-crew__text text-main--18">
                        <?php the_field('person-des7')?>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="sec5">
        <div class="order__form">
            <?= do_shortcode('[contact-form-7 id="355" title="Polecenie"]')?>
        </div>
            <h2 class="main-header main-header--purple"
                data-aos="fade-up" 
                data-aos-easing="linear"
                data-aos-delay="200"><?php the_field('title3')?></h2>
            <div class="sec5__boxs">
                <div class="sec5__box"
                data-aos="fade-up" 
                data-aos-easing="linear"
                data-aos-delay="200">
                    <div class="sec5__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/onas/ikona1.png" alt="leasing">
                    </div>
                    <div class="sec5__content  text-main--18">
                        <?php the_field('item1')?>
                        <a href="#" class="sec5__btn btn btn--purple">Poproś o polecenie</a>
                    </div>
                </div>
                <div class="sec5__box"
                data-aos="fade-up" 
                data-aos-easing="linear"
                data-aos-delay="200">
                    <div class="sec5__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/onas/ikona2.png" alt="leasing">
                    </div>
                    <div class="sec5__content  text-main--18">
                    <?php the_field('item2')?>
                        <a href="#" class="sec5__btn btn btn--purple">Poproś o polecenie</a>
                    </div>
                </div>
                <div class="sec5__box"
                data-aos="fade-up" 
                data-aos-easing="linear"
                data-aos-delay="200">
                    <div class="sec5__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/onas/ikona3.png" alt="leasing">
                    </div>
                    <div class="sec5__content  text-main--18">
                        <?php the_field('item3')?>
                        <a href="#" class="sec5__btn btn btn--purple">Poproś o polecenie</a>
                    </div>
                </div>
                <div class="sec5__box"
                data-aos="fade-up" 
                data-aos-easing="linear"
                data-aos-delay="200">
                    <div class="sec5__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/onas/ikona4.png" alt="leasing">
                    </div>
                    <div class="sec5__content  text-main--18">
                        <?php the_field('item4')?>
                        <a href="#" class="sec5__btn btn btn--purple">Poproś o polecenie</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>