const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/app.js", "public/js")
    .postCss("resources/css/app.css", "public/css", [
        require("tailwindcss"),
    ])
    .js('resources/js/carousel.js', 'js/carousel.js')
    .js('resources/js/jquery.js', 'js/jquery.js')
    .less('resources/less/carousel.less', 'css/carousel.css')
    
if (mix) mix.version()
