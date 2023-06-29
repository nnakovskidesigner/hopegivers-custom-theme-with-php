<?php

function display_toolbar_for_all_users() {
    show_admin_bar( true );
}
add_action( 'after_setup_theme', 'display_toolbar_for_all_users' );




?>