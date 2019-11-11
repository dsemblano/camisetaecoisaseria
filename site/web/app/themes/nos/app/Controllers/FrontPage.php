<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function slideshow()
    {
        if (is_front_page()) {
            $args = array(
                //'orderby' => 'featured-checkbox',
                'order' => 'DESC',
                'posts_per_page'=> 10,
                'tax_query' => array(
                    'taxonomy' => 'product_visibility',
                    'field'    => 'name',
                    'terms'    => 'featured',
                    'operator' => 'IN', // or 'NOT IN' to exclude feature products
                ),
                'meta_query' => array(
                                array(
                                'key' => 'featured-checkbox',
                                'value' => 'yes'
                        )
                    )
             );

            $featured_query = new \WP_Query($args);
            return $featured_query;
        }
    }

    public static function slideshowExcerpt()
    {
        $slideshow = (new self)->slideshow();
        while ($slideshow->have_posts()) {
            if (has_excerpt()) {
                return substr(get_the_excerpt(), 0, 450);
            } else {
                $content = apply_filters('get_the_content', get_the_content());
                $content = strip_tags($content);
                $content = mb_strimwidth($content, 0, 500, ' ...');
                $content = strip_shortcodes($content);
                return $content;
            }
            wp_reset_postdata();
        }
    }

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
