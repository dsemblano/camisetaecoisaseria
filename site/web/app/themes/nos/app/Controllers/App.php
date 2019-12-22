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
    public function destaquesProdutos()
    {
        // $base_price = product_base_price($product->get_id());
        $args = array(
                'limit' => -1,
                'status'=> 'publish',
                'post_type' => 'product',
                'category' => 'faca-sua-nos',
                // 'base_price' => $base_price,
            );

        return wc_get_products($args);
    }
}
