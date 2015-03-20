(function () {
    'use strict';

    require.config({
        shim: {
            'tooltipster': {
                deps: ['jquery'],
                exports: 'tooltipster'
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
            "skrollr": "../bower_components/skrollr/dist/skrollr.min"
        }
    });
    require(['jquery', 'skrollr', 'tooltipster', 'singlePageNav'], function ($, skrollr) {
        $(window).ready(function () {

            // Init tooltips
            $('.tooltip').tooltipster({
                theme: 'tooltipster-light'
            });

            // Init scrolling nav
            $('.section-links').singlePageNav();

            // Init scroll effects
            $('.work-tile').attr({
                'data-start': 'margin-top:3em',
                'data--100-bottom': 'margin-top:0em'
            });
            this.scrolling = skrollr.init({
                forceHeight: false
            });

        });
    });
})();
