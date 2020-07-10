<?php // Remove this PHP opening tag when pasting the following snippet on you child theme's functions.php file


// Redirect users after logout

function custom_logout_redirect( $url ) {
    return home_url( '/profile' );
}
add_filter( 'logout_redirect', 'custom_logout_redirect' );
