<?php
/**
 * Plugin Name: Kemal's Excellent ThemeForest Redirector
 * Plugin URI: https://github.com/kemalkautsar/kemals-excellent-themeforest-redirector
 * Description: a WordPress plugin to change a redirect link from your ThemeForest product page's demo link to a referral page for more $$$ for you
 * Version: 1.0
 * Author: Kemal Kautsar
 * Author URI: https://github.com/kemalkautsar
 * License: BSD License
 * Text Domain: kemals-redirector
 *
 * @package kemals-redirector
 * @since 1.0.0
 */


function kemal_redirect() {
    wp_enqueue_script( 'lamek-script', 	plugin_dir_url(__FILE__).'script.js');
}
add_action( 'wp_enqueue_scripts', 'kemal_redirect' );