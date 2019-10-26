const mix = require('laravel-mix');

mix.options({
    processCssUrls: false,
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

mix.sass('resources/assets/scss/app/main.scss', 'public/css/vendor.css').version();

mix.sass('resources/assets/scss/list.scss', 'public/css/list.css').version();

mix.copy('resources/assets/scss/icons.scss', 'public/css/icons.css');

mix.sass('resources/assets/editor/style.scss', 'public/css/editor/style.css').version();

mix.js([
    'resources/js/vendor.js',
], 'public/js/landing/vendor.js').version();

mix.js([
    'resources/js/expert/index.js',
], 'public/js/landing/expert/app.js').version();

mix.js([
    'resources/js/settings/index.js',
], 'public/js/landing/settings/app.js').version();

