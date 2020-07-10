<?php // Remove this PHP opening tag when pasting the following snippet on you child theme's functions.php file

// Hide admin bar for non admin users

if (!current_user_can('manage_options')) {
    add_filter('show_admin_bar','__return_false');
}
