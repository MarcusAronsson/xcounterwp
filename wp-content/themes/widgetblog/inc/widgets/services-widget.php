<?php

class Services_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct( 'services-widget', __( 'Services Widget' ) );
    }

    public function widget ( $args, $instance ) {
        ?>

            <div class="service">

                <div class="big-intro-text container">
                    <hr>
                    <!--  om instance title finns så deklarerar vi den -->
                    <?php if ( $title = @$instance['title']) : ?>
                        <h2><?php echo $title; ?></h2>
                    <?php endif; ?>

                    <?php if ( $subtitle = @$instance['subtitle']) : ?>
                        <hp><?php echo $subtitle; ?></hp>
                    <?php endif; ?>

                    <?php if ( $featured_image = @$instance['featured_image']) : ?>
                        <div class="service-image" style="background-image: url(<?php echo $featured_image ?>);"></div>
                    <?php endif; ?>

                </div>

            </div>

        <?php
    }

    public function update ( $new_instance, $old_instance ){
        $instance = $old_instance;
        $instance['title'] = strip_tags( $new_instance['title'] );
        $instance['subtitle'] = strip_tags( $new_instance['subtitle'] );
        $instance['featured_image'] = esc_url_raw( $new_instance['featured_image'] );

        return $instance;
     }

    public function form( $instance ) {
        ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title', 'wibl');?></label>
            <input type="text" name="<?php echo $this->get_field_name( 'title' ) ?>" id="<?php echo $this->get_field_id( 'title' ); ?>" value="<?php if ( ! empty ( $instance['title'] ) ) echo $instance['title']; ?>" class="widefat">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'subtitle' ); ?>"><?php _e( 'Subtitle', 'wibl');?></label>
            <input type="text" name="<?php echo $this->get_field_name( 'subtitle' ) ?>" id="<?php echo $this->get_field_id( 'subtitle' ); ?>" value="<?php if ( ! empty ( $instance['subtitle'] ) ) echo $instance['subtitle']; ?>" class="widefat">
        </p>


        <p>
            <label for="<?php echo $this->get_field_id( 'featured_image' ); ?>"><?php _e( 'Featured Image', 'wibl' ) ?></label>
            <span class="image-container">
                <?php if( ! empty( $instance['featured_image'] ) ) : ?>
                    <img src="<?php echo $instance['featured_image']; ?>" style="max-width: 100px; margin: 5px 0; display: block">
                <?php endif; ?>
            </span>
            <input type="text" name="<?php echo $this->get_field_name('featured_image') ?>" id="<?php echo $this->get_field_id( 'featured_image' ); ?>" value="<?php if( !empty($instance['featured_image'] ) ) echo $instance['featured_image']; ?>" class="widefat media-input" style="margin-bottom: 5px;">
            <input type="button" class="upload-media-button button" value="Upload Image">
        </p>

        <?php
    }

}