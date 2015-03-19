(function () {
    'use strict';

    require.config({
    	shim: {
            "stellar": {
                deps: ["jquery"]
            }
    	},
        paths: {
            "jquery": "../bower_components/jquery/dist/jquery",
            "stellar": "../bower_components/stellar/jquery.stellar",
            "skrollr": "../bower_components/skrollr/dist/skrollr.min"
        }
    });
    require(['app/parallax'], function (Parallax) {
        Parallax.init();
    });
})();
