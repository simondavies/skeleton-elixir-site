var elixir = require('laravel-elixir');
var publicPath = 'public',
    cssPath = publicPath + '/css',
    jsPath = publicPath + '/js';

/**
 * Over write some elixir settings
 */
elixir.config.publicPath = publicPath;
elixir.config.assetsPath = 'assets';
elixir.config.sourcemaps = false;

/**
 * Main Elixir function
 */
elixir(function(mix) {
    //-- copy some files over to use.
    mix.copy('node_modules/normalize.css/normalize.css','assets/sass/libs/normalize.scss');

    mix.sass([
        'Libs.scss'
    ], cssPath + '/libs.min.css')
    .sass([
        'Main.scss'
    ], cssPath + '/main.min.css')
    .sass([
        'TheFold.scss'
    ], cssPath + '/fold.min.css')

    .scripts([
        'libs/jquery-2.2.4.min.js'
    ],jsPath + '/libs.min.js')
    .browserify([
        'App.js'
    ],jsPath + '/App.min.js')

    .browserSync({
        proxy : 'skeleton-elixir-site.dev',
        files: [
                publicPath + '/**/*.php',
                jsPath + '/*.js',
                cssPath + '/*.css'
            ]
     });

});
