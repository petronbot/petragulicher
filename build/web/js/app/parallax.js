define(['jquery', 'skrollr', 'stellar'], function ($, skrollr) {
    'use strict';

    var Parallax = {

    	init: function() {
    		$.stellar();
    		var s = skrollr.init();
    	}


    };

    return Parallax;

});
