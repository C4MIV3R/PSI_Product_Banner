<? php

if (!defined('psiPB_UNINSTALL_PLUGIN')) {
    exit();
}

function psiPB_delete_plugin() {
    global $psiPBdb;

    delete_option('psiPB');

    $posts = get_posts(array (
        'numberposts' => -1,
        'post_type' => 'psiPB',
        'post_status' => 'any' ));

    foreach ($posts as $post) {
        wp_delete_post($post->ID, true);
    }
    $table_name = $psiPBdb->prefix . "psiPB";

    $psiPBdb->query("DROP TABLE IF EXISTS $table_name");
}

psiPB_delete_plugin();

?>
