<?php 
/**
* Plugin Name: Our Team (Group)
* Description: This plugin allows create Our Team plugin.
* Version: 1.0
* Copyright: 2020
* Text Domain: our-team-group
* Domain Path: /languages 
*/

if (!defined('ABSPATH')) {
   	die('-1');
}
if (!defined('OURSTEAMS_PLUGIN_NAME')) {
   	define('OURSTEAMS_PLUGIN_NAME', 'OUR TEAM');
}
if (!defined('OURSTEAMS_PLUGIN_VERSION')) {
   	define('OURSTEAMS_PLUGIN_VERSION', '1.0.0');
}
if (!defined('OURSTEAMS_PLUGIN_FILE')) {
   	define('OURSTEAMS_PLUGIN_FILE', __FILE__);
}
if (!defined('OURSTEAMS_PLUGIN_DIR')) {
   	define('OURSTEAMS_PLUGIN_DIR',plugins_url('', __FILE__));
}
if (!defined('OURSTEAMS_BASE_NAME')) {
    define('OURSTEAMS_BASE_NAME', plugin_basename(OURSTEAMS_PLUGIN_FILE));
}
if (!defined('OURSTEAMSPREFIX')) {
    define('OURSTEAMSPREFIX', "oursteams_");
}



include_once('includes/admin_functions.php');
include_once('includes/asmin_shortcode_fuctions.php');
include_once('includes/front_functions.php');



function ourtems_load_admin_script_style() {
			 wp_enqueue_style( 'wp-color-picker');
		    wp_enqueue_script( 'wp-color-picker');
		    wp_enqueue_style( 'ourtems-back-style', OURSTEAMS_PLUGIN_DIR . '/asset/css/backend_style.css', false, '1.0.0' );
            wp_enqueue_script( 'ourtems-back-script', OURSTEAMS_PLUGIN_DIR . '/asset/js/back_script.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'ourtems_load_admin_script_style');

function ourtems_load_script_style() {
         	wp_enqueue_style( 'ourtems-front-css', OURSTEAMS_PLUGIN_DIR . '/asset/css/front_style.css', false, '2.0.0' );
         	wp_enqueue_style( 'owlcarousel-min', OURSTEAMS_PLUGIN_DIR . '/asset/owlcarousel/assets/owl.carousel.min.css', false, '1.0.0' );
            wp_enqueue_style( 'owlcarousel-theme', OURSTEAMS_PLUGIN_DIR . '/asset/owlcarousel/assets/owl.theme.default.min.css', false, '1.0.0' );
            wp_enqueue_script( 'jquery' );
            wp_enqueue_script( 'owlcarousel', OURSTEAMS_PLUGIN_DIR . '/asset/owlcarousel/owl.carousel.js', false, '1.0.0' );
            
}
add_action( 'wp_enqueue_scripts',  'ourtems_load_script_style');


add_action( 'plugins_loaded', 'wpdocs_load_textdomain' );
 
function wpdocs_load_textdomain() {
    load_plugin_textdomain( 'our-team-group', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
}

function my_plugin_load_my_own_textdomain( $mofile, $domain ) {
    if ( 'our-team-group' === $domain && false !== strpos( $mofile, WP_LANG_DIR . '/plugins/' ) ) {
        $locale = apply_filters( 'plugin_locale', determine_locale(), $domain );
        $mofile = WP_PLUGIN_DIR . '/' . dirname( plugin_basename( __FILE__ ) ) . '/languages/' . $domain . '-' . $locale . '.mo';
    }
    return $mofile;
}
add_filter( 'load_textdomain_mofile', 'my_plugin_load_my_own_textdomain', 10, 2 );
