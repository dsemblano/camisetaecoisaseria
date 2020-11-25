<?php

namespace App;

/**
 * Add <body> classes
 */
add_filter('body_class', function (array $classes) {
    /** Add page slug if it doesn't exist */
    if (is_single() || is_page() && !is_front_page()) {
        if (!in_array(basename(get_permalink()), $classes)) {
            $classes[] = basename(get_permalink());
        }
    }

    /** Add class if sidebar is active */
    if (display_sidebar()) {
        $classes[] = 'sidebar-primary';
    }

    /** Clean up class names for custom templates */
    $classes = array_map(function ($class) {
        return preg_replace(['/-blade(-php)?$/', '/^page-template-views/'], '', $class);
    }, $classes);

    return array_filter($classes);
});

/**
 * Add "… Continued" to the excerpt
 */
add_filter('excerpt_more', function () {
    return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
});

/**
 * Template Hierarchy should search for .blade.php files
 */
collect([
    'index', '404', 'archive', 'author', 'category', 'tag', 'taxonomy', 'date', 'home',
    'frontpage', 'page', 'paged', 'search', 'single', 'singular', 'attachment', 'embed'
])->map(function ($type) {
    add_filter("{$type}_template_hierarchy", __NAMESPACE__.'\\filter_templates');
});

/**
 * Render page using Blade
 */
add_filter('template_include', function ($template) {
    collect(['get_header', 'wp_head'])->each(function ($tag) {
        ob_start();
        do_action($tag);
        $output = ob_get_clean();
        remove_all_actions($tag);
        add_action($tag, function () use ($output) {
            echo $output;
        });
    });
    $data = collect(get_body_class())->reduce(function ($data, $class) use ($template) {
        return apply_filters("sage/template/{$class}/data", $data, $template);
    }, []);
    if ($template) {
        echo template($template, $data);
        return get_stylesheet_directory().'/index.php';
    }
    return $template;
}, PHP_INT_MAX);

/**
 * Render comments.blade.php
 */
add_filter('comments_template', function ($comments_template) {
    $comments_template = str_replace(
        [get_stylesheet_directory(), get_template_directory()],
        '',
        $comments_template
    );

    $data = collect(get_body_class())->reduce(function ($data, $class) use ($comments_template) {
        return apply_filters("sage/template/{$class}/data", $data, $comments_template);
    }, []);

    $theme_template = locate_template(["views/{$comments_template}", $comments_template]);

    if ($theme_template) {
        echo template($theme_template, $data);
        return get_stylesheet_directory().'/index.php';
    }

    return $comments_template;
}, 100);

// // REMOVE WP EMOJI
// remove_action('wp_head', 'print_emoji_detection_script', 7);
// remove_action('wp_print_styles', 'print_emoji_styles');

// remove_action('admin_print_scripts', 'print_emoji_detection_script');
// remove_action('admin_print_styles', 'print_emoji_styles');

// /**
//  * Inject critical assets in head as early as possible
//  */
// add_action('wp_head', function (): void {
//     if ('development' === env('WP_ENV')) {
//         return;
//     }

//     if (is_front_page()) {
//         // $critical_CSS = locate_asset('styles/critical-home.css');
//         $critical_CSS = 'styles/critical-home.css';
//     } elseif (is_singular()) {
//         // $critical_CSS = locate_asset('styles/critical-singular.css');
//         $critical_CSS = 'styles/critical-singular.css';
//     } else {
//         // $critical_CSS = locate_asset('styles/critical-landing.css');
//         $critical_CSS = 'styles/critical-landing.css';
//     }

//     // if (file_exists($critical_CSS)) {
//     if (file_exists(locate_asset($critical_CSS))) {
//         echo '<style id="critical-css">' . get_file_contents($critical_CSS) . '</style>';
//     }
// }, 1);

// // Woobe plugin
// add_filter('woobe_filter_include_children', function($include, $tax) {
//     $alow = ['product_cat', 'pa_color'];

//     if (in_array($tax, $alow)) {
//         $include = true;
//     }

//     return $include;
// }, 10, 2);
