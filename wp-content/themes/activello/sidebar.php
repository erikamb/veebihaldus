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
	<div id="secondary" class="widget-area col-sm-12 col-md-4" role="complementary">
		<div class="inner">
			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="search" class="widget widget_search">
					<?php get_search_form(); ?>
				</aside>

				<aside id="archives" class="widget">
					<h3 class="widget-title"><?php esc_html_e( 'Archives', 'activello' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h3 class="widget-title"><?php esc_html_e( 'Meta', 'activello' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>
				<ul class="feeds">
   				 <li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
   				 <li><a href="<?php bloginfo('atom_url'); ?>" title="<?php _e('Syndicate this site using Atom'); ?>"><?php _e('Atom'); ?></a></li>
  				 <li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
				</ul>

			<?php endif; // end sidebar widget area ?>
		</div>
	</div><!-- #secondary -->
	<?php endif; ?>

