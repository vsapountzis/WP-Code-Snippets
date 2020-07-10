<?php // Remove this PHP opening tag when pasting the following snippet on you child theme's functions.php file

// Disable access to dahsboard for Non-admin users

function block_wp_dashboard() {
	if ( is_admin() && ! current_user_can( 'administrator' ) && ! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
		wp_safe_redirect( home_url() );
		exit;
	}
}
add_action( 'admin_init', 'block_wp_dashboard' );
