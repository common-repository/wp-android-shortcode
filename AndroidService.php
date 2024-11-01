<?php
class AndroidService {
	
	const ANDROID_USER_AGENT = 'android';
	
	private $plugin_name;
	private $plugin_file;

	public function __construct($plugin_name, $plugin_file)
	{
		$this->plugin_name = $plugin_name;
		$this->plugin_file = $plugin_file;		
	}
	
	private function is_android() {
		$user_agent = $_SERVER['HTTP_USER_AGENT'];
		return preg_match("/".self::ANDROID_USER_AGENT."/i", $user_agent);
	}
	
	public function get_app_link($title, $href) {
		if (empty($title)) {
			$title = __('this app', $this->plugin_name);
		}
		$badge_url = plugins_url('/images/android_badge.png', $this->plugin_file);
		$badge_alt = __('Android Market badge', $this->plugin_name);
		$badge_html = '<img width="200" alt="'.$badge_alt.'" src="'.$badge_url.'" />';

		if ($this->is_android()) {
		
			$link_title = sprintf(__('Download %s from the Android Market', $this->plugin_name), $title);
			return '<p><a href="'.$href.'" title="'.$link_title.'">'.$badge_html.'</a></p>';

		} else {
	
			$link_title = sprintf(__('Scan this QR code to download %s from the Android Market', $this->plugin_name), $title);
			return '<p><a rel="lightbox[]" href="http://chart.apis.google.com/chart?cht=qr&chs=350x350&chl='.urlencode($href).'" title="'.$link_title.'">'.$badge_html.'</a></p>';

		}
	}
}
?>