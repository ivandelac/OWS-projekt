// add auto padding to header

$(document).ready(function() {
	'use strict';

	setInterval( function() {

		'use strict';

		var windowHeight = $(window),height();

		var containerHeight = $(".header-container").height();

		var padTop = windowHeight - containerHeight;

		$(".header-container").css({

			'padding-top': Math.round( padTop / 2) + 'px',
            'padding-bottom': Math.round( padTop / 2) + 'px'

		});
	}. 10)
});