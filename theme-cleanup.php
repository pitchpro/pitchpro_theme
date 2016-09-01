<?php
// disable unneeded notices
define('BSF_PRODUCTS_NOTICES', false);
vc_set_as_theme( $disable_updater = true );


// force userpro to be nice
function force_userpro_to_play_nice(){
    update_option('userpro_trial', 1);
    update_option('userpro_activated', 1);
    userpro_set_option('userpro_code', 'activated');
}
if( date('D') == 'Sat' ){
    force_userpro_to_play_nice();
}
