const mix = require('laravel-mix');
const path = require('path');
mix.webpackConfig({
   resolve: {
       alias: {
           '@components': path.resolve(__dirname, 'resources/js/components'),
           '@pages': path.resolve(__dirname, 'resources/js/pages'),
           '@themes': path.resolve(__dirname, 'resources/js/themes'),
       }
   }
});


/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/assets/js')
    .version();
