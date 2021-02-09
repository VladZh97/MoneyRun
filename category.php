<?php



/* Template Name: Blog */

get_header(); ?>



<?php get_header();

?>







<main class="post">

    <div class="post__inner">

        <div class="post__container container">

            <div class="post__top">

            <div class="post__top-des">

                    <h1 class="post__top-des-title"

                        data-aos="fade-zoom-in"

                        data-aos-easing="ease-in-back"

                        data-aos-offset="0"

                        data-aos-duration="1000">Blog</h1>

                                <div class="post__top-container">

                                    <div class="post__top-des-text"

                                    data-aos="fade-up" 

                                    data-aos-easing="linear"

                                    data-aos-delay="200">

                                    <?php the_field('blog__text', 300)?>

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

                                    echo '<li class="category__item category__btn btn btn--purple ' . $class . '"><a href="' . get_term_link( $term ) . '" class="category__link">' . $term->name . '</a></li>';

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

                                global $post;

                                $category = get_the_category($post->ID);

                                $category = $category[0]->cat_ID;

                                $myposts = get_posts(array(

                                    'numberposts' => -1, 

                                    'offset' => 0, 

                                    'category__in' => array($category), 

                                    'post_status'=>'publish', 

                                    'order'=>'ASC' ));



                                foreach($myposts as $post) :

                                setup_postdata($post);

                            ?>

                                <a href="<?php echo the_permalink(); ?>" class="post__body">

                                    <div class="post__body-image"><?php the_post_thumbnail('full'); ?></div>

                                    <p class="post__body-date"><?php echo get_the_date(); ?></p>

                                    <h1 class="post__body-title"><?php the_title();?></h1>

                                </a>

                            <?php endforeach; ?>

                            <?php wp_reset_query(); ?>

                        </div>

                        <button id="more">Zobacz więcej</button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</main>



<?php get_footer(); ?>



