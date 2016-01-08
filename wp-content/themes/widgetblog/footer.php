

<footer>

    <div class="social-links container">

        <?php if ( $facebook_link = get_theme_mod( 'wibl_general_social_facebook' ) ) : ?>
            <a href="<?php echo esc_url( $facebook_link); ?>" class="social facebook"></a>
        <?php endif; ?>

        <?php if ( $linkedin_link = get_theme_mod( 'wibl_general_social_linkedin' ) ) : ?>
            <a href="<?php echo esc_url( $linkedin_link); ?>" class="social linkedin"></a>
        <?php endif; ?>

        <?php if ( $instagram_link = get_theme_mod( 'wibl_general_social_instagram' ) ) : ?>
            <a href="<?php echo esc_url( $instagram_link); ?>" class="social instagram"></a>
        <?php endif; ?>

    </div>

</footer>

<?php wp_footer(); ?>


</body>
</html>