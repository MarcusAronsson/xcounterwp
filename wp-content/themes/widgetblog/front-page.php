<?php get_header(); ?>

<div class="site-intro container">
    <?php if ( $head_title = get_theme_mod( 'wibl_general_head_title' ) ) : ?>
        <h1><?php echo $head_title; ?></h1>
    <?php endif; ?>

    <?php if ( $head_subtitle = get_theme_mod( 'wibl_general_head_subtitle' ) ) : ?>
        <h3><?php echo $head_subtitle; ?></h3>
    <?php endif; ?>
</div>

<div class="site-content">

    <?php get_template_part( 'template-parts/section', 'services' ) ?>

    <?php get_template_part( 'template-parts/section', 'customers' ) ?>

</div>

<?php get_footer(); ?>