(function () {
    'use strict';

    require.config({
        shim: {
            'tooltipster': {
                deps: ['jquery'],
                exports: 'tooltipster'
            },
            'strip': {
                deps: ['jquery']
            },
            'singlePageNav': {
                deps: ['jquery'],
                exports: 'singlePageNav'
            }
        },
        paths: {
            "jquery": "../bower_components/jquery/dist/jquery",
            "tooltipster": "../bower_components/tooltipster/js/jquery.tooltipster",
            "singlePageNav": "vendor/plugins/jquery.singlePageNav",
            "skrollr": "../bower_components/skrollr/dist/skrollr.min",
            "strip": "../bower_components/strip/dist/js/strip.pkgd"
        }
    });
    require(['jquery', 'skrollr', 'tooltipster', 'singlePageNav', 'strip'], function ($, skrollr) {
        $(window).ready(function () {

            // Init tooltips
            $('.tooltip').tooltipster({
                theme: 'tooltipster-light'
            });

            // Init scrolling nav
            $('.section-links').singlePageNav();

            if (document.documentElement.clientWidth > 768) {

                // Init scroll effects
                $('.work-tile').attr({
                    'data-start': 'margin-top:3em',
                    'data--100-bottom': 'margin-top:0em'
                });
                this.scrollEffects = skrollr.init({
                    forceHeight: false
                });

            }

        });
    });
})();
