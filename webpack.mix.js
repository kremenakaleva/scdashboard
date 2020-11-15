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

 mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css')
    .copy('node_modules/semantic-ui-css/semantic.min.css','public/css/semantic.min.css')
    .copy('node_modules/bootstrap/dist/css/bootstrap.min.css','public/css/bootstrap.min.css')
    .copy('node_modules/semantic-ui-css/semantic.min.js','public/js/semantic.min.js')
    .copy('node_modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css','public/css/bootstrap-colorpicker.min.css')
    .copy('node_modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js','public/js/bootstrap-colorpicker.min.js')
    .copy('node_modules/bootstrap/dist/js/bootstrap.min.js','public/js/bootstrap.min.js')
    .copy('node_modules/popper.js/dist/popper.min.js','public/js/popper.min.js');
