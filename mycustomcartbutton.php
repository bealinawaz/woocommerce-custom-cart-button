<?php
defined( 'ABSPATH' ) OR exit;
/*
Plugin Name: My Custom Cart Button
Version: 1.0
Plugin URI: http://codeconvolution.com/
Description: Custom cart button text as per requirement
Author: Ali Nawaz
Author URI: http://bealinawaz.com/
Text Domain: awin-search-results
Domain Path: /languages
*/




add_filter( 'add_to_cart_text', 'woo_custom_single_add_to_cart_text' );                // < 2.1
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_single_add_to_cart_text' );  // 2.1 +
  
function woo_custom_single_add_to_cart_text() {
  
    return __( 'Buy Now', 'woocommerce' );
  
}


add_filter( 'add_to_cart_text', 'woo_custom_product_add_to_cart_text' );            // < 2.1
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_custom_product_add_to_cart_text' );  // 2.1 +
  
function woo_custom_product_add_to_cart_text() {
  
    return __( 'Buy Now', 'woocommerce' );
  
}