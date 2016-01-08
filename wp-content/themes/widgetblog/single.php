<?php get_header(); ?>

SINGLE POST

    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

    <?php
        if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
        comments_template();
        endif;
    ?>

    <?php endwhile; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>