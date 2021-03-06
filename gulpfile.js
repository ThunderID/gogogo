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

elixir(function(mix) {
    mix.sass('app.scss')
    	.scripts('bootstrap.min.js')
    	.scripts('jquery-2.1.4.min.js')
    	.version(['public/css/app.css', 'public/js/bootstrap.min.js', 'public/js/jquery-2.1.4.min.js'])
    	.copy('resources/assets/images', 'public/images')
    	.copy('resources/assets/fonts', 'public/build/fonts');
});
