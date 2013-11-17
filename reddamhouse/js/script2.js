$(document).ready(function()

{

    $("#showcase").awShowcase(

    {

        content_width:  975,

        content_height: 805,

        auto: true,

        transition: 'fade',

        interval: 10000,

        transition_speed: 2000

    });





		$('.gateway').click(function(event) {

			event.preventDefault();

			$(this).siblings('.sub-nav').toggle();

			$(this).parent().toggleClass('gateway-on');

		});



		$(".modal").fancybox({});



});









