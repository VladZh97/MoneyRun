<?php get_header();

?>



<main class="post">

    <div class="post__inner">

        <div class="post__container container">

            <div class="post__top">

                <h2 class="post__top-title"

                    data-aos="fade-zoom-in"

                    data-aos-easing="ease-in-back"

                    data-aos-offset="0"

                    data-aos-duration="1000">Blog</h2>

                <div class="post__crumble">

                     <a href="<?= get_home_url();?>/blog/<?php echo  get_the_category( $id )[0]->slug?>" class="post__crumble-link"><?php echo  get_the_category( $id )[0]->name;?></a>

                    <span></span>

                    <p class="post__crumble-title"><?php the_title(); ?></p>

                </div>

            </div>

            <div class="post__image"

                data-aos="fade-up" 

                data-aos-easing="linear"

                data-aos-delay="200">

                <h1 class="post__image-title"><?php the_title(); ?></h1>

                <div class="post__image__bottom">

                    <p class="post__image-date"><?php echo get_the_date(); ?>, <?php the_field('autor') ?></p>

                    <div class="post__img"><?php the_post_thumbnail('full'); ?></div>

                </div>

            </div>

            <div class="post__main"

            data-aos="fade-up" 

                data-aos-easing="linear"

                data-aos-delay="200">

                <div class="post__nav">

                    <button class="post__nav-category btn btn--purple">Kategorie</button>

                </div>

                <div class="post__main-left category__left">

                    <?php

                        $args = array(

                            'hide_empty' => false,

                            'order' => 'ASC',

                            'orderby' => 'ID',

                            'exclude' => '1'

                        );

                        $terms = get_terms( 'category', $args );

                            echo '<div class="category__list"><ul class="category__list-items">

                            <div class="close"></div><li class="category__item category__btn btn btn--purple category__item--active">

                            <a href="' . get_permalink( 300 ) . '">Najnowsze artykuły</a></li>';

                            foreach ( $terms as $term ) {

                                $class = ( is_category( $term->name ) ) ? 'active' : '';

                                echo '<li class="category__item category__btn btn btn--purple ' . $class . '"><a href="' . get_term_link( $term ) . '" class="category__link">' . $term->name . '</a></li>';

                            }

                            echo '</ul></div>';

                    ?>

                </div>

                <div class="post__main-right">

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <article class="post__article">

                            <div class="post__content"><?php the_content(); ?></div>

                        </article>

                    <?php endwhile; else: ?>

                        <p><?php _e('Nie znaleziono postów spełniających podane kryteria.'); ?></p>

                    <?php endif; ?>



                    <!-- CONTACT -->

                    <div class="post__contact">

                        <div class="post__contact-top">

                            <p class="post__contact-title">Masz pytania?</p>

                        <a href="<?= get_permalink( 17 )?>" class="post__contact-link btn btn--purple">Skontaktuj się z nami</a>

                        </div>

                        <div class="post__contact-bottom">

                            <p class="post__contact-share">Podziel się wiedzą:</p>

                            <div class="post__contact-icons">

                            <a href="<?php the_field('face', 17)?>" class="post__contact-icon-link" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/post/facebook.png" alt="" class="post__contact-icon"></a>

                            <a href="<?php the_field('linked', 17)?>" class="post__contact-icon-link" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/post/linkedin.png" alt="" class="post__contact-icon"></a>

                            <a href="https://g.page/r/CYEavWbhohA_EAg/review" class="post__contact-icon-link" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/post/like.png" alt="" class="post__contact-icon"></a>

                            </div>

                        </div>

                    </div>

                    <div class="post__comment">

                        <p class="post__comment-title">Przeczytaj lub <a href="#reply-title" class="post__comment-link">Dodaj komentarz</a></p>

                        <div class="post__comment-form">

                            <?php comments_template(); ?> 

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</main>

<?php get_footer(); ?>