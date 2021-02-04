<?php
/**
* Plugin Name: Update Your Footer WP
* Plugin URI: https://github.com/warengonzaga/update-your-footer-wp
* Description: A WordPress shortcode plugin to automagically update your copyright notice year. Simple and lightweight, no annoying ads and fancy settings.
* Version: 1.1.0
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
    $sitename = '<a href="'. get_bloginfo('url') . '" target="_blank">' . get_bloginfo('name') . '</a>';
    $all_rights_reserved = 'All Rights Reserved';
    $notice = $copyright . ' ' . $year . ' ' . $sitename . ', ' . $all_rights_reserved . '.';

    // final notice
    return $notice;
}

// wordpress hook
add_shortcode('wp_uyf', 'update_your_footer');
