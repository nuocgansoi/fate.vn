const {mix} = require('laravel-mix');

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
const sassFolder = 'resources/assets/sass/';
const jsFolder = 'resources/assets/js/';
const resourceVendor = 'resources/assets/vendor/';
const publicVendor = 'public/vendor/';

mix.js(jsFolder + 'app.js', 'public/js')
    .sass(sassFolder + 'app.scss', 'public/css')
    .sass(sassFolder + 'library.scss', 'public/css')
    .js(jsFolder + 'bootstrap.js', 'public/js');

//Admin page
mix.copy('resources/assets/admin/css/app.css', 'public/admin/css');
mix.copy('resources/assets/admin/css/vendor.css', 'public/admin/css');
