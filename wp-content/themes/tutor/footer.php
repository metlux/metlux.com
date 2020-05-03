<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Tutor
 */
?>
</div><!-- main-container -->

<div class="copyright-wrapper">
                <div class="copyright">
                    	<p>&copy; <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a>  <?php echo esc_attr(date_i18n(__( 'Y', 'tutor' ) )); ?>. <?php esc_attr_e('Powered by WordPress','tutor'); ?></p>               
                </div><!-- copyright --><div class="clear"></div>           
        </div>
    </div>        
<?php wp_footer(); ?>

</body>
</html>