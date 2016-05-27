var elixir = require('laravel-elixir');

elixir(function (mix) {
    mix.styles([
        'style.min.css',
        'sweetalert.min.css'
    ], 'public/css/all.css');

    mix.scripts([
        'jquery.min.js',
        'tether.min.js',
        'bootstrap.min.js',
        'adminplus.js',
        'main.min.js',
        'sweetalert.min.js'
    ], 'public/js/app.js');

    mix.version(['public/css/all.css', 'public/js/app.js']);
});
