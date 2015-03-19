define(['jquery', 'packery'], function ($, Packery) {
    'use strict';

    var Packing = {

    	init: function() {
    		var container = document.querySelector('.masonry');
    		var packery = new Packery(container);
    		$(container.querySelector('.tile-item')).click(function() {
				var target = event.target;
				packery.fit( target, 80, 160 );
    		});

    	}

    };

    return Packing;

});
