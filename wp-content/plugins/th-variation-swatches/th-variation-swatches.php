<?php
/**
 * Plugin Name:             TH Variation Swatches
 * Plugin URI:              https://themehunk.com/product/th-variation-swatches-plugin/
 * Description:             Beautiful Colors, Images and Buttons Variation Swatches For WooCommerce Product Attributes
 * Version:                 1.2.0
 * Author:                  ThemeHunk
 * Author URI:              https://themehunk.com
 * Requires at least:       4.8
 * Tested up to:            5.8.1
 * WC requires at least:    3.2
 * WC tested up to:         5.1
 * Domain Path:             /languages
 * Text Domain:             th-variation-swatches
 */
if ( ! defined( 'ABSPATH' ) ) exit;

if (!defined('TH_VARIATION_SWATCHES_PLUGIN_FILE')) {
    define('TH_VARIATION_SWATCHES_PLUGIN_FILE', __FILE__);
}

if (!defined('TH_VARIATION_SWATCHES_PLUGIN_URI')) {
    define( 'TH_VARIATION_SWATCHES_PLUGIN_URI', plugin_dir_url( __FILE__ ) );
}

if (!defined('TH_VARIATION_SWATCHES_PLUGIN_PATH')) {
    define( 'TH_VARIATION_SWATCHES_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
}

if (!defined('TH_VARIATION_SWATCHES_PLUGIN_DIRNAME')) {
    define( 'TH_VARIATION_SWATCHES_PLUGIN_DIRNAME', dirname( plugin_basename( __FILE__ ) ) );
}

if (!defined('TH_VARIATION_SWATCHES_PLUGIN_BASENAME')) {
    define( 'TH_VARIATION_SWATCHES_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
}

if (!defined('TH_VARIATION_SWATCHES_IMAGES_URI')) {
define( 'TH_VARIATION_SWATCHES_IMAGES_URI', trailingslashit( plugin_dir_url( __FILE__ ) . 'images' ) );
}

if (!defined('TH_VARIATION_SWATCHES_VERSION')) {
    $plugin_data = get_file_data(__FILE__, array('version' => 'Version'), false);
    define('TH_VARIATION_SWATCHES_VERSION', $plugin_data['version']);
} 

if (!class_exists('TH_Variation_Swatches')) {
require_once("inc/thvs.php");
}   

        /**
         * Add the settings link to the Lead Form Plugin plugin row
         *
         * @param array $links - Links for the plugin
         * @return array - Links
         */
function thvs_plugin_action_links($links) {
          $settings_page = add_query_arg(array('page' => 'th-variation-swatches'), admin_url());
          $settings_link = '<a href="'.esc_url($settings_page).'">'.__('Settings', 'th-variation-swatches' ).'</a>';
          array_unshift($links, $settings_link);

           $links['thvs_pro'] = sprintf( '<a style="color: #39b54a; font-weight:600;" href="%s" target="_blank" class="thvs-plugins-gopro">%s</a>', 'https://themehunk.com/th-variation-swatches/', __( 'Go Pro', 'th-variation-swatches' ) );
          return $links;
        }
add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'thvs_plugin_action_links', 10, 1);