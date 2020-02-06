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

    public function subCategories() {
        $cat_prod = 'faca-sua-camiseta';
        $product_cat_ID = get_term_by('slug', $cat_prod, 'product_cat')->term_id;
        $args = array(
            'show_option_none' => '',
            'hide_empty' => 0,
            'parent' => $product_cat_ID,
            'taxonomy' => 'product_cat'
        );
        return get_categories($args);
    }

    public function homeProducts() {
        $destaques_produtos = wc_get_products(array(
            'limit' => -1,
            'status'=> 'publish',
            'orderby' => 'rand',
            'category' => 'faca-sua-camiseta'
        ));

        // var_dump($destaques_produtos);

        return $destaques_produtos;
    }

    // public function destaquesProdutos() {
    //     $get_categories = App::subcats();
    //     $args2 = array(
    //         'limit' => -1,
    //         'status'=> 'publish',
    //         'category' => $get_categories->slug
    //     );

    //     return wc_get_products($args2);
    // }
}
