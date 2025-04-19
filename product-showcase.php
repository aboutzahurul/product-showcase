<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://zahurul.com
 * @since             1.0.0
 * @package           Product_Showcase
 *
 * @wordpress-plugin
 * Plugin Name:       Product Showcase
 * Plugin URI:        https://zahurul.com/plugins/product-showcase
 * Description:       Simple Product Showcase custom post type in Wordpress.
 * Version:           1.0.1
 * Author:            Md. Zahurul Islam
 * Author URI:        https://zahurul.com
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       product-showcase
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) { die; }

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PRODUCT_SHOWCASE_VERSION', '1.0.1' );

/**
 * Setting global plugin name
 */
define( 'PRODUCT_SHOWCASE_NAME', 'product-showcase' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'class-product-showcase.php';


/**
 * Main plugin instance
 */
$Product_Showcase = Product_Showcase::instance();

// Register custom post type
add_action('init', array($Product_Showcase, 'register_custom_post_product_Showcase'), 10);

// Register custom taxonomies
add_action('init', array($Product_Showcase, 'register_custom_taxonomies'), 10);
