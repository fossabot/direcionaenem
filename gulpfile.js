var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
    mix.styles('style.min.css', 'public/css/all.css');
    mix.scripts([
        'jquery.min.js',
        'tether.min.js',
        'bootstrap.min.js',
        'adminplus.js',
        'main.min.js'
    ], 'public/js/app.js');
    mix.version(['public/css/all.css', 'public/js/app.js']);
});
