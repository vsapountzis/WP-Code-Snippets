<?php // Remove this PHP opening tag when pasting the following snippet on you child theme's functions.php file

// Redirect users after login

function custom_login_redirect( $url ) {
    return home_url( '/profile' );
}
add_filter( 'login_redirect', 'custom_login_redirect' );
