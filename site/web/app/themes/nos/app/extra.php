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
        $text = esc_html__('Ver detalhes', 'woocommerce');
    }

    if ('Add to cart' == $text) {
        $text = esc_html__('Adicionar', 'woocommerce');
    }

    return $text;
});

/**
* Change View cart text
*
*/
// function my_text_strings($translated_text, $text, $domain)
// {
//     switch ($translated_text) {
//         case 'View cart':
//             $translated_text = __('Ir para o carrinho', 'woocommerce');
//             break;
//         case 'Cart':
//             $translated_text = __('Carrinho', 'woocommerce');
//             break;
//         case 'Product':
//             $translated_text = __('Produtos', 'woocommerce');
//             break;
//         case 'Price':
//             $translated_text = __('Preço', 'woocommerce');
//             break;
//         case 'Quantity':
//             $translated_text = __('Quantidade', 'woocommerce');
//             break;
//         case 'Apply coupon':
//             $translated_text = __('Aplicar', 'woocommerce');
//             break;
//         case 'Coupon code':
//             $translated_text = __('Cupom desconto', 'woocommerce');
//             break;
//         case 'Update cart':
//             $translated_text = __('Atualizar carrinho', 'woocommerce');
//             break;
//         case 'Cart totals':
//             $translated_text = esc_html_e('Total carrinho', 'woocommerce');
//             break;
//         case 'Calculate shipping':
//             $translated_text = esc_html_e('Calcular frete', 'woocommerce');
//             break;
//         case 'Proceed to checkout':
//             $translated_text = esc_html_e('Finalizar compra', 'woocommerce');
//             break;
//     }
//     return $translated_text;
// }
//     add_filter('gettext', 'my_text_strings', 20, 3);


// // something
// add_filter('woocommerce_before_cart_contents', function ($text) {
//     if ('Quantity' == $text) {
//         $text = esc_html__('quant', 'woocommerce');
//     }

//     return $text;
// });

// Change 'add to cart' text archieve, template custom pages
// add_filter('woocommerce_product_add_to_cart_text', 'bryce_add_to_cart_text');
// function bryce_add_to_cart_text()
// {
//     return __('Adicionar', 'woocommerce');
// }

return ! wp_is_file_mod_allowed(apply_filters('loco_file_mod_allowed_context', 'download_language_pack'));
