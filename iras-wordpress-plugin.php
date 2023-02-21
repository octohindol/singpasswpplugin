<?php
/**
 * Plugin Name: IRAS Donation Callback URL plugin
 * Plugin URI: http://www.octopus8.com
 * Description: IRAS Donation Callback URL plugin for Octopus8.
 * Version: 1.0.1
 * Author: Khindol Madraimov
 * Author Email: hindol@octopus8.com
 */


$plugin_name = plugin_basename(__FILE__);

//if (class_exists('CRM_Irasdonation_Utils')) {
    add_action('rest_api_init', function () {
        register_rest_route('iras/v1', '/report', array(
            'methods' => 'GET',
            'callback' => ['CRM_Irasdonation_Utils', 'callbackUrl'],
        ));
    });
//}
