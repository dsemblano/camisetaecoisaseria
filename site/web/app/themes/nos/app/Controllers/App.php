<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    // Camisetas destaques home
    // public function destaquesProdutos()
    // {
    //     // $base_price = product_base_price($product->get_id());
    //     // $base_price  = $_POST['product_base'];

    //     $args = array(
    //             'limit' => -1,
    //             'status'=> 'publish',
    //             'post_type' => 'product',
    //             'category' => 'faca-sua-nos',
    //             // 'base_price' => $base_price,
    //         );

    //     return wc_get_products($args);
    // }

    // public static function destaquesProdutosCat()
    // {
    //     $product_cat_ID = get_term_by('slug', 'faca-sua-nos', 'product_cat')->term_id;
    //     $args = array(
    //         'hierarchical' => 1,
    //         'show_option_none' => '',
    //         'hide_empty' => 0,
    //         'parent' => $product_cat_ID,
    //         'taxonomy' => 'product_cat'
    //     );
    //     $subcats = get_categories($args);

    //     // produtos
    //     $args = array(
    //         'limit' => -1,
    //         'status'=> 'publish',
    //         'post_type' => 'product',
    //         'category' => 'faca-sua-nos',
    //         // 'base_price' => $base_price,
    //     );
    //     $destaques_produtos =  wc_get_products($args);

    //         foreach ($subcats as $sc) {
    //             $link = get_term_link( $sc->slug, $sc->taxonomy );
    //             echo '<h3><a href="'. $link .'">'.$sc->name.'</a></h3>';

    //             foreach ($destaques_produtos as $product) {
    //                 echo '<li class="last-products my-2 px-2 w-1/2 overflow-hidden sm:w-1/4 xl:mt-1 xl:mb-8 xl:px-5 xl:w-1/4">';
    //                 echo $product->get_image();
    //                 echo '<h2 class="text-base mt-3">';
    //                 echo '<a href=' . $product->get_permalink( ) . '> . '$product->get_title() . '</a>';
    //                 echo '</h2>';
    //                     if ($product->get_price()) {
    //                         $product_base = get_post_meta($product->get_id(), 'lumise_product_base', true);
    //                         // echo $product_base;
    //                         echo '<span>R$' . $product->get_price() . '</span>';
    //                         $html ='<a class="lumise-button-customize btn-estudio-products uppercase" href="/design-editor/?product_cms='. $product->get_id() .'&product_base=' . $product_base .'" type="button">Crie a sua aqui</a>';
    //                         echo $html;
    //                     }

    //                 do_action( 'woocommerce_after_shop_loop_item' );
    //                 echo '</li>';
    //             }
    //         }
    // }
}
