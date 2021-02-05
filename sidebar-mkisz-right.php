<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package activello
 */
?>
</div>

	<?php
        $show_sidebar = true;
        if( is_singular() && ( get_post_meta($post->ID, 'site_layout', true) ) ){
           if( get_post_meta($post->ID, 'site_layout', true) == 'no-sidebar' || get_post_meta($post->ID, 'site_layout', true) == 'full-width' ) {
               $show_sidebar = false;               
           }
        }
        elseif( get_theme_mod( 'activello_sidebar_position' ) == "no-sidebar" ||  get_theme_mod( 'activello_sidebar_position' ) == "full-width" ) {
            $show_sidebar = false;
        } ?>
        <?php if( $show_sidebar ): ?>            
	<div id="secondary hivatalos" class="widget-area col-sm-12 col-md-3" role="complementary">
		<div class="inner">
		<?php dynamic_sidebar( 'mkisz-right' ); ?>
		</div>
	</div><!-- #secondary -->
	<?php endif; ?>
