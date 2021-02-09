<?php

/* Template Name: Wniosek */
get_header(); ?>

<main class="request">
  <div class="request__inner">
    <div class="order__form">
      <div class="popup__container">
      <div class="close"></div>
      <p class="popup__text"><?php the_field('obowiazek')?></p>
      </div>
    </div>
    <div class="request__container container">
      <div class="request__top">
        <div class="request__top-left">
          <h1 class="request__top-left-title"
          data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-offset="0"><?php the_field('title')?></h1>
          <p class="request__top-link btn btn--blue"
          data-aos-duration="1000"
          data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-offset="0"
          data-aos-duration="1000"><a href="#request-form">Składam Wniosek</a></p>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/request/ilustracja2.png" alt="" class="request__top-image"                         data-aos="fade-zoom-in"
                        data-aos-easing="ease-in-back"
                        data-aos-offset="0"
                        data-aos-duration="1000">
        </div>
      </div>
      <div class="request__middle" id="request-form"
        data-aos="fade-up" 
        data-aos-easing="linear"
        data-aos-delay="200">
        <?= do_shortcode('[contact-form-7 id="109" title="Wniosek"]')?>
      </div>
      <div class="request__bottom">
        <div class="request__bottom-contact">
          <p class="request__bottom-contact-text"><?php the_field('contact-text')?></p>
          <p class="request__bottom-contact-link btn btn--blue"><a href="<?= get_permalink( 17 )?>">Skontaktuj się z nami</a></p>
        </div>
      </div>
    </div>
  </div>

</main>

<?php get_footer(); ?>