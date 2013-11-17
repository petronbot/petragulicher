
$(document).ready(function() {

  // Button animation
    // $(".anchor").click(function (event) {
    //     event.preventDefault();
    //     var location = $(this).attr("href").substring(1);
    //     $('html, body').animate({
    //         scrollTop: $('a[name=' + location + ']').offset().top - 85
    //     }, 1000);
    // });

    // Shrinky header

    var headerHeight = $(".intro").innerHeight();

    $(window).scroll(function() {

       if ( $(window).scrollTop() >= headerHeight ) {
           $("body").addClass("header-shrinky");
        } else {
           $("body").removeClass("header-shrinky");
        }
    });

});

    