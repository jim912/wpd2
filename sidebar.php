<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package WPD-2nd
 */
?>

<div class="large-4 columns">
	<div id="secondary" class="widget-area" role="complementary">
		<div class="side-nav">
		<?php wpdbones_ad_content_side(); ?>
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="widget">
				<h5 class="widget-title"><?php _e( 'Archives', 'wpd_2nd' ); ?></h5>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h5 class="widget-title"><?php _e( 'Meta', 'wpd_2nd' ); ?></h5>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

		<?php endif; // end sidebar widget area ?>
	</div>
	</div><!-- #secondary -->
</div>
