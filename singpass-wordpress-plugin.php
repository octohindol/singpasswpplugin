<?php
/**
 * Plugin Name: Singpass Callback URL Plugin
 * Plugin URI: http://www.octopus8.com
 * Description: Singpass Callback URL Plugin for Octopus8.
 * Version: 1.0.1
 * Author: Khindol Madraimov
 * Author Email: hindol@octopus8.com
 */

$plugin_name = plugin_basename(__FILE__);

// Register REST API route
add_action('rest_api_init', function () {
    $address = get_option('singpass_address', 'singpass/v1');
    $extension = get_option('singpass_extension', 'CRM_Singpass_Utils');
    $function = get_option('singpass_function', 'callbackUrl');
    
    register_rest_route($address, '/report', array(
        'methods' => 'GET',
        'callback' => [$extension, $function],
    ));
});

// Add Settings Page
add_action('admin_menu', 'singpass_add_settings_page');
add_action('admin_init', 'singpass_register_settings');

function singpass_add_settings_page() {
    add_options_page(
        'Singpass Callback Settings',
        'Singpass Callback',
        'manage_options',
        'singpass-settings',
        'singpass_render_settings_page'
    );
}

function singpass_render_settings_page() {
    ?>
    <div class="wrap">
        <h1>Singpass Callback Settings</h1>
        <form action="options.php" method="post">
            <?php
            settings_fields('singpass_settings_group');
            do_settings_sections('singpass-settings');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function singpass_register_settings() {
    register_setting('singpass_settings_group', 'singpass_address');
    register_setting('singpass_settings_group', 'singpass_extension');
    register_setting('singpass_settings_group', 'singpass_function');

    add_settings_section('singpass_main_section', 'Main Settings', null, 'singpass-settings');

    add_settings_field(
        'singpass_address',
        'Address',
        'singpass_address_callback',
        'singpass-settings',
        'singpass_main_section'
    );
    
    add_settings_field(
        'singpass_extension',
        'Extension',
        'singpass_extension_callback',
        'singpass-settings',
        'singpass_main_section'
    );

    add_settings_field(
        'singpass_function',
        'Function Name',
        'singpass_function_callback',
        'singpass-settings',
        'singpass_main_section'
    );
}

function singpass_address_callback() {
    $address = get_option('singpass_address', 'singpass/v1');
    echo "<input type='text' name='singpass_address' value='$address' />";
}

function singpass_extension_callback() {
    $extension = get_option('singpass_extension', 'CRM_Singpass_Utils');
    echo "<input type='text' name='singpass_extension' value='$extension' />";
}

function singpass_function_callback() {
    $function = get_option('singpass_function', 'callbackUrl');
    echo "<input type='text' name='singpass_function' value='$function' />";
}
