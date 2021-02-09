<?php /* Template Name: Kontakt */
get_header(); ?>

<main class="page-contact">
  <div class="page-contact__inner">
    <div class="page-contact__container container">
      <div class="page-contact__top-title">
        <h2 class="page-contact__title"
        data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-offset="0"
          data-aos-duration="1000"><?php the_title(); ?></h2>
        <p class="page-contact__decoration"></p>
      </div>
      <div class="page-contact__body"
      data-aos="fade-up" 
        data-aos-easing="linear"
        data-aos-delay="200">


        <div class="page-contact__body-left">
          <p class="page-contact__text-bold"><?php the_field('page-contact__text-bold'); ?></p>
          <p class="page-contact__text"><?php the_field('page-contact__text'); ?></p>
          <div class="page-contact__contact-container">
            <p class="page-contact__phone page-contact__aline"><img class="page-contact__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/kontakt/tel.png" alt=""><a class="" href="tel:<?=get_field('tel');?>"><?php the_field('tel'); ?></a></p>
            <p class="page-contact__mail page-contact__aline"><img class="page-contact__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/kontakt/mail.png" alt=""><a class="" href="mailto:<?=get_field('mail');?>"><?php the_field('mail'); ?></a></p>

            <div class="page-contact__address-first">
              <p class="page-contact__address-normal page-contact__aline"><img class="page-contact__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/kontakt/Krakow.png" alt=""><?php the_field('krk')?><span><?php the_field('krk-bold')?></span></p>
              <p class="page-contact__address"><?php the_field('krk2')?></p>
              <p class="page-contact__address"><?php the_field('krk3')?></p>
            </div>

            <div class="page-contact__address-second">
              <p class="page-contact__address-normal page-contact__aline"><img class="page-contact__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/kontakt/Wawa.png" alt=""><?php the_field('waw')?><span><?php the_field('waw-bold')?></span></p>
              <p class="page-contact__address"><?php the_field('waw2')?></p>
              <p class="page-contact__address"><?php the_field('waw3')?></p>
              <p class="page-contact__address"><?php the_field('waw4')?></p>
            </div>

          </div>
        </div>


        <div class="page-contact__body-right" id="contact">
          <div class="page-contact__form">
          <h3 class="page-contact__form-title">Skontaktuj się z nami!</h3>
            <?= do_shortcode('[contact-form-7 id="62" title="Formularz"]')?>
          </div>
        </div>
      </div>


      <div class="page-contact__bottom">

        <div class="page-contact__follow follow">
          <p class="follow__text-bold"><?php the_field('follow__text-bold'); ?></p>
          <p class="follow__text"><?php the_field('follow__text'); ?></p>
          <div class="follow__buttons">
            <p class="follow__face btn btn--blue"><a href="<?php the_field('face')?>" target="_blank">Facebook</a></p>
            <p class="follow__linked btn btn--purple"><a href="<?php the_field('linked')?>" target="_blank">LinkedIn</a></p>
          </div>
        </div>

        <div class="page-contact__coop coop">
          <p class="coop__text-bold"><?php the_field('coop__text-bold'); ?></p>
          <p class="coop__text"><?php the_field('coop__text'); ?></p>
          <div class="coop__button">
            <a href="<?php the_field('coop__button-link')?>" target="_blank" class="coop__button-text btn btn--orange">Akademia Pośrednika Finansowego</a>
          </div>
        </div>

      </div>

    </div>
  </div>
</main>

<?php get_footer(); ?>