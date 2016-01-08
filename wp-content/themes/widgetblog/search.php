<?php get_header(); ?>

<h1><?php _e( 'You searched for', 'wibl' ); ?>  <?php echo get_search_query(); ?> </h1><br>

<?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

    <?php endwhile; ?>

<?php else : ?>

    But nothing was found :'(

<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>