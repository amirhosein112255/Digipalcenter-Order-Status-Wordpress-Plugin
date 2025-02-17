<?php
/*
Plugin Name: پیگیری سفارش دیجی پال سنتر
Description: پیگیری سفارشات
Version: 1.0
Author: دیجی پال سنتر
*/

//add_action('rest_api_init', 'dgpl_order_status');
//
//function dgpl_order_status() {
//    register_rest_route('wc/v3', '/order-status', array(
//        'methods' => 'GET',
//        'callback' => 'get_custom_data',
//        'permission_callback' => '__return_true',
//    ));
//}
//
//function get_custom_data($data) {
//    return new WP_REST_Response(array(
//        'message' => 'Hello, this is your custom endpoint data!',
//        'data' => $data
//    ), 200);
//}

add_action('init', function() {
    add_rewrite_endpoint('order-status', EP_ROOT | EP_PAGES);
});

add_filter('woocommerce_account_menu_items', function($items) {
    $address = $items['edit-address'];
    unset($items['edit-address']);
    unset($items['downloads']);
    $items['order-status'] = __('پیگیری سفارش', 'txtdomain');
    $items['edit-address'] = $address;
    return $items;
});

add_action('woocommerce_account_order-status_endpoint', function() {
    $url = plugin_dir_url( __FILE__ );
    include plugin_dir_path(__FILE__) . 'order-status.php';
});


function add_custom_order_status2() {
    register_post_status('wc-custom-status2', array(
        'label' => 'Custom Status2',
        'public' => true,
        'exclude_from_search' => false,
        'show_in_admin_all_list' => true,
        'show_in_admin_status_list' => true,
        'label_count' => _n_noop('Custom Status <span class="count">(%s)</span>', 'Custom Status <span class="count">(%s)</span>')
    ));
}
add_action('init', 'add_custom_order_status2');

function add_custom_order_status_to_dropdown2($order_statuses) {
    $order_statuses['wc-custom-status2'] = 'آماده سازی مرسوله';
    return $order_statuses;
}
add_filter('wc_order_statuses', 'add_custom_order_status_to_dropdown2');

function add_custom_order_status3() {
    register_post_status('wc-custom-status3', array(
        'label' => 'Custom Status3',
        'public' => true,
        'exclude_from_search' => false,
        'show_in_admin_all_list' => true,
        'show_in_admin_status_list' => true,
        'label_count' => _n_noop('Custom Status <span class="count">(%s)</span>', 'Custom Status <span class="count">(%s)</span>')
    ));
}
add_action('init', 'add_custom_order_status3');

function add_custom_order_status_to_dropdown3($order_statuses) {
    $order_statuses['wc-custom-status3'] = 'آماده ارسال';
    return $order_statuses;
}
add_filter('wc_order_statuses', 'add_custom_order_status_to_dropdown3');

function add_custom_order_status4() {
    register_post_status('wc-custom-status4', array(
        'label' => 'Custom Status4',
        'public' => true,
        'exclude_from_search' => false,
        'show_in_admin_all_list' => true,
        'show_in_admin_status_list' => true,
        'label_count' => _n_noop('Custom Status <span class="count">(%s)</span>', 'Custom Status <span class="count">(%s)</span>')
    ));
}
add_action('init', 'add_custom_order_status4');

function add_custom_order_status_to_dropdown4($order_statuses) {
    $order_statuses['wc-custom-status4'] = 'تحویل مأمور پست';
    return $order_statuses;
}
add_filter('wc_order_statuses', 'add_custom_order_status_to_dropdown4');

function add_custom_order_status5() {
    register_post_status('wc-custom-status5', array(
        'label' => 'Custom Status5',
        'public' => true,
        'exclude_from_search' => false,
        'show_in_admin_all_list' => true,
        'show_in_admin_status_list' => true,
        'label_count' => _n_noop('Custom Status <span class="count">(%s)</span>', 'Custom Status <span class="count">(%s)</span>')
    ));
}
add_action('init', 'add_custom_order_status5');

function add_custom_order_status_to_dropdown5($order_statuses) {
    $order_statuses['wc-custom-status5'] = 'ارسال شده';
    return $order_statuses;
}
add_filter('wc_order_statuses', 'add_custom_order_status_to_dropdown5');