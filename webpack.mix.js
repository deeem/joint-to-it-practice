let mix = require('laravel-mix');

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

mix.js([
  'resources/assets/js/app.js',
  'node_modules/jquery.easing/jquery.easing.js',
  'node_modules/chart.js/dist/Chart.js',
  'node_modules/startbootstrap-sb-admin/js/sb-admin-datatables.js',
  'node_modules/startbootstrap-sb-admin/js/sb-admin-charts.js',
  'node_modules/startbootstrap-sb-admin/js/sb-admin.js'
], 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
