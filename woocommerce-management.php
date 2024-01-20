<?php
/*
Plugin Name: WooCommerce Management
Plugin URI: https://likablesolutions.com/
Description: Using dynamic database 
Version: 1.0
Author: Gazi Akter
Author URI: https://gaziakter.com/
License: GPLv2 or later
Text Domain: woo-management
Domain Path: /languages/
*/


//chat gpt
    
    function custom_before_login_form() {
        // Your custom content or code here
    }
    add_action('woocommerce_before_customer_login_form', 'custom_before_login_form');


    function custom_account_menu_items($items) {
        // Your custom tabs or modifications here
        $items['service'] = 'Service';
        return $items;
    }
    add_filter('woocommerce_account_menu_items', 'custom_account_menu_items');


    function custom_endpoint_url($url, $endpoint, $value) {
        // Your custom endpoint URL modifications here
        if ( $endpoint === 'service' ) {
            $url = home_url( 'my-account/service' );
            }
            return $url;
    }
    add_filter('woocommerce_get_endpoint_url', 'custom_endpoint_url', 10, 3);
    
    
    function custom_add_my_account_endpoint() {
        add_rewrite_endpoint('service', EP_ROOT | EP_PAGES);
    }
    add_action('init', 'custom_add_my_account_endpoint');
    
    
    function custom_subpage_content() {
        echo '<p>This is the content for the subpage.</p>';
    }
    add_action('woocommerce_account_service_endpoint', 'custom_subpage_content');
    
    
    
