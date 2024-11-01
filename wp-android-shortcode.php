<?php
/**
 * @package WP Android Shortcode
 * @version 1.0.1
 */
/*
Plugin Name: WP Android Shortcode
Plugin URI: http://www.robotmedia.net/2010/12/wp-android-shortcode-a-wordpress-plugin-to-add-links-to-the-android-market/?utm_source=ios&utm_medium=about&utm_campaign=wp-android-shortcode
Description: Add Android Market links to your website using the [android] shortcode
Author: Robot Media
Version: 1.0.1
Author URI: http://www.robotmedia.net/?utm_source=ios&utm_medium=about&utm_campaign=wp-android-shortcode
*/

include 'AndroidService.php';

function wp_android_shortcode_init() {
	load_plugin_textdomain('wp-android-shortcode', false, '/languages');
}

// [android]market://search?q=pname:com.example[/android]
// [android href="market://search?q=pname:com.example"]
// [android href="market://search?q=pname:com.example" title="Your app name"]
function android_func($atts, $content) {
	extract(shortcode_atts(array(
		'href' => '',
		'title' => '',
	), $atts));
		
	$href = $atts['href'];
	if (empty($href)) {
		$href = $content;
	}
	$title = $atts['title'];

	$android = new AndroidService('wp_android_shortcode', __FILE__);
	return $android->get_app_link($title, $href);	
}

add_shortcode('android', 'android_func');
add_action( 'init', 'wp_android_shortcode_init' );
?>