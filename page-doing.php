<?php

/* Template Name: Jak pracujemy */
get_header(); ?>

<main class="doing">
  <div class="doing__inner">
    <div class="doing__container container">
      <h2 class="doing__title main-title"
        data-aos="fade-zoom-in"
        data-aos-easing="ease-in-back"
        data-aos-delay="200"
        data-aos-offset="0"><?php the_field('doing__title')?></h2>
      <div class="doing__top">

        <div class="doing__top-items">

          <div class="doing__top-item first-items"
            data-aos="fade-up" 
            data-aos-easing="linear"
            data-aos-delay="200">
            <h3 class="doing__top-item-title"><?php the_field('doing__item-title1')?></h3>
            <p class="doing__top-item-text"><?php the_field('doing__item-text1')?></p>
            <a href="<?= get_permalink( 11 )?>" class="doing__item-link btn btn--blue">Składam Wniosek</a>
          </div>


          <?php if( have_rows('doing__items') ): ?>
            <div class="doing__items"
            data-aos="fade-up" 
                      data-aos-easing="linear"
                      data-aos-delay="200">
              <?php while( have_rows('doing__items') ): the_row(); 
                  $title = get_sub_field('doing__item-title');
                  $text = get_sub_field('doing__item-text');
                  ?>
                    <div class="doing__top-item list-item">
                      <h3 class="doing__top-item-title"><?= $title?></h3>
                      <p class="doing__top-item-text"><?= $text?></p>
                    </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
          
        </div>
      </div>

      <div class="doing__middle">
        <h2 class="doing__middle-title main-title"
          data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-delay="200"
          data-aos-offset="0"><?php the_field('middle-title')?></h2>
          <?php if( have_rows('doing__middle-items') ): ?>
              <div class="doing__middle-items"
              data-aos="fade-up" 
                      data-aos-easing="linear"
                      data-aos-delay="200">
                <?php while( have_rows('doing__middle-items') ): the_row(); 
                    $text = get_sub_field('text');
                    ?>
                      <div class="doing__middle-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/doing/files.png" alt="" class="doing__middle-image">
                        <p class="doing__middle-item-text"><?= $text?></p>
                      </div>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>
      </div>

      <div class="doing__bottom">
        <h2 class="doing__bottom-title main-title"
          data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-delay="200"
          data-aos-offset="0"><?php the_field('bottom-title')?></h2>

        <?php if( have_rows('doing__bottom-items') ): ?>
          <div class="doing__bottom-items">
            <?php while( have_rows('doing__bottom-items') ): the_row(); 
                $image = get_sub_field('image');
                $text = get_sub_field('text');
                ?>
                  <div class="doing__bottom-item"
                    data-aos="fade-up" 
                    data-aos-easing="linear"
                    data-aos-delay="200">
                    <img src="<?php echo $image?>" alt="" class="doing__bottom-image">
                    <p class="doing__bottom-item-text"><?php echo $text?></p>
                  </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
        <div class="doing__bottom-contact">
          <p class="doing__bottom-contact-text"><?php the_field('doing__bottom-contact-text')?></p>
          <p class="doing__bottom-contact-link doing__item-link btn btn--blue"><a href="<?= get_permalink( 11 )?>">Składam Wniosek</a></p>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>