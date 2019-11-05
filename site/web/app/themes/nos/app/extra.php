<?php

//Remove JQuery migrate
function remove_jquery_migrate($scripts)
{
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $script = $scripts->registered['jquery'];

        if ($script->deps) { // Check whether the script has any dependencies
            $script->deps = array_diff($script->deps, array(
                'jquery-migrate'
            ));
        }
    }
}

add_action('wp_default_scripts', 'remove_jquery_migrate');


// Woocommerce edits
/**
 * Rename product data tabs
 */
add_filter('woocommerce_product_tabs', 'woo_rename_tabs', 98);
function woo_rename_tabs($tabs)
{
    $tabs['description']['title'] = __('Mais informações'); // Rename the description tab
    $tabs['reviews']['title'] = __('Ratings'); // Rename the reviews tab
    $tabs['additional_information']['title'] = __('Informações do produto'); // Rename the additional information tab

    return $tabs;
}

/**
 * Change number of related products output
 */
function woo_related_products_limit()
{
    global $product;

    $args['posts_per_page'] = 6;
    return $args;
}

add_filter('woocommerce_output_related_products_args', 'jk_related_products_args', 20);
function jk_related_products_args($args)
{
    $args['posts_per_page'] = 8; // 4 related products
    $args['columns'] = 4; // arranged in 2 columns
    return $args;
}

// Change WooCommerce "Related products" text

add_filter('gettext', 'change_rp_text', 10, 3);
add_filter('ngettext', 'change_rp_text', 10, 3);

function change_rp_text($translated, $text, $domain)
{
    if ($text === 'Related products' && $domain === 'woocommerce') {
        $translated = esc_html__('Veja mais', $domain);
    }
    return $translated;
}

add_filter('woocommerce_product_add_to_cart_text', function ($text) {
    if ('Read more' == $text) {
        $text = esc_html__('Mais', 'woocommerce');
    }

    return $text;
});
