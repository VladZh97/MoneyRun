<?php

/* Template Name: Oferta */
get_header(); ?>
<div class="page-offer subpage">
    <div class="container">
        <section class="sec1">
        <div class="order__form">
            <?= do_shortcode('[contact-form-7 id="356" title="Oferta"]')?>
        </div>
            
            <h2 class="main-header main-hader--blue"
                data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="200"
                data-aos-offset="0"><?php the_field('title')?></h2>
            <div class="sec1-boxs">
                <div class="sec1-box"
                data-aos="fade-up" 
                data-aos-easing="linear"
                data-aos-delay="200">
                    <div class="sec1-box__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/oferta/ikona5.png" alt="ico">
                    </div>
                    <h3 class="sec1-box__header"><?php the_field('sec1-title1')?></h3>
                    <div class="sec1-box__content text-main--18">
                        <?php the_field('sec1-des1')?>
                    </div>
                    <a href="<?= get_permalink( 11 )?>" class="sec1-box__btn btn btn--purple">SKŁADAM WNIOSEK</a>
                </div>
                <div class="sec1-box"
                data-aos="fade-up" 
                data-aos-easing="linear"
                data-aos-delay="200">
                    <div class="sec1-box__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/oferta/ikona6.png" alt="ico">
                    </div>
                    <h3 class="sec1-box__header"><?php the_field('sec1-title2')?></h3>
                    <div class="sec1-box__content text-main--18">
                    <?php the_field('sec1-des2')?>
                    </div>
                    <a href="<?= get_permalink( 11 )?>" class="sec1-box__btn btn btn--purple">SKŁADAM WNIOSEK</a>
                </div>
                <div class="sec1-box"
                data-aos="fade-up" 
                data-aos-easing="linear"
                data-aos-delay="200">
                    <div class="sec1-box__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/oferta/ikona7.png" alt="ico">
                    </div>
                    <h3 class="sec1-box__header"><?php the_field('sec1-title3')?></h3>
                    <div class="sec1-box__content text-main--18">
                    <?php the_field('sec1-des3')?>
                    </div>
                    <a href="<?= get_permalink( 11 )?>" class="sec1-box__btn btn btn--purple">SKŁADAM WNIOSEK</a>
                </div>
                <div class="sec1-box"
                data-aos="fade-up" 
                data-aos-easing="linear"
                data-aos-delay="200">
                    <div class="sec1-box__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/oferta/ikona8.png" alt="ico">
                    </div>
                    <h3 class="sec1-box__header"><?php the_field('sec1-title4')?></h3>
                    <div class="sec1-box__content text-main--18">
                    <?php the_field('sec1-des4')?>
                    </div>
                    <a href="<?= get_permalink( 11 )?>" class="sec1-box__btn btn btn--purple">SKŁADAM WNIOSEK</a>
                </div>
                <div class="sec1-box"
                data-aos="fade-up" 
                data-aos-easing="linear"
                data-aos-delay="200">
                    <div class="sec1-box__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/oferta/ikona9.png" alt="ico">
                    </div>
                    <h3 class="sec1-box__header"><?php the_field('sec1-title5')?></h3>
                    <div class="sec1-box__content text-main--18">
                    <?php the_field('sec1-des5')?>
                    </div>
                    <a href="<?= get_permalink( 11 )?>" class="sec1-box__btn btn btn--purple">SKŁADAM WNIOSEK</a>
                </div>
                <div class="sec1-box"
                data-aos="fade-up" 
                data-aos-easing="linear"
                data-aos-delay="200">
                    <div class="sec1-box__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/oferta/ikona10.png" alt="ico">
                    </div>
                    <h3 class="sec1-box__header"><?php the_field('sec1-title6')?></h3>
                    <div class="sec1-box__content text-main--18">
                    <?php the_field('sec1-des6')?>
                    </div>
                    <a href="<?= get_permalink( 17 )?>" class="sec1-box__btn btn btn--purple popup__btn">INNA SYTUACJA</a>
                </div>
            </div>
        </section>
        <section class="sec2">
            <h2 class="main-header main-header--purple"
                data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="200"
                data-aos-offset="0"><?php the_field('title2')?></h2>
            <div class="sec2-boxs"
                data-aos="fade-up" 
                data-aos-easing="linear"
                data-aos-delay="200">
                <div class="sec2-box">
                    <h3 class="sec2-box__header"><?php the_field('title-list1')?></h3>
                        <?php if( have_rows('sec2-list--orange') ): ?>
                            <ul class="sec2-list sec2-list--orange">
                                <?php while( have_rows('sec2-list--orange') ): the_row(); 
                                    $text = get_sub_field('text');
                                    ?>
                                    <li class="sec2-list__item"><?php echo $text?></li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                </div>
                <div class="sec2-box">
                    <h3 class="sec2-box__header"><?php the_field('title-list2')?></h3>
                    <?php if( have_rows('sec2-list') ): ?>
                        <ul class="sec2-list">
                                <?php while( have_rows('sec2-list') ): the_row(); 
                                    $text = get_sub_field('text');
                                    ?>
                                    <li class="sec2-list__item"><?php echo $text?></li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="sec3">
            <h2 class="main-header main-header--orange"
                data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="200"
                data-aos-offset="0"><?php the_field('title3')?></h2>
            <div class="sec3-boxs">
                <div class="sec3-box"
                data-aos="fade-up" 
                data-aos-easing="linear"
                data-aos-delay="200">
                    <?php if( have_rows('sec3-list') ): ?>
                        <ul class="sec3-list">
                                <?php while( have_rows('sec3-list') ): the_row(); 
                                    $text = get_sub_field('text');
                                    ?>
                                    <li class="sec3-list__item"><?php echo $text?></li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                </div>
                <div class="sec3-box"
                data-aos="fade-up" 
                data-aos-easing="linear"
                data-aos-delay="200">
                    <?php if( have_rows('sec3-list-right') ): ?>
                        <ul class="sec3-list sec3-list-right">
                                <?php while( have_rows('sec3-list-right') ): the_row(); 
                                    $text = get_sub_field('text');
                                    ?>
                                    <li class="sec3-list__item"><?php echo $text?></li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="sec4">
            <span><?php the_field('title4')?></span>
            <a href="<?= get_permalink( 11 )?>" class="sec4__btn btn btn--blue">SKŁADAM WNIOSEK</a>
        </section>
    </div>
</div>
<?php get_footer(); ?>