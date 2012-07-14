=== WP-Logs ===
Contributors: neiltron, shockoe
Donate link: http://www.shockoe.com
Tags: logs, notification, developer, tracking, analytics, api, notifo
Requires at least: 3.0
Tested up to: 3.0.1
Stable tag: trunk

Custom event logging for Wordpress developers.

== Description ==

WP-Logs enables developers to track system events from within the Wordpress admin area; i.e., tracking user logins, new posts, comments, etc. It's also very helpful if you need to build an API on top of Wordpress and track usage to make sure everything is functioning correctly.

After installation, a 'Logs' tab appears in the admin panel which lists all events that have been sent to it via the simple EventLog() call (see installation for more details).

To see our other work, visit [www.shockoe.com](http://www.shockoe.com). Google Analytics code adapted from work by there4 development.

== Installation ==

* Upload files to your site's plugin directory
* Activate WP-Logs in the admin panel
* Add EventLog line to your theme/plugin code


= EventLog() =
The EventLog call should resemble this:

$EventLog = new EventLog(array(
	'event' => 'Login Successful',
	'text' => var_export($_REQUEST,1)
));

The only required parameter is 'event'; 'text' can be any value(s) you want.

= Google Analytics Integration =
To have your events posted to Google Analytics, add your UA code to line 25 of analytics_events.php. If you are using [Yoast's Google Analytics plugin](http://wordpress.org/extend/plugins/google-analytics-for-wordpress/), you can skip this step as WP-Logs will pull your UA information from the database.

= Notifo Integration =
WP-Logs integrates with [Notifo](http://www.notifo.com) to make it easy to receive notices of events in realtime to either your phone or desktop. The [WP-Notifo plugin](http://wordpress.org/extend/plugins/wp-notifo/) is required to use this functionality.

To use it, setup and configure WP-Notifo with your Notifo API keys. Then add a 'notifo' line to your EventLog call, e.g.:
	
	$EventLog = new EventLog(array(
		'event' => 'New post',
		'text' => 'A user created a new post',
		'notifo' => 1
	));
	
The last line tells WP-Logs to send this event to Notifo.


== Screenshots ==

1. List of logged events in the admin panel.

== Changelog ==

= 0.6 =
* Added WP-Notifo integration

= 0.5.1 =
* Remove 'Add New' from the admin menu

= 0.5 =
* First version of WP-Logs.