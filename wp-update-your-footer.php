<?php
/**
* Plugin Name: WP Update Your Footer
* Plugin URI: https://warengonzaga.com/wp-update-your-footer
* Description: A WordPress shortcode plugin to automagically update your copyright notice year. Simple and lightweight, no annoying ads and fancy settings.
* Version: 1.0.1
* Author: Waren Gonzaga
* Author URI: https://warengonzaga.com
*/

/**
* WP Update Your Footer
*/

// prevent direct access
defined( 'ABSPATH' ) or die( "Restricted Access!" );

function update_your_footer($atts) {
    $copyright = 'Copyright &copy;';
    $year = date('Y');
    $sitename = get_bloginfo('name');
    $all_rights_reserved = 'All Rights Reserved';
    $notice = $copyright . ' ' . $year . ' ' . $sitename . ', ' . $all_rights_reserved . '.';

    // final notice
    return $notice;
}

// wordpress hook
add_shortcode('wp_uyf', 'update_your_footer');
