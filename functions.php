<?php

include_once 'theme-cleanup.php';

add_action( 'after_setup_theme', 'pitchpro_register_app_menu' );
function pitchpro_register_app_menu(){
	register_nav_menu( 'pitchpro-app', __( 'Pitch Pro Menu', 'pitchpro' ) );
}

add_action( 'init', 'custom_widgets_init' );
function custom_widgets_init() {
	register_sidebar( array( 'name' => __( 'Site Header', 'woothemes' ), 'id' => 'pitchpro-site-header', 'description' => __( 'A widgetized area in your right header area', 'woothemes' ), 'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>', 'before_title' => '<h3>', 'after_title' => '</h3>' ) );
	register_sidebar( array( 'name' => __( 'App Header', 'woothemes' ), 'id' => 'pitchpro-app-header', 'description' => __( 'A widgetized area in your right header area', 'woothemes' ), 'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>', 'before_title' => '<h3>', 'after_title' => '</h3>' ) );
}

// Add the code inside the header area
add_action( 'woo_header_inside', 'woo_header_widgetized' );
function woo_header_widgetized() {
	if ( woo_active_sidebar( 'header' ) ) { ?>
		<div class="header-widget">
 			<?php

			if ( is_user_logged_in() && is_post_type( array( PitchPro_App::POSTTYPE, PitchPro_Campaign::POSTTYPE, PitchPro_Organization::POSTTYPE, PitchPro_Pitch::POSTTYPE ) ) ) {
				woo_sidebar( 'pitchpro-app-header' );
			} else {
				woo_sidebar( 'pitchpro-site-header' );
			}

			?>
 		</div><?php
	}
}
