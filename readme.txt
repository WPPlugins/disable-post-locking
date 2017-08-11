=== Disable Post Locking ===
Contributors: bpetty
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=bryan%40ibaku%2enet&item_name=WordPress%20Better%20File%20Editor%20Plugin
Tags: post lock, post locking, lock
Version: 1.1
Requires at least: 3.6
Tested up to: 3.6.1
Stable tag: 1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Disables automatic post locking so multiple users can open the same post in
the administration panel.

== Description ==

Disables automatic post locking so multiple users can open the same post in
the administration panel.

Warning: Post locking was an addition to WordPress in order to prevent such
bugs as overwritten autosaves (coming from multiple authors), and of course
to prevent accidentally overwriting another user's changes with older content.
These are often never problems for many users, and you should likely be
communicating with your fellow editors when making changes anyway. This plugin
makes the choice of relying on the latter rather than post locking, so you
may run into those problems again.

== Installation ==

1. Upload the entire `disable-post-locking` folder to the `/wp-content/plugins/`
   directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

== Changelog ==

= 1.1 =

* Fix typo in edit lock suppression filter name.
* Include plugin side effect warnings.

= 1.0 =

* Initial release.
