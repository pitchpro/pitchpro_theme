<?php

$redirect = is_user_logged_in() ? get_field('redirect_app_to_page','option') : get_field('redirect_app_to_login','option');
header("Location: $redirect",TRUE,301);
