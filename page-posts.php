<?php



/* Template Name: Blog */

get_header(); ?>

<main class="post">

    <div class="post__inner">

        <div class="post__container container">

            <div class="post__top">

                <div class="post__top-des">

                    <h1 class="post__top-des-title"

                        data-aos="fade-zoom-in"

                        data-aos-easing="ease-in-back"

                        data-aos-offset="0"

                        data-aos-duration="1000"><?php the_title(); ?></h1>

                                <div class="post__top-container">

                                    <div class="post__top-des-text"

                                    data-aos="fade-up" 

                                    data-aos-easing="linear"

                                    data-aos-delay="200">

                                    <?php the_field('blog__text')?>

                                </div>

                        <div class="post__top-image-container"

                        data-aos="fade-zoom-in"

                        data-aos-easing="ease-in-back"

                        data-aos-offset="0"

                        data-aos-duration="1000">

                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post/ilustracja3.png" alt="" class="post__top-des-image">

                        </div>

                    </div>

                </div>

                <div class="post__main">

                        <div class="post__nav"

                            data-aos="fade-up" 

                            data-aos-easing="linear"

                            data-aos-delay="200">

                            <button class="post__nav-category">Kategorie</button>

                            <button class="post__nav-tags">Tagi</button>

                        </div>

                    <div class="post__main-left category__left"

                    data-aos="fade-up" 

                    data-aos-easing="linear"

                    data-aos-delay="200">

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

                                    echo '<li class="category__item category__btn btn btn--purple' . $class . '"><a href="' . get_term_link( $term ) . '" class="category__link">' . $term->name . '</a></li>';

                                }

                                echo '</ul></div>';



                        $tags = get_tags(array(

                            'hide_empty' => false,

                            'order' =>'ASC',

                            'orderby' => 'ID'



                        ));

                        echo '<div class="tags__list"><ul class="tags__list-items"><div class="close"></div>';

                            foreach ($tags as $tag) {

                            $class = ( is_tag( $tag->name ) ) ? 'active' : '';

                            echo '<li class="tag__item ' . $class . '"><a href="' . get_term_link( $tag ) . '" class="category__link">'."#" . $tag->name . '</a></li>';

                        }

                        echo '</ul></div>';



                    ?>

                    </div>

                    <div class="post__main-right"

                        data-aos="fade-up" 

                        data-aos-easing="linear"

                        data-aos-delay="200">

                        <div class="posts">

                            <?php

                            

                            $args = array(  

                                'post_type' => 'post',

                                'post_status' => 'publish',

                                'posts_per_page' => -1,

                            );



                            $loop = new WP_Query( $args ); 

            

                            while ( $loop->have_posts() ) : $loop->the_post(); ?>

                                <a href="<?php echo the_permalink(); ?>" class="post__body">

                                    <div class="post__body-image"><?php the_post_thumbnail('full'); ?></div>

                                    <p class="post__body-date"><?php echo get_the_date(); ?></p>

                                    <h1 class="post__body-title"><?php the_title();?></h1>

                                </a>



                            <?php

                            endwhile;



                            wp_reset_postdata(); 

                            ?>

                        </div>

                        <button id="more" class="btn btn--purple">Zobacz więcej</button>

                        <div class="post-footer__contact">

                            <div class="post-footer__contact-left">

                                <div class="post-footer__contact-left-text">

                                    <p class="bold">Jesteś pośrednikiem?</p>

                                    <p class="normal">Dołącz do naszej grupy</p>

                                </div>

                                <a href="<?php the_field('coop__button-link', 17)?>" class="post-footer__contact-left-btn button btn btn--orange" target="_blank">Akademia Pośrednika Finansowego</a>

                            </div>

                            <div class="post-footer__contact-right">

                                <div class="post-footer__contact-right-text">

                                    <p class="bold">Lubisz oglądać webinary?</p>

                                    <p class="normal">Zapraszamy na nasz kanał</p>

                                </div>

                                <a href="<?php the_field('yt')?>" class="post-footer__contact-right-btn button btn btn--blue" target="_blank">YouTube</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</main>



<?php get_footer(); ?>