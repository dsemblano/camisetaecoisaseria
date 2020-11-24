<?php

@ini_set( 'upload_max_size' , '300M' );
//Remove JQuery migrate
// function remove_jquery_migrate($scripts)
// {
//     if (!is_admin() && isset($scripts->registered['jquery'])) {
//         $script = $scripts->registered['jquery'];

//         if ($script->deps) { // Check whether the script has any dependencies
//             $script->deps = array_diff($script->deps, array(
//                 'jquery-migrate'
//             ));
//         }
//     }
// }

// add_action('wp_default_scripts', 'remove_jquery_migrate');


// Woocommerce edits
/**
 * Rename product data tabs
 */
// add_filter('woocommerce_product_tabs', 'woo_rename_tabs', 98);
// function woo_rename_tabs($tabs)
// {
//     $tabs['description']['title'] = __('Mais informações'); // Rename the description tab
//     $tabs['reviews']['title'] = __('Ratings'); // Rename the reviews tab
//     $tabs['additional_information']['title'] = __('Informações do produto'); // Rename the additional information tab

//     return $tabs;
// }

/**
 * Change number of related products output
 */
// function woo_related_products_limit()
// {
//     global $product;

//     $args['posts_per_page'] = 6;
//     return $args;
// }

// add_filter('woocommerce_output_related_products_args', 'jk_related_products_args', 20);
// function jk_related_products_args($args)
// {
//     $args['posts_per_page'] = 8; // 4 related products
//     $args['columns'] = 4; // arranged in 2 columns
//     return $args;
// }

// Change WooCommerce "Related products" text

// add_filter('gettext', 'change_rp_text', 10, 3);
// add_filter('ngettext', 'change_rp_text', 10, 3);

// function change_rp_text($translated, $text, $domain)
// {
//     if ($text === 'Related products' && $domain === 'woocommerce') {
//         $translated = esc_html__('Veja mais', $domain);
//     }
//     return $translated;
// }

// add_filter('woocommerce_product_add_to_cart_text', function ($text) {
//     if ('Read more' == $text) {
//         $text = esc_html__('Ver detalhes', 'woocommerce');
//     }

//     if ('Add to cart' == $text) {
//         $text = esc_html__('Adicionar', 'woocommerce');
//     }

//     return $text;
// });

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
// // }

// return ! wp_is_file_mod_allowed(apply_filters('loco_file_mod_allowed_context', 'download_language_pack'));

add_action('widgets_init', 'register_my_widgets');


function register_my_widgets()
{
    register_widget('My_Text_Widget');
}

class My_Text_Widget extends WP_Widget_Text
{
    public function widget($args, $instance)
    {
        extract($args);
        $title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title'], $instance, $this->id_base);
        $text = apply_filters('widget_text', empty($instance['text']) ? '' : $instance['text'], $instance);
        echo $before_widget;
        if (!empty($title)) {
            echo $before_title . $title . $after_title;
        } ?>
            <?php echo !empty($instance['filter']) ? wpautop($text) : $text; ?>
        <?php
        echo $after_widget;
    }
}

//Disable gutenberg style in Front
// function wps_deregister_styles()
// {
//     wp_dequeue_style('wp-block-library');
// }
// add_action('wp_print_styles', 'wps_deregister_styles', 100);

// // Disable wp-embed.js
// function my_deregister_scripts()
// {
//     wp_deregister_script('wp-embed');
// }
// add_action('wp_footer', 'my_deregister_scripts');

//removing WP version
remove_action('wp_head', 'wp_generator');

// removing WP version from RSS
function remove_wp_version_rss()
{
    return'';
}
add_filter('the_generator', 'remove_wp_version_rss');

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

function my_login_logo_one()
{
    $imgpath = \App\asset_path('images/brand.png');
    $img_custom = <<<HTML
  <style type="text/css">
    body.login div#login h1 a {
    background-image:url($imgpath);
    width: 100%;
    padding: 0;
    background-size: cover;
    height: 295px;
    }
  </style>
HTML;
    echo $img_custom;
} add_action('login_enqueue_scripts', 'my_login_logo_one');

function the_url($url)
{
    return get_bloginfo('url');
}
add_filter('login_headerurl', 'the_url');

// Remove dashicons in frontend for unauthenticated users
// add_action('wp_enqueue_scripts', 'bs_dequeue_dashicons');
// function bs_dequeue_dashicons()
// {
//     if (! is_user_logged_in()) {
//         wp_deregister_style('dashicons');
//     }
// }

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'dashicons' );
} );

// allow_file_mod
add_filter('file_mod_allowed', 'allow_file_mod_language_folder', 10, 2);
function allow_file_mod_language_folder($allow_file_mod, $context)
{
    if ('download_language_pack' === $context) {
        return true;
    } else {
        return $allow_file_mod;
    }
}

// function enqueue_select2_jquery()
// {
//     wp_register_style('select2css', '//cdnjs.cloudflare.com/ajax/libs/select2/3.4.8/select2.css', false, '1.0', 'all');
//     wp_register_script('select2', '//cdnjs.cloudflare.com/ajax/libs/select2/3.4.8/select2.js', array( 'jquery' ), '1.0', true);
//     wp_enqueue_style('select2css');
//     wp_enqueue_script('select2');
// }
// add_action('admin_enqueue_scripts', 'enqueue_select2_jquery');


add_action('after_setup_theme', 'yourtheme_setup');
function yourtheme_setup()
{
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}

// remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');
// // remove da página produtos de veja mais
// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart');
// 1 Disable State
// add_filter( 'woocommerce_shipping_calculator_enable_state', '__return_false' );
// add_filter( 'woocommerce_shipping_calculator_enable_country', '__return_false' );
// // 2 Disable City
// add_filter( 'woocommerce_shipping_calculator_enable_city', '__return_false' );

//
// prazo entrega no email
// function my_wc_custom_cart_shipping_notice()
// {
//     echo '<tr class="shipping-notice"><td colspan="2"><small>';
//     _e('<strong>Atenção:</strong> O prazo de entrega começa a contar a partir da aprovação do pagamento.', 'my-text-domain');
//     echo '</small></td></tr>';
// }

// add_action('woocommerce_cart_totals_after_shipping', 'my_wc_custom_cart_shipping_notice');
// add_action('woocommerce_review_order_after_shipping', 'my_wc_custom_cart_shipping_notice');

// /**
//  * Adds a custom message about how long will take to delivery in emails.
//  *
//  * @param  WC_Order $order         Order data.
//  * @param  bool     $sent_to_admin True if is an admin email.
//  */
// function my_wc_custom_email_shipping_notice($order, $sent_to_admin)
// {
//     if ($sent_to_admin) {
//         return;
//     }

//     _e('<strong>Atenção:</strong> O prazo de entrega começa a contar a partir da aprovação do pagamento.', 'my-text-domain');
// }

// add_action('woocommerce_email_after_order_table', 'my_wc_custom_email_shipping_notice', 100, 2);

// // Remove Additional Information

// // add_filter( 'woocommerce_product_tabs', 'bbloomer_remove_product_tabs', 9999 );

// // function bbloomer_remove_product_tabs( $tabs ) {
// //     unset( $tabs['additional_information'] );
// //     return $tabs;
// // }

// // CPF email
// function cpf_email( $order, $sent_to_admin, $plain_text ) {

//     if ($order->billing_cpf){
//         echo '<br><p> <strong>CPF: </strong>'. $order->billing_cpf.'</p>';
//     }
//     if ($order->billing_cnpj){
//         echo '<br><p> <strong>CNPJ: </strong>'. $order->billing_cnpj. '</p>';
//     }

// }
// add_action('woocommerce_email_customer_details', 'cpf_email', 30, 3 );

/**
 * Async load CSS.
 */
    // add_filter('style_loader_tag', function ($html, $handle, $href) {
    //     if (is_admin()) {
    //         return $html;
    //     }

    //     // var_dump($handle);

    //     $dom = new \DOMDocument();
    //     $dom->loadHTML($html);
    //     $tag = $dom->getElementById($handle . '-css');
    //     $tag->setAttribute('media', 'print');
    //     $tag->setAttribute('onload', "this.media='all");
    //     $tag->removeAttribute('type');
    //     $tag->removeAttribute('id');
    //     $html = $dom->saveHTML($tag);
    //     return $html;
    // }, 9999, 3);

    // Widget as Shortcode

    function widget($atts) {

        global $wp_widget_factory;

        extract(shortcode_atts(array(
            'widget_name' => FALSE
        ), $atts));

        $widget_name = wp_specialchars($widget_name);

        if (!is_a($wp_widget_factory->widgets[$widget_name], 'WP_Widget')):
            $wp_class = 'WP_Widget_'.ucwords(strtolower($class));

            if (!is_a($wp_widget_factory->widgets[$wp_class], 'WP_Widget')):
                return '<p>'.sprintf(__("%s: Widget class not found. Make sure this widget exists and the class name is correct"),'<strong>'.$class.'</strong>').'</p>';
            else:
                $class = $wp_class;
            endif;
        endif;

        ob_start();
        the_widget($widget_name, $instance, array('widget_id'=>'arbitrary-instance-'.$id,
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => ''
        ));
        $output = ob_get_contents();
        ob_end_clean();
        return $output;

    }
    add_shortcode('widget','widget');


    //Disable gutenberg style in Front
    function wps_deregister_styles() {
        wp_dequeue_style( 'wp-block-library' );
    }
    add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );


    // Remove the additional information tab
    function woo_remove_product_tabs($tabs)
    {
        unset($tabs['additional_information']);
        return $tabs;
    }
    add_filter('woocommerce_product_tabs', 'woo_remove_product_tabs', 98);
