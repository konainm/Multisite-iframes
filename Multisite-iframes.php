<?php
/*
 * Plugin Name: Multisite iframes
 * Plugin URI: https://github.com/KonainM/Multisite-iframes.git
 * Description: This plugin enables site admins to use iframes in a WordPress multisite environment which, without this plugin, would only be possible by network admins.
 * Version: 1.0
 * Author: Konain Mukadam
 * Author URI: https://github.com/KonainM/Multisite-iframes.git
 */

add_filter('wp_kses_allowed_html', 'multisite_iframes', 1, 2 );

function multisite_iframes($allowedposttags, $miframes) {

	switch ( $miframes ) {
		case 'post' :
			$allowedposttags["iframe"] = array(
				"allowfullscreen" => array(),
				"frameborder" => array(),
				"height" => array(),
				"src" => array(),
				"width" => array(),
				"title" => array(),
				"id" => array(),
				"class" => array(),
				"name" => array(),
				"aria-label" => array(),
				"aria-labelledby" => array(),
				"role" => array(),
				"srcdoc" => array(),
			);
			return $allowedposttags;
			break;
			default:
			return $allowedposttags;
	}
}
?>
