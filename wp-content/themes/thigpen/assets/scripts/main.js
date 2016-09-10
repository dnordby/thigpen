/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        $('.menu-toggle').click(function(){
          $('.menu-primary-container').toggleClass('open');
        });
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        $(window).resize(function(){
          if ( $(window).width() > 767 ) {
            $('.home-slider').slick({
              dots: false,
              arrows: false,
              autoplay: true,
              infinite: true,
              slidesToShow: 2,
              slidesToScroll: 2,
              pauseOnHover: false,
              autoplaySpeed: 6000,
              cssEase: 'linear',
              lazyLoad: 'progressive',
              draggable: false
            });
          } else {
              $('.home-slider').slick({
                dots: false,
                arrows: false,
                autoplay: true,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                pauseOnHover: false,
                autoplaySpeed: 6000,
                cssEase: 'linear',
                lazyLoad: 'progressive',
                draggable: false
              });
          }
        });
        if ( $(window).width() > 767 ) {
          $('.home-slider').slick({
            dots: false,
            arrows: false,
            autoplay: true,
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 2,
            pauseOnHover: false,
            autoplaySpeed: 6000,
            cssEase: 'linear',
            lazyLoad: 'progressive',
            draggable: false
          });
        } else {
            $('.home-slider').slick({
              dots: false,
              arrows: false,
              autoplay: true,
              infinite: true,
              slidesToShow: 1,
              slidesToScroll: 1,
              pauseOnHover: false,
              autoplaySpeed: 6000,
              cssEase: 'linear',
              lazyLoad: 'progressive',
              draggable: false
            });
        }
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    },
    'page_template_photogrid': {
      init: function() {
        var baseString = ' col-xs-12 ';

        $('.photo-wrapper:nth-child(7n + 1), .photo-wrapper:nth-child(7n + 3)').each(function(){
          var currentClass = $(this).attr('class');
          currentClass = currentClass + baseString + 'col-sm-3';
          $(this).attr('class', currentClass);
        });

        $('.photo-wrapper:nth-child(7n + 2)').each(function(){
          var currentClass = $(this).attr('class');
          currentClass = currentClass + baseString + 'col-sm-6';
          $(this).attr('class', currentClass);
        });

        $('.photo-wrapper:nth-child(7n + 4), .photo-wrapper:nth-child(7n + 6)').each(function(){
          var currentClass = $(this).attr('class');
          currentClass = currentClass + baseString + 'col-sm-4';
          $(this).attr('class', currentClass);
        });

        $('.photo-wrapper:nth-child(7n + 5), .photo-wrapper:nth-child(7n + 7)').each(function(){
          var currentClass = $(this).attr('class');
          currentClass = currentClass + baseString + 'col-sm-2';
          $(this).attr('class', currentClass);
        });
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);
  $(window).load(function(){
    $('.photo').each(function(){
      $(this).addClass('loaded');
    });
  });

})(jQuery); // Fully reference jQuery after this point.
