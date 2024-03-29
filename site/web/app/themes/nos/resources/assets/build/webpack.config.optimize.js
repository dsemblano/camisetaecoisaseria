'use strict'; // eslint-disable-line

const { default: ImageminPlugin } = require('imagemin-webpack-plugin');
const imageminMozjpeg = require('imagemin-mozjpeg');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');
// purgecss
const glob = require('glob-all');
const PurgecssPlugin = require('purgecss-webpack-plugin');
const whitelister = require('purgecss-whitelister');

// const HtmlCriticalWebpackPlugin = require("html-critical-webpack-plugin");

const config = require('./config');

class TailwindExtractor {
  static extract(content) {
    return content.match(/[A-z0-9-:\/]+/g) || [];
  }
}

module.exports = {
  plugins: [
    new ImageminPlugin({
      optipng: { optimizationLevel: 2 },
      gifsicle: { optimizationLevel: 3 },
      pngquant: { quality: '65-90', speed: 4 },
      svgo: {
        plugins: [
          { removeUnknownsAndDefaults: false },
          { cleanupIDs: false },
          { removeViewBox: false },
        ],
      },
      plugins: [imageminMozjpeg({ quality: 75 })],
      disable: (config.enabled.watcher),
    }),
    new UglifyJsPlugin({
      uglifyOptions: {
        ecma: 5,
        compress: {
          warnings: true,
          drop_console: true,
        },
      },
    }),

    new PurgecssPlugin({
      paths: glob.sync([
        'app/**/*.php',
        'resources/views/**/*.php',
        'resources/assets/scripts/**/*.js',
      ]),
      extractors: [
        {
          extractor: TailwindExtractor,
          extensions: ["js", "php"]
        }
      ],
      whitelist: [ // Only if you need it!
        "resources/assets/styles/common/*.scss",
        "resources/assets/styles/components/*.scss",
        "resources/assets/styles/layouts/*.scss",
        'menu-item', 'sub-menu', 'single-post',
        'figcaption', 'blockquote', 'alignright', 'aligncenter', 'alignleft',
        'instagram-pics', 'heateor_sss_sharing_container', 'quantity', 'qty',
        'heateorSssWhatsappBackground', 'heateorSssSMSBackground',
        'mob-menu-header-holder', 'mobmenu', 'mobmenul-container', 'mobmenu-left-bt', 'mobmenu-trigger-action',
        'mob-icon-menu-3', 'mob-menu-icon',
        'heateor_sss_horizontal_sharing', 'blockhome', 'woocommerce-product-details__short-description',
        'banner', 'nav-links', 'page-numbers', 'current', 'wc-block-grid__product-add-to-cart', 'woocommerce-breadcrumb',
        'lumise-button', 'lumise-list-button', 'button', 'woocommerce-tabs', 'panel', 'update_totals_on_change',
        'flex-control-thumbs', 'woocommerce-tabs', 'menu-menu-container', 'mob-menu-header-holder',
        "my-whitelisted-selector", "lazyloaded", "is-active", 'ysm-search-widget',
        ...whitelister("node_modules/tailwindcss/css/preflight.css"),
      ],
      whitelistPatternsChildren: [/^gfield/, /^gform/, /^woocommerce-product-gallery/, /^ysm-search-widget/, /^ginput/, /^banner/, /^nav-primary/, /^hamburger/],
    }),

    // new HtmlCriticalWebpackPlugin({
    //   base: config.paths.dist,
    //   src: config.devUrl,
    //   dest: "styles/critical-home.css",
    //   ignore: ["@font-face", /url\(/],
    //   inline: false,
    //   minify: true,
    //   extract: false,
    //   dimensions: [
    //     {
    //       width: 360,
    //       height: 640,
    //     },
    //     {
    //       width: 1920,
    //       height: 1080,
    //     },
    //   ],
    //   penthouse: {
    //     blockJSRequests: false,
    //     timeout: 160000
    //   },
    // }),
  ],
};
