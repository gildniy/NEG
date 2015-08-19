var elixir = require('laravel-elixir');

var sassSource = ["style.scss"],
    scriptSource = [
        "../vendor/jquery/dist/jquery.js",
        "../vendor/bootstrap-sass/assets/javascripts/bootstrap.js",
        "../vendor/bs-confirmation/bootstrap-confirmation.js",
        "../vendor/bootstrap-offcanvas/dist/js/bootstrap.offcanvas.js"
        //"../vendor/bootstrap-table/src/bootstrap-table.js"
        //"../vendor/bootstrap-select/dist/js/bootstrap-select.js",
    ],
    targets = {
        'style': 'public/css',
        'script': 'public/js'
    },
    fontSource = [
        "resources/assets/vendor/bootstrap-sass/assets/fonts/bootstrap",
        "resources/assets/vendor/fontawesome/fonts"
    ],
    fontTarget = [
        "public/build/fonts/bootstrap",
        "public/build/fonts"
    ],
    versioningSource = [
        "js/all.js",
        "css/app.css"
    ];

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

elixir(function (mix) {
    mix
        .sass(sassSource, targets.style) // sass(resources/sass/./) => public/css/original-file-name.css
        .scripts(scriptSource, targets.script) // scripts(resources/js/./) => public/js/original-file-name.js
        .version(versioningSource) //version(public/./file-name.ext)
        .copy(fontSource[0], fontTarget[0]) // copy(full-source-path, full-target-path)
        .copy(fontSource[1], fontTarget[1])

});