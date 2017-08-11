<?php
/*
Plugin Name: Disable Post Locking
Plugin URI: http://wordpress.org/plugins/disable-post-locking/
Description: Disables post locking.
Version: 1.1
Author: Bryan Petty <bryan@ibaku.net>
Author URI: http://profiles.wordpress.org/bpetty/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

register_activation_hook( __FILE__, array( 'Plugin_DisablePostLocking', 'clear_edit_locks' ) );

class Plugin_DisablePostLocking {

	function Plugin_DisablePostLocking() {
		add_filter('update_post_metadata', array($this, 'update_metadata_filter'), 10, 5);
	}

	static function clear_edit_locks() {
		global $wpdb;
		$wpdb->delete($wpdb->postmeta, array('meta_key' => '_edit_lock'));
	}

	function update_metadata_filter() {
		$args = func_get_args();
		if(isset($args[2]) && $args[2] == '_edit_lock')
			return false;
	}

}

new Plugin_DisablePostLocking();
