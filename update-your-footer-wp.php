<?php
/**
* Plugin Name: Update Your Footer WP
* Plugin URI: https://github.com/warengonzaga/update-your-footer-wp
* Description: Simple and lightweight WordPress shortcode plugin to automagically update your footer year notice. No annoying ads!
* Version: 1.1.3
* Author: Waren Gonzaga
* Author URI: https://warengonzaga.com
*/

/**
* WP Update Your Footer
*/

// prevent direct access
defined( 'ABSPATH' ) or die( "Restricted Access!" );

function update_your_footer($atts) {

    // wp data
    $year = date('Y');
    $site_url = get_bloginfo('url');
    $site_name = get_bloginfo('name');

    // set footer contents
    $footer_content = 'Copyright &copy; ' . esc_html( $year ) . ' <a href="' . esc_url( $site_url ) . '">' . esc_html( $site_name ) . '</a>, All Rights Reserved.';

    // output footer contents
    return $footer_content;
}

// wordpress hook
add_shortcode('wp_uyf', 'update_your_footer');
