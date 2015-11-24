<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials", "views" and "widgets"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => array(

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function ($theme) {
            // You can remove this line anytime.
            $theme->appendTitle(trans('theme.title'))
                ->setDescription(trans('theme.description'))
                ->setAuthor(trans('theme.author'))
                ->setKeywords(trans('theme.keywords'));

            // Breadcrumb template.
//            $theme->breadcrumb()->setTemplate('
//             <ul class="breadcrumb">
//                @foreach ($crumbs as $i => $crumb)
//                    @if ($i != (count($crumbs) - 1))
//                    <li><a href="{{ $crumb[" url"] }}">{{ $crumb["label"] }}</a><span class="divider">/</span></li>
//                    @else
//                    <li class="active">{{ $crumb["label"] }}</li>
//                    @endif
//                @endforeach
//            </ul>
//             ');
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function ($theme) {

            // Partial composer.
            $theme->partialComposer('header', function ($view) {
                $view->with('type', 'forHome');
            });


            // THEME STYLES
            $theme->asset()->add('core-style',
                [
                    'bower_components/bootstrap/dist/css/bootstrap.min.css',
                    'bower_components/bootstrap-flat-sass/css/bootstrap-flat.min.css',
                    'bower_components/yamm3/yamm/yamm.css',
                    'bower_components/scrollup/demo/css/themes/image.css'
                ]);

            // THEME SCRIPTS
            // path: public/bower_components/bootstrap/dist/js/bootstrap.min.js
            $theme->asset()->container('footer')->add('core-script',
                [
                    'bower_components/jquery/dist/jquery.js',
                    'bower_components/scrollup/dist/jquery.scrollUp.min.js',
                    'bower_components/bootstrap/dist/js/bootstrap.min.js',
                    'bower_components/bootstrap-autohidingnavbar/src/jquery.bootstrap-autohidingnavbar.js',
                    'bower_components/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js',
                    'bower_components/headhesive.js/dist/headhesive.js'
//                    'bower_components/slimScroll/jquery.slimscroll.min.js'
                ]);

            // path: public/themes/[current theme]/assets/js/custom.js
            $theme->asset()->container('footer')->usePath()->add('custom', 'js/custom.js');

            // Writing an in-line script.
            $theme->asset()->writeScript('inline-script', "
            $(function() {
                window.prettyPrint && prettyPrint()
                $(document).on('click', '.yamm .dropdown-menu', function(e) {
                    e.stopPropagation()
                })

                $('nav.navbar-fixed-top').autoHidingNavbar();

                $(document).ready(function() {
                    $('.dropdown-toggle').dropdownHover().dropdown();
                });

                $.scrollUp(
                {
                    animation: 'fade',
                    animationSpeed: 300,
                    scrollSpeed: 500,
                    easingType: 'linear',
                    scrollText: false,
                    scrollImg: true
                    }
                );
            })
            ");
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => array(

            'default' => function ($theme) {
                // $theme->asset()->usePath()->add('ipad', 'css/layouts/ipad.css');
            },

            'home' => function ($theme) {

                // path: public/css/style.css
                // $theme->asset()->add('core-style', 'css/style.css');

                // path: public/themes/[current theme]/assets/css/custom.css
                $theme->asset()->usePath()->add('custom', 'css/yamm3.css');

                // Writing an in-line style.
                $theme->asset()->writeStyle('inline-style', '
                    .tab-content p {
                        padding: 10px 0;
                    }

                    .demo-long {
                        margin-top: 100px;
                        margin-bottom: 200px;
                    }

                    .dropdown .dropdown-menu {
                      display: block;
                      visibility: hidden;
                      opacity: 0;
                      -webkit-transition: all .5s ease;
                      -moz-transition: all .5s ease;
                      -ms-transition: all .5s ease;
                      -o-transition: all .5s ease;
                      transition: all .5s ease;
                    }
                    .dropdown:hover .dropdown-menu {
                      visibility: visible;
                      opacity: 1;
                    }
                    .dropdown {
                      display: inline-block;
                    }
                ');
            }

        )

    )

);