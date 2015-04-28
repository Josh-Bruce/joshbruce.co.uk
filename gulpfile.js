var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

var bower_path = 'vendor/bower_components';

var paths = {
    jquery:         bower_path + '/jquery',
    bootstrap:      bower_path + '/bootstrap-sass-official/assets',

    output:         'public'
};

elixir(function(mix) {
    mix.sass('app.scss', paths.output + '/css', {
       includePaths: [
           paths.bootstrap + '/stylesheets'
       ]
    });

    mix.copy(paths.bootstrap + '/fonts/bootstrap/**', paths.output + '/fonts');

    mix.scripts([
        paths.jquery + '/dist/jquery.js',
        paths.bootstrap + '/javascripts/bootstrap.js'
    ], paths.output + '/js/app.js', bower_path);

    mix.version([paths.output + '/css/app.css', paths.output + '/js/app.js']);
});