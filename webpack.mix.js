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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps().version();

    mix.styles([
        './resources/css/custom-page.css',
    ],'public/css/bundle.css').version();

    mix.scripts([
        './resources/js/custom-page.js',
    ], 'public/js/bundle.js').version();

    mix.styles([
        './resources/css/bootstrap.min.css',
        './resources/css/style.css',
        './resources/css/custom.css',
        './resources/css/components.css'
    ],'public/css/dashboard.css').version();

    // mix.scripts([
    //     './resources/js/jquery-3.3.1.min.js',
    //     './resources/js/popper.min.js',
    //     './resources/js/bootstrap.min.js',
    //     './resources/js/jquery.nicescroll.min.js',
    //     './resources/js/moment.min.js',
    //     './resources/js/stisla.js',
    //     './resources/js/scripts.js',
    //     './resources/js/custom.js',
    //     './resources/js/page/components-table.js',
    //     './resources/js/page/index.js'
    // ], 'public/js/dashboard.js').version();
