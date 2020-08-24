const mix = require('laravel-mix');

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

mix.styles(  'resources/views/admin/css/sb-admin-2.css', 
            'public/dashboard/css/sb-admin-2.min.css')
    .scripts(   'resources/views/admin/js/sb-admin-2.js', 
                'public/dashboard/js/sb-admin-2.min.js');
