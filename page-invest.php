<?php

/* Template Name: Strefa inwestora */
get_header(); ?>

<main class="invest">
  <div class="invest__inner">
    <div class="invest__container container">


      <div class="invest__top">
        <div class="invest__top-left">
          <h2 class="invest__top-title"
          data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-offset="0"
          data-aos-duration="1000"><?php the_field('invest__top-title')?></h2>
          <div class="invest__top-text"
          data-aos="fade-up" 
        data-aos-easing="linear"
        data-aos-delay="200"><?php the_field('invest__top-text')?></div>
        </div>
        <div class="invest__top-right"
        data-aos="fade-zoom-in"
                        data-aos-easing="ease-in-back"
                        data-aos-offset="0"
                        data-aos-duration="1000">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inwestor/ilustracja.png" alt="" class="invest__top-image">
        </div>
      </div>

      <div class="invest__middle">
        <h2 class="invest__middle-title"
        data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-offset="0"
          data-aos-duration="1000"><?php the_field('invest__middle-title')?></h2>
        <div class="invest__middle-items"
        data-aos="fade-up" 
        data-aos-easing="linear"
        data-aos-delay="200">

          <div class="invest__middle-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inwestor/ikona1.png" alt="" class="invest__middle-image">
            <div class="invest__middle-des">
              <h3 class="invest__middle-des-title"><?php the_field('invest__middle-des-title1')?></h3>
              <p class="invest__middle-des-text"><?php the_field('invest__middle-des-text1')?></p>
            </div>
          </div>
          
          <div class="invest__middle-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inwestor/ikona2.png" alt="" class="invest__middle-image">
            <div class="invest__middle-des">
              <h3 class="invest__middle-des-title"><?php the_field('invest__middle-des-title2')?></h3>
              <p class="invest__middle-des-text"><?php the_field('invest__middle-des-text2')?></p>
            </div>
          </div>
          
          <div class="invest__middle-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inwestor/ikona3.png" alt="" class="invest__middle-image">
            <div class="invest__middle-des">
              <h3 class="invest__middle-des-title"><?php the_field('invest__middle-des-title3')?></h3>
              <p class="invest__middle-des-text"><?php the_field('invest__middle-des-text3')?></p>
            </div>
          </div>
          
          <div class="invest__middle-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inwestor/ikona4.png" alt="" class="invest__middle-image">
            <div class="invest__middle-des">
              <h3 class="invest__middle-des-title"><?php the_field('invest__middle-des-title4')?></h3>
              <p class="invest__middle-des-text"><?php the_field('invest__middle-des-text4')?></p>
            </div>
          </div>
        </div>

      </div>
      <div class="invest__bottom"
      data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-offset="0"
          data-aos-duration="1000">
        <div class="invest__bottom-left">
          <p class="invest__bottom-left-text"><?php the_field('invest__bottom-left-text')?></p>
          <p class="invest__bottom-left-link btn btn--blue"><a href="<?= get_permalink( 17 )?>">Skontaktuj się z nami</a></p>
        </div>
        <div class="invest__bottom-right">
          <p class="invest__bottom-right-text"><?php the_field('invest__bottom-right-text')?></p>
          <div class="invest__bottom-right-buttons">
            <p class="invest__bottom-face-link btn btn--purple"><a href="<?php the_field('face', 17)?>" target="_blank">Facebook</a></p>
            <p class="invest__bottom-linked-link btn btn--orange"><a href="<?php the_field('linked', 17)?>" target="_blank">LinkedIn</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<?php get_footer(); ?>