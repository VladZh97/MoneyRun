<?php
/**
* Template Name: Strona glowna
*/
get_header(); ?>

<div class="front-page">
        <div class="container">
            <section class="sec1">
                <div class="sec1__content" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="100">
                    <h1 ><?php the_field('title')?> <br> <span><?php the_field('title-orange')?></span></h1>
                    <a href="<?= get_permalink( 11 )?>" class="btn btn--orange">Składam wniosek</a>
                </div>
                <div class="sec1__img"
                data-aos="fade-zoom-in"
                        data-aos-easing="ease-in-back"
                        data-aos-offset="0"
                        data-aos-duration="1000">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/home_sec1.png" alt="homesec1">
                </div>

            </section>

            <section class="sec2">
                <div class="sec2__img"
                    data-aos="fade-zoom-in"
                     data-aos-easing="ease-in-back"
                     data-aos-delay="200"
                     data-aos-offset="0"
                >
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/home_sec2.png" alt="onas">
                </div>
                <div class="sec2__content" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="100">
                    <h3 class="main-header">O nas</h3>
                    <div class="sec2__text text-main--18" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="400">
                        <?php the_field('about-main', 5)?>
                    </div>
                    <a href="<?= get_permalink( 5 )?>" class="btn btn--blue btn--more">Więcej</a>
                </div>
            </section>

            <section class="sec3" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="100">
                <h3 class="main-header main-header--purple" 
                data-aos="fade-zoom-in"
                     data-aos-easing="ease-in-back"
                     data-aos-delay="200"
                     data-aos-offset="0">Oferta<span class="main-header__line"></span></h3>
                <div class="sec3__text-top text-main--22">
                    <?php the_field('offer')?>
                </div>
                <a href="<?= get_permalink( 7 )?>" class="btn btn--purple btn--more">Więcej</a>
                <div class="sec3-boxs">
                    <div class="sec3-box" data-aos="fade-up" data-aos-easing="linear">
                        <div class="sec3-box__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/oferta_ikona_1.png"
                                alt="Oferta">
                        </div>
                        <div class="sec3-box__text text-main--22">
                            <?php the_field('offer__item1')?>
                        </div>
                    </div>
                    <div class="sec3-box" data-aos="fade-up" data-aos-easing="linear">
                        <div class="sec3-box__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/oferta_ikona_2.png"
                                alt="onas">
                        </div>

                        <div class="sec3-box__text text-main--22">
                            <?php the_field('offer__item2')?>
                        </div>
                    </div>
                    <div class="sec3-box" data-aos="fade-up" data-aos-easing="linear">
                        <div class="sec3-box__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/oferta_ikona_3.png"
                                alt="onas">
                        </div>
                        <div class="sec3-box__text text-main--22">
                            <?php the_field('offer__item3')?>
                        </div>
                    </div>
                    <div class="sec3-box" data-aos="fade-up" data-aos-easing="linear">
                        <div class="sec3-box__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/oferta_ikona_4.png"
                                alt="onas">
                        </div>
                        <div class="sec3-box__text text-main--22">
                            <?php the_field('offer__item4')?>
                        </div>
                    </div>
                </div>
            </section>

            <div style="clear:both"></div>
            <section class="sec4">
                <h3 class="main-header main-header--orange"
                data-aos="fade-zoom-in"
                     data-aos-easing="ease-in-back"
                     data-aos-delay="200"
                     data-aos-offset="0"><?php the_field('why-we')?><span class="main-header__line"></span>
                </h3>
                <div class="sec4-boxs">

                    <div class="sec4-box" data-aos="fade-up" data-aos-easing="linear">
                        <div class="sec4-box__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/Why MR_ikona_1.png"
                                alt="onas">
                        </div>
                        <div class="sec4-box__text text-main--22">
                            <?php the_field('why-we__item1')?>
                        </div>
                    </div>
                    <div class="sec4-box" data-aos="fade-up" data-aos-easing="linear">
                        <div class="sec4-box__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/Why MR_ikona_2.png"
                                alt="onas">
                        </div>
                        <div class="sec4-box__text text-main--22">
                            <?php the_field('why-we__item2')?>
                        </div>
                    </div>
                    <div class="sec4-box" data-aos="fade-up" data-aos-easing="linear">
                        <div class="sec4-box__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/Why MR_ikona_3.png"
                                alt="onas">
                        </div>
                        <div class="sec4-box__text text-main--22">
                            <?php the_field('why-we__item3')?>
                        </div>
                    </div>
                </div>
                <div style="clear:both"></div>
                <div class="sec4__text-bottom"
                    data-aos="fade-zoom-in"
                     data-aos-easing="ease-in-back"
                     data-aos-delay="200"
                     data-aos-offset="0"
                >
                    <?php the_field('why-we__desc')?>
                </div>
            </section>

            <section class="sec5" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="200">
                <h3 class="main-header main-header--blue">
                    <span class="main-header__wrap"
                    data-aos="fade-zoom-in"
                     data-aos-easing="ease-in-back"
                     data-aos-delay="200"
                     data-aos-offset="0"><?php the_field('bottom-title')?></span>
                    <span class="main-header__line"></span>
                </h3>
                <a href="<?= get_permalink( 9 )?>" class="btn btn--blue btn--more">Więcej</a>
                <div class="sec5-content">
                    <div class="sec5-content__text ">
                        <?php the_field('bottom-text')?>
                    </div>
                    <a href="<?= get_permalink( 11 )?>" class="btn btn--orange" >SKŁADAM WNIOSEK</a>
                </div>
            </section>

            <section class="sec6">
                <h3 class="main-header main-header--blue"
                data-aos="fade-zoom-in"
                     data-aos-easing="ease-in-back"
                     data-aos-delay="200"
                     data-aos-offset="0">
                    Strefa pośrednika
                    <span class="main-header__line"></span>
                </h3>
                <div class="sec6__content">
                    <div class="sec6__content-left" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="200">
                        <div class="sec6-box">
                            <div class="sec6-box__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/posrednikico.png"
                                    alt="onas">
                            </div>
                            <h5 class="sec6-box__text"><?php the_field('broker__item1')?></h5>
                        </div>
                        <div class="sec6-box">
                            <div class="sec6-box__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/posrednikico2.png"
                                    alt="onas">
                            </div>

                            <h5 class="sec6-box__text"><?php the_field('broker__item2')?></h5>
                        </div>
                        <div class="sec6-box">
                            <div class="sec6-box__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/posrednikico3.png"
                                    alt="onas">
                            </div>
                            <h5 class="sec6-box__text"><?php the_field('broker__item3')?></h5>
                        </div>
                        <div class="sec6__text">
                            <?php the_field('broker__text')?>
                        </div>
                        <a href="<?= get_permalink( 13 )?>" class="btn btn--blue btn--more">Więcej</a>
                    </div>
                    <div class="sec6__img"
                    data-aos="fade-zoom-in"
                        data-aos-easing="ease-in-back"
                        data-aos-offset="0"
                        data-aos-duration="1000">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/posrednikbigimg.png">
                    </div>
                </div>
            </section>

            <section class="sec7">
                <h3 class="main-header main-header--orange"
                data-aos="fade-zoom-in"
                     data-aos-easing="ease-in-back"
                     data-aos-delay="200"
                     data-aos-offset="0">
                    Strefa inwestora <span class="main-header__line"></span>
                </h3>
                <div class="sec7__content">
                    <div class="sec7__content-left" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="200">
                        <div class="sec7__text">
                            <?php the_field('invest__des')?>
                        </div>
                        <a href="<?= get_permalink( 15 )?>" class="btn btn--orange btn--more">Więcej</a>
                    </div>
                    <div class="sec7__img"
                    data-aos="fade-zoom-in"
                        data-aos-easing="ease-in-back"
                        data-aos-offset="0"
                        data-aos-duration="1000">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inwestor/ilustracja.png">
                    </div>
                </div>
            </section>

        </div> <!-- end containrt -->
        <section class="sec8" id='opinie'>
            <div class="container">
                <h3 class="main-header main-header--blue"
                data-aos="fade-zoom-in"
                     data-aos-easing="ease-in-back"
                     data-aos-delay="200"
                     data-aos-offset="0">
                    <?php the_field('opinions')?><span class="main-header__line"></span>
                </h3>
            </div>
            <div class="sec8-slider">

                <div class="swiper-container" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="200">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php if( have_rows('opinion') ): ?>
                            <?php while( have_rows('opinion') ): the_row(); 
                                $text = get_sub_field('text');
                                $title = get_sub_field('name');
                                $pos = get_sub_field('position');
                                ?>
                                <div class="swiper-slide">
                                    <div class="swiper-slide__inside">
                                        <div class="swiper-slide__text">
                                            <?php echo $text?>
                                        </div>
                                        <h4 class="swiper-slide__name"><?php echo $title?></h4>
                                        <h5 class="swiper-slide__position"><?php echo $pos?></h5>
                                    </div>
                                    <div class="swiper-slide__inside-border"></div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>
        </section>

        <section class="sec9">
            <div class="container">
                <h3 class="main-header main-header--purple"
                data-aos="fade-zoom-in"
                     data-aos-easing="ease-in-back"
                     data-aos-delay="200"
                     data-aos-offset="0">
                    Kontakt <span class="main-header__line"></span>
                </h3>
                <div class="contact">
                    <div class="row">
                        <div class="col-md-6"  data-aos="fade-up" data-aos-easing="linear" data-aos-delay="200">
                            <div class="contact-wrap">
                                <div class="contact-top">
                                    <div class="contact-top__header text-main--22">
                                        <p><b><?php the_field('call-bold')?></b><br>
                                            <?php the_field('call-normal')?></p>
                                    </div>
                                    <div class="contact-top__ico">
                                        <a href="tel:<?php echo get_field('tel', 17)?>"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/home/phone-ico.png"
                                                alt="fb"><?php the_field('tel', 17)?></a>

                                        <a href="mailto:<?php echo get_field('mail', 17)?>"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/kontakt/mail.png"
                                                alt="fb"><?php the_field('mail', 17)?></a>
                                    </div>
                                </div>

                                <div class="contact-social">
                                    <div class="contact-social__header text-main--22"><b><?php the_field('follow-social')?></b>
                                    </div>
                                    <div class="contact-social__icons">
                                        <a href="<?php the_field('face', 17)?>"  target="_blank"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/home/fb-icon.png"
                                                alt="fbico"></a>
                                        <a href="<?php the_field('linked', 17)?>"  target="_blank"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/home/Li-con.png"
                                                alt="liico"></a>
                                    </div>
                                </div>
                                <div class="contact-info">
                                    <div class="contact-info__header text-main--22"><b>Jesteś pośrednikiem?</b></div>
                                    <div class="contact-info__text-link text-main--22">
                                        Zapraszamy do
                                        <a href="<?php the_field('coop__button-link', 17)?>" target="_blank">Akademii Pośrednika Finansowego</a>
                                        <a href="<?php the_field('coop__button-link', 17)?>" class="contact-info__text-link--fb" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/fb-icon.png"
                                                alt="fbico">
                                        </a>
                                    </div>
                                    <div class="text-main--22">
                                        <?php the_field('broker-footer__text')?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6"                   
                         data-aos="fade-zoom-in"
                     data-aos-easing="ease-in-back"
                     data-aos-delay="200"
                     data-aos-offset="0">
                            <div class="contact-form">
                                <h3 class="page-contact__form-title">Skontaktuj się z nami!</h3>
                                <?= do_shortcode('[contact-form-7 id="62" title="Formularz"]')?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div><!-- end background -->
</div>
<?php get_footer(); ?>