<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function slideshow()
    {
        if (is_front_page()) {
            $stickies = get_option('sticky_posts');
            // Make sure we have stickies to avoid unexpected output
            if ($stickies) {
                $args = [
                'post_type'           => 'post',
                'post__in'            => $stickies,
                'ignore_sticky_posts' => 1
                ];
                return new \WP_Query($args);
            }
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
