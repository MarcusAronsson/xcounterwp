<?php get_header(); ?>

    THIS IS A PAGE

<?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

<?php endwhile; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>