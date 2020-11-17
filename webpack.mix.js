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

mix.sass('resources/css/web/app.scss', 'public/css/app.css');
mix.js('resources/js/web/app.js', 'public/js/app.js');

if (mix.inProduction()) {
  mix.version();
}

