<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    // Camisetas destaques home
    public function destaques()
    {
        if (is_front_page()) {
            $args = array(
                'limit' => 8,
                'status'=> 'publish',
            );
            return $products = wc_get_products($args);
            // foreach ($products as $product) {
            //     echo 'Type: '  . $product->get_type() . '<br>';  // Product type
            //     echo 'ID: '    . $product->get_id() . '<br>';    // Product ID
            //     echo 'Title: ' . $product->get_title() . '<br>'; // Product title
            //     echo 'Price: ' . $product->get_price();          // Product price
            // }
        }
    }
}
