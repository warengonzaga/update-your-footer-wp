<?php
/**
* Plugin Name: Update Your Footer WP
* Plugin URI: https://github.com/warengonzaga/update-your-footer-wp
* Description: Simple and lightweight WordPress shortcode plugin to automagically update your footer year notice. No annoying ads!
* Version: 1.2.2
* Author: Waren Gonzaga
* Author URI: https://warengonzaga.com
* Text Domain: update-your-footer-wp
* Domain Path: /languages
*/

/**
* Update Your Footer WP
*/

// prevent direct access
defined( 'ABSPATH' ) or die( 'Restricted Access!' );

function update_your_footer( $atts ) {

    // wp data
    $year      = date( 'Y' );
    $site_url  = get_bloginfo( 'url' );
    $site_name = get_bloginfo( 'name' );

    // output data
    return __( 'Copyright', 'update-your-footer-wp' ) . ' &copy; ' . esc_html( $year ) . ' <a href="' . esc_url( $site_url ) . '">' . esc_html( $site_name ) . '</a>, ' . __( 'All Rights Reserved', 'update-your-footer-wp' ) . '.';
}

// wordpress hook
add_shortcode( 'uyf_wp', 'update_your_footer' );
