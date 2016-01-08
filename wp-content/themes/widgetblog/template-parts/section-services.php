<?php
    
    if ( ! is_active_sidebar( 'sidebar-services-section' ) ) {
        return;
    }

?>

<section>
    <?php dynamic_sidebar( 'sidebar-services-section' ); ?>
</section>
