=== Isotope Posts v2 Migrator ===
Contributors: mandiwise
Tags: isotope, posts, migrate
Requires at least: 3.5.1
Tested up to: 3.9.1
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Use this plugin to prepare your site for Isotope Posts v2+ if you were previously running any 1.X version.

== Description ==

If you're upgrading to [v2+ of Isotope Posts](https://github.com/mandiwise/isotope-posts) from v1.X, you'll need to run this plugin first.

To prepare your site for Isotope Posts v2+, simply install the migrator plugin and activate.

Upon successful activation you'll see a message in the WordPress admin area saying that your site is now ready to be upgraded to Isotope Post v2+.

Next, you'll deactivate and delete the migrator plugin, then ensure you have the most current version of Isotope Posts uploaded to your site, and finally, reactivate the Isotope Posts plugin.

**Please Note:**

You cannot properly re-activate Isotope Posts until you have deactivated the migrator plugin. Completely deleting the migrator plugin from your site following its successful activation is strongly recommended.

==  Installation ==

1. Extract the `isotope-posts-migrator-master.zip` and remove `-master` from the extracted directory name
2. Upload the `isotope-posts-migrator` folder and its contents to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress

If the migrator plugin is successfully activated, follow these steps next to upgrade to Isotope Posts v2+:

1. Deactivate and delete the migrator plugin
2. Ensure you have uploaded the most current version of Isotope Posts to the `/wp-content/plugins/` directory
3. Activate Isotope Posts again

== Changelog ==

= 1.0 =
* Initial plugin release.
