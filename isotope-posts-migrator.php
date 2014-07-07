<?php
/**
 * Isotope Posts v2 Migrator.
 *
 * @package   Isotope Posts v2 Migrator
 * @author    Mandi Wise <hello@mandiwise.com>
 * @license   GPL-2.0+
 * @link      http://mandiwise.com
 * @copyright 2014 Mandi Wise
 *
 * @wordpress-plugin
 * Plugin Name:       Isotope Posts v2 Migrator
 * Plugin URI:        https://github.com/mandiwise/isotope-posts-migrator
 * Description:       If you're upgrading to v2+ of Isotope Posts from v1.X, you'll need to run this plugin first. Be sure to deactivate and delete this plugin before attempting to re-activate v2+ of Isotope Posts.
 * Version:           1.0
 * Author:            Mandi Wise
 * Author URI:        http://mandiwise.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: https://github.com/mandiwise/isotope-posts-migrator
 */

function ip_deactivate_and_delete_options() {
   if ( is_plugin_active('isotope-posts/isotope-posts.php') ) {
      deactivate_plugins('isotope-posts/isotope-posts.php');
   }

   delete_option( 'isotope_options' );
}
add_action( 'admin_init', 'ip_deactivate_and_delete_options' );


function ip_migrator_admin_notice() {
    if ( is_plugin_active( 'isotope-posts-migrator/isotope-posts-migrator.php' ) ) {
        echo '<div class="error"><p>All done! Your site is now ready to update to Isotope Posts v2.</p><p>Please <strong>deactivate and delete the Isotope Posts v2 Migrator plugin</strong>, then ensure you have uploaded the most current version of <a href="https://github.com/mandiwise/isotope-posts">Isotope Posts</a> to your site.</p><p>You cannot properly activate Isotope Posts until you have deactivated the migrator plugin. Completely deleting the migrator from your site now is strongly recommended.</p></div>';
    }
}
add_action( 'admin_notices', 'ip_migrator_admin_notice' );
