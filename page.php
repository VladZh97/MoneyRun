<?php get_header(); 
/* Template Name: Page */
?>

<div class="subpage">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1><?php the_title(); ?></h1>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="textContent">
                    <?php the_content(); ?>
                </div>
                <?php endwhile; else: ?>
                <p><?php _e('Nie znaleziono postów spełniających podane kryteria.'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>