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
function woo_mana_navigarion($items, $endpoints){
    $items['service'] = 'Service';
    return $items;
}

add_filter( "woocommerce_account_menu_items", "woo_mana_navigarion", 10, 2 );





    

