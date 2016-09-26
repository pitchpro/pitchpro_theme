<?php
/**
 * Sidebar Template
 *
 * If a `primary` widget area is active and has widgets, display the sidebar.
 *
 * @package WooFramework
 * @subpackage Template
 */

global $post, $wp_query, $woo_options;

$settings = array(
				'portfolio_layout' => 'one-col'
				);

$settings = woo_get_dynamic_values( $settings );

// Reset Main Query
wp_reset_query();

$layout = woo_get_layout();

woo_sidebar_before();

?>
<aside id="sidebar">
<?php
	woo_sidebar_inside_before();
	woo_sidebar( 'pitchpro-edit-campaign' );
	woo_sidebar_inside_after();
?>
</aside><!-- /#sidebar -->
<?php

woo_sidebar_after();
