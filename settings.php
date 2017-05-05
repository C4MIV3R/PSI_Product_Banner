<? php

require_once psiPB_PLUGIN_DIR . '/includes/functions.php';



if ( is_admin()) {
    require_once psiPB_PLUGIN_DIR . '/admin/admin.php';
} else {
    require_once psiPB_PLUGIN_DIR . '/includes/controller.php';
}

// class psiPB {
//     public static function load_modules() {
//         return something;
//     }
// }
