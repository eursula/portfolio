jQuery(function(){

    var $ = jQuery;
	// when the hamburger is clicked
    /*
	$('.hamburger').on('click', function(){

		$('nav').toggleClass('show');

	});*/

    /*$(".main").onepage_scroll({
       sectionContainer: "section",     // sectionContainer accepts any kind of selector in case you don't want to use section
       easing: "ease",                  // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in",
                                        // "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
       animationTime: 1000,             // AnimationTime let you define how long each section takes to animate
       pagination: true,                // You can either show or hide the pagination. Toggle true for show, false for hide.
       updateURL: false,                // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
       beforeMove: function(index) {},  // This option accepts a callback function. The function will be called before the page moves.
       afterMove: function(index) {},   // This option accepts a callback function. The function will be called after the page moves.
       loop: false,                     // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
       keyboard: true,                  // You can activate the keyboard controls
       responsiveFallback: false,        // You can fallback to normal page scroll by defining the width of the browser in which
                                        // you want the responsive fallback to be triggered. For example, set this to 600 and whenever
                                        // the browser's width is less than 600, the fallback will kick in.
       direction: "vertical"            // You can now define the direction of the One Page Scroll animation. Options available are "vertical" and "horizontal". The default value is "vertical".  
    });*/
/*
    var sections = $('section')
  , nav = $('nav')
  , nav_height = nav.outerHeight();
 
    $(window).on('scroll', function () {
      var cur_pos = $(this).scrollTop();
     
      sections.each(function() {
        var top = $(this).offset().top - nav_height,
            bottom = top + $(this).outerHeight();
     
        if (cur_pos >= top && cur_pos <= bottom) {
          nav.find('a').removeClass('active');
          sections.removeClass('active');
     
          $(this).addClass('active');
          nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
        }
        });
    });*/

    /*
    nav.find('a').on('click', function () {
      var $el = $(this)
        , id = $el.attr('href');
     
      $('html, body').animate({
        scrollTop: $(id).offset().top - nav_height
      }, 500);
     
      return false;
    });*/
    $(function() {
        $(window).on("scroll", function() {
            if($(window).scrollTop() > 100) {
                $(".header").addClass("active");
            } else {
                //remove the background property so it comes transparent again (defined in your css)
               $(".header").removeClass("active");
            }
        });
    });

});

if (Modernizr.fontface) {
        document.write('Browser says @font-face IS supported');
    } else {
        document.write('Browser says @font-face NOT supported');
    }




