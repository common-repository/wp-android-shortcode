=== Plugin Name ===
Contributors: robotmedia, neojoda
Tags: android, qr, link, shortcode
Requires at least: 2.6
Tested up to: 3.0.1
Stable tag: 1.0.1

Use the [android] shortcode to convert Android Market links into a QR code for non-Android devices and a direct link for Android devices.

== Description ==

Linking to Android Market apps is somewhat problematic. Because Android Market links only work from Android devices, the most common way to link to an Android app is to offer a QR code of the app link that can be scanned with an app like Barcode Scanner.

However, when browsing from an Android device, a direct link to the Android Market is preferred. What works well for Android devices does not suit the rest and viceversa.

WP Android Shortcode solves this problem by using the [android] shortcode to convert Android Market links to the best option based on the platform. Android devices get a direct link to the Android Market, while the rest gets the corresponding QR code. In both cases a nifty Android Market badge is used to clearly indicate that this is a link to an Android app.

Examples:

[android]market://search?q=pname:com.example[/android]

[android href="market://search?q=pname:com.example"]

[android href="market://search?q=pname:com.example" title="Your app name"]

== Installation ==

1. Upload the wp-android-shortcode folder to the /wp-content/plugins/ directory, or download through the Plugins menu in WordPress
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place the [android] shortcode in your post content

== Frequently Asked Questions ==

= What is a shortcode? =

A shortcode is a WordPress-specific code that lets you do more by writing less. They can be used in posts and pages (by default) and are marked by square brackets like [this].

This plugin adds the [android] shortcode to WordPress.

= Can I use the [android] shortcode in widgets or my template? =

Shortcodes are only enabled in posts and pages by default. However, they can be enabled for widgets and templates with a little code. See this post for more info:

http://sillybean.net/2010/02/using-shortcodes-everywhere/ 

== Changelog ==

= 1.0.1 =

* Internationalization
* Added Spanish and Catalan localization
* Changed deprecated eregi function to preg_match

= 1.0 =
* First version