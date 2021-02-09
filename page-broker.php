<?php

/* Template Name: Strefa pośrednika */
get_header(); ?>


<main class="broker">
  <div class="broker__inner">
    <div class="broker__container container">
      <div class="broker__top-title">
        <h2 class="broker__title"
        data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-offset="0"
          data-aos-duration="1000"><?php the_title(); ?></h2>
        <p class="broker__decoration"></p>
      </div>

      <div class="broker__top">
        <div class="broker__top-left">
          <div class="broker__top-items">

            <div class="broker__top-item"
            data-aos="fade-up" 
        data-aos-easing="linear"
        data-aos-delay="200">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/posrednik/graficzka1.png" alt="" class="broker__top-item-icon">
              <p class="broker__top-item-title"><?php the_field('broker__top-item-title1')?></p>
            </div>

            <div class="broker__top-item"
            data-aos="fade-up" 
        data-aos-easing="linear"
        data-aos-delay="200">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/posrednik/graficzka2.png" alt="" class="broker__top-item-icon">
              <p class="broker__top-item-title"><?php the_field('broker__top-item-title2')?></p>
            </div>

            <div class="broker__top-item"
            data-aos="fade-up" 
        data-aos-easing="linear"
        data-aos-delay="200">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/posrednik/graficzka3.png" alt="" class="broker__top-item-icon">
              <p class="broker__top-item-title"><?php the_field('broker__top-item-title3')?></p>
            </div>

          </div>
        </div>
        <div class="broker__top-right"
        data-aos="fade-zoom-in"
                        data-aos-easing="ease-in-back"
                        data-aos-offset="0"
                        data-aos-duration="1000">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/posrednik/ilustracja2.png" alt="" class="broker__top-right-image">
        </div>
      </div>

      <div class="broker__middle">
        <div class="middle-top">
          <h2 class="middle-top__title"
          data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-offset="0"
          data-aos-duration="1000"><?php the_field('middle-top__title')?></h2>
          <div class="middle-top__items"
          data-aos="fade-up" 
        data-aos-easing="linear"
        data-aos-delay="200">

            <div class="middle-top__item">
              <p class="middle-top__item-title"><?php the_field('middle-top__item-title1')?></p>
              <p class="middle-top__item-text"><?php the_field('middle-top__item-text1')?></p>
            </div>

            <div class="middle-top__item">
              <p class="middle-top__item-title"><?php the_field('middle-top__item-title2')?></p>
              <p class="middle-top__item-text"><?php the_field('middle-top__item-text2')?></p>
            </div>

            <div class="middle-top__item">
              <p class="middle-top__item-title"><?php the_field('middle-top__item-title3')?></p>
              <p class="middle-top__item-text"><?php the_field('middle-top__item-text3')?></p>
            </div>

          </div>
          <p class="middle-top__description"
          data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-offset="0"
          data-aos-duration="1000"><?php the_field('middle-top__description')?></p>
        </div>
        <div class="middle-bottom">
          <div class="middle-bottom__left">
            <h2 class="middle-bottom__left-title"
            data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-offset="0"
          data-aos-duration="1000"><?php the_field('middle-bottom__left-title')?></h2>
            <div class="middle-bottom__left-list"
            data-aos="fade-up" 
        data-aos-easing="linear"
        data-aos-delay="200">
              <?php if( have_rows('middle-bottom__left-list') ): ?>
                <?php while( have_rows('middle-bottom__left-list') ): the_row(); 
                  $text = get_sub_field('text');
                  ?>
                    <div class="middle-bottom__left-item">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/onas/kasa-mala.png" alt="" class="middle-bottom__left-icon">
                      <p class="middle-bottom__left-text"><?= $text; ?></p>
                    </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="middle-bottom__right"
          data-aos="fade-zoom-in"
                        data-aos-easing="ease-in-back"
                        data-aos-offset="0"
                        data-aos-duration="1000">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/posrednik/ilustracja.png" alt="" class="middle-bottom__right-image">
          </div>
        </div>
      </div>

      <div class="broker__bottom"
      data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-offset="0"
          data-aos-duration="1000">
        <div class="broker__bottom-left">

          <div class="broker__bottom-left-item">
            <p class="broker__bottom-left-text"
            ><?php the_field('broker__bottom-text1')?></p>
            <p class="broker__bottom-left-link broker__link-application btn btn--blue"><a href="<?= get_permalink( 11 )?>">Składam Wniosek</a></p>
          </div>

          <div class="broker__bottom-left-item">
            <p class="broker__bottom-left-text"><?php the_field('broker__bottom-text2')?></p>
            <p class="broker__bottom-left-link broker__link-contact btn btn--orange"><a href="<?= get_permalink( 17 )?>">Skontaktuj się z nami</a></p>
          </div>

        </div>
        <div class="broker__bottom-right">
          <div class="broker__bottom-right-item">
            <p class="broker__bottom-right-text"><?php the_field('broker__bottom-text3')?></p>
            <p class="broker__bottom-right-link broker__link-academy btn btn--purple"><a href="<?php the_field( 'coop__button-link', 17 )?>" target="_blank">Akademii Pośrednika Finansowego</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>