<? php

add_action('admin_init', 'psi_product_banner_admin_init');

function psi_product_banner_admin_init() {
    do_action('psi_product_banner_admin_init');
}

add_action('admin_menu', 'psi_product_banner_admin_menu', 9);

function psi_product_banner_admin_menu() {
    add_menu_page(__('PSI Product Banner', 'psi-product-banner'),
                  __('PSI Product Banner','psi-product-banner'),
                  '',''
                  '','dashicons-format-image');

    $edit = add_submenu_page('')
}
