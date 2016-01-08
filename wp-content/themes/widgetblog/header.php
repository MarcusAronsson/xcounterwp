<!DOCTYPE>
<html>
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <?php wp_head(); ?>
</head>
<body <?php if ( is_front_page() ) body_class(); ?> >


<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">

                <?php if ( $head_logo = get_theme_mod( 'wibl_general_head_logo' ) ) : ?>

                    <img style="width: 100px; margin-top: 20px;" src="<?php echo esc_url( $head_logo ); ?>">

                <?php endif; ?>

            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav navbar-right' ) ); ?>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

