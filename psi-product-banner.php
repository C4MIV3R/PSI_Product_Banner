<? php
/*
Plugin Name: PSI Product Banner
Plugin URI: ?
Description: Easily add a banner to the top of product pages using WooCommerce.
Author: Cam Iverson
Author URI: ?
Text Domain: psi-product-banner
Domain Path: ?
Version: 0.0.1
*/

define('psiPB_version', '0.0.1');

define('psiPB_REQUIRED_WP_VERSION', '4.2');

define('psiPB_PLUGIN',__FILE__);

define('psiPB_PLUGIN_BASENAME', plugin_basename(psiPB_PLUGIN));

define('psiPB_PLUGIN_NAME', trim( dirname(psiPB_PLUGIN_BASENAME)));

define('psiPB_PLUGIN_DIR', untrailingslashit( dirname(psiPB_PLUGIN)));

define('psiPB_PLUGIN_MODULES_DIR', psiPB_PLUGIN_DIR . '/modules');

if (!defined('psiPB_LOAD_JS')){
    define('psiPB_LOAD_JS', true);
}

if (!defined('psiPB_LOAD_CSS')) {
    define('psiPB_LOAD_CSS', true);
}

// if (!defined('psiPB_USE_PIPE')) {
//     define('psiPB_USE_PIPE', true);
// }

if (!defined('psiPB_ADMIN_READ_CAPABILITY')) {
    define('psiPB_ADMIN_READ_CAPABILITY', 'edit_posts');
}

if (!defined('psiPB_ADMIN_READ_WRITE_CAPABILITY')) {
    define('psiPB_ADMIN_READ_WRITE_CAPABILITY','publish_pages');
}

if (!defined('psiPB_VERIFY_NONCE')) {
    define('psiPB_VERIFY_NONCE', true);
}

require_once psiPB_PLUGIN_DIR . '/settings.php';
