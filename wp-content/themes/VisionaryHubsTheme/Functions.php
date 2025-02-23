
<?php register_nav_menus(
    array('primary-menu' => 'Top Menu')
); ?>



<?php

add_theme_support('post-thumbnails');
add_theme_support('custom-header');

?>

<?php 
add_action('after_setup_theme', function() {
    if (!current_user_can('manage_options')) {
        add_filter('show_admin_bar', '__return_false');
    }
});

function ensure_wpforms_jquery() {
    if (!wp_script_is('jquery', 'enqueued')) {
        wp_enqueue_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'ensure_wpforms_jquery');

function ensure_jquery_loaded() {
    if (!wp_script_is('jquery', 'enqueued')) {
        wp_enqueue_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'ensure_jquery_loaded');



?>



<?php
function create_custom_wpforms_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'custom_wpforms_entries';
    
    $charset_collate = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        form_type VARCHAR(50) NOT NULL,
        first_name VARCHAR(100) NOT NULL,
        last_name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        phone VARCHAR(20),
        dropdown_option VARCHAR(255),
        message TEXT NOT NULL,
        submitted_at DATETIME DEFAULT CURRENT_TIMESTAMP
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
add_action('init', 'create_custom_wpforms_table');



function save_wpforms_entries_to_db($fields, $entry, $form_data) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'custom_wpforms_entries';

    // Get the form ID
    $form_id = $form_data['id'];

    // Detect the form type based on ID
    if ($form_id == 262) {
        $form_type = 'Request a Quote';
    } elseif ($form_id == 272) {
        $form_type = 'Contact Us';
    } else {
        $form_type = 'Unknown Form';
    }

    // Extract form fields correctly
    $first_name = isset($fields[1]['value']) ? sanitize_text_field($fields[1]['value']) : ''; 
    $last_name  = isset($fields[2]['value']) ? sanitize_text_field($fields[2]['value']) : '';
    $email      = isset($fields[2]['value']) ? sanitize_email($fields[2]['value']) : '';
    $phone      = isset($fields[4]['value']) ? sanitize_text_field($fields[4]['value']) : '';
    $dropdown   = isset($fields[5]['value']) ? sanitize_text_field($fields[5]['value']) : ''; // Only for Request a Quote
    $message    = isset($fields[3]['value']) ? sanitize_textarea_field($fields[3]['value']) : ''; // Field ID 3 for Message

    // Debugging - Log message value
    error_log("Form ID: " . $form_id . " - Captured Message: " . print_r($message, true));

    // Insert into custom database table
    $wpdb->insert(
        $table_name,
        array(
            'form_type'    => $form_type,
            'first_name'   => $first_name,
            'last_name'    => $last_name,
            'email'        => $email,
            'phone'        => $phone,
            'dropdown_option' => $dropdown,
            'message'      => $message,
            'submitted_at' => current_time('mysql')
        )
    );
}
add_action('wpforms_process_complete', 'save_wpforms_entries_to_db', 10, 3);



function add_wpforms_entries_menu() {
    add_menu_page(
        'Form Entries',
        'WPForms Entries',
        'manage_options',
        'wpforms-entries',
        'display_wpforms_entries',
        'dashicons-list-view',
        25
    );
}
add_action('admin_menu', 'add_wpforms_entries_menu');

function display_wpforms_entries() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'custom_wpforms_entries';

    $entries = $wpdb->get_results("SELECT * FROM $table_name ORDER BY submitted_at DESC");

    echo '<div class="wrap"><h1>WPForms Entries</h1>';
    
    if ($entries) {
        echo '<table class="widefat fixed striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Form Type</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Dropdown</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>';
        foreach ($entries as $entry) {
            echo '<tr>
                    <td>' . esc_html($entry->id) . '</td>
                    <td>' . esc_html($entry->form_type) . '</td>
                    <td>' . esc_html($entry->first_name . ' ' . $entry->last_name) . '</td>
                    <td>' . esc_html($entry->email) . '</td>
                    <td>' . esc_html($entry->phone) . '</td>
                    <td>' . esc_html($entry->dropdown_option) . '</td>
                    <td>' . esc_html($entry->message) . '</td>
                    <td>' . esc_html($entry->submitted_at) . '</td>
                </tr>';
        }
        echo '</tbody></table>';
    } else {
        echo '<p>No form entries found.</p>';
    }
    echo '</div>';
}


?>

<?php // Add Font Awesome icons dynamically to WordPress menus
function add_icons_to_menu( $items, $args ) {
    foreach ( $items as $item ) {
        // Check if the menu item has a custom class for the icon
        if ( in_array( 'has-icon', $item->classes ) ) {
            // Add Font Awesome class (you can modify this as per your needs)
            $icon_class = get_post_meta( $item->ID, '_menu_item_icon', true ); // Custom meta field for icons

            if ( $icon_class ) {
                // Add the icon before the link text
                $item->title = '<i class="' . esc_attr( $icon_class ) . '"></i>' . $item->title;
            }
        }
    }   
    return $items;
}
add_filter( 'wp_nav_menu_objects', 'add_icons_to_menu', 10, 2 );
 ?>


<?php function theme_setup() {
    // Add support for menus
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu'),
    ));

    // Add theme support for nested menus
    add_theme_support('menus');
}
add_action('after_setup_theme', 'theme_setup');
 ?>


