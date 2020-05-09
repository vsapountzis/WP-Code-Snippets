<?php // Remove this PHP opening tag when pasting the following snippet on you child theme's functions.php file

// Remove the admin bar from the front end

add_filter( 'show_admin_bar', '__return_false' );
