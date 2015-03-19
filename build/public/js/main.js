(function () {
    'use strict';

    require.config({
        paths: {
            "jquery": "../bower_components/jquery/dist/jquery"
        }
    });
    require(['jquery'], function ($) {
        console.log($);
    });
})();

