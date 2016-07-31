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
        function setTimer($tile) {
          var tile = $tile;
          var RoundNumber = Math.round(Math.random()*(8000-5000)+5000);
          setTimeout (function(){
            getBackground(tile);
          }, RoundNumber);
        }

        function getBackground($tile) {
          var tile = $tile;
          var urlString = $tile.data('url');
          var urlArray = urlString.split(',');
          var urlArrayLength = urlArray.length;
          var randomNumber = Math.random()*urlArrayLength;
          var roundNumber = Math.round(randomNumber);
          // SET PHOTO HERE
          tile.css('background-image', url(urlArray[roundNumber]) );
          setTimer(tile);
        }

        function swap() {
          $('.tile-wrapper .tile').each(function(){
            getBackground($(this));
          });
        }

        swap();

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
    'page_template_photogird': {
      init: function() {
        function topOffset(tile) {
          // TILES OFFSET FOR HD DESKTOP
          if ( $(window).width() >= 1200 ) {
            var offsetHeight = 0;
            var totalPhotos = $('.photo-wrapper').length;
            var classes = tile.attr('class');
            classes = classes.split(' ')[0];
            classes = classes.split('-')[2];
            if ( (classes - 4) >= 0) {
              var row = $(tile).closest('.row').prev('.row');
              var heights = [];
              $(row).find('.photo-wrapper').each(function(){
                heights.push($(this).height());
              });
              maxHeight = Math.max.apply(Math, heights);
              aboveHeight = $(row).find('.photo-wrapper-'+(classes - 4)).height();
              offsetHeight = -1*(maxHeight - aboveHeight);
            }
            tile.css('top', offsetHeight);
          // TILES OFFSET FOR LAPTOP
          } else if ( $(window).width() < 1200 && $(window).width() >= 992 ) {
            var offsetHeight = 0;
            classes = classes.split(' ')[0];
            classes = classes.split('-')[2];
            if ( (classes - 3) >= 0) {
              var row = $(tile).closest('.row').prev('.row');
              var heights = [];
              $(row).find('.photo-wrapper').each(function(){
                heights.push($(this).height());
              });
              maxHeight = Math.max.apply(Math, heights);
              aboveHeight = $(row).find('.photo-wrapper-'+(classes - 4)).height();
              offsetHeight = -1*(maxHeight - aboveHeight);
            }
            tile.css('top', offsetHeight);
          // TILES OFFSET FOR TABLET
          } else if ( $(window).width() < 992 && $(window).width() >= 768 ) {
            var offsetHeight = 0;
            classes = classes.split(' ')[0];
            classes = classes.split('-')[2];
            if ( (classes - 2) >= 0) {
              var row = $(tile).closest('.row').prev('.row');
              var heights = [];
              $(row).find('.photo-wrapper').each(function(){
                heights.push($(this).height());
              });
              maxHeight = Math.max.apply(Math, heights);
              aboveHeight = $(row).find('.photo-wrapper-'+(classes - 4)).height();
              offsetHeight = -1*(maxHeight - aboveHeight);
            }
            tile.css('top', offsetHeight);
          // TILES OFFSET FOR MOBILE
          } else if ( $(window).width() < 768 ) {
            var offsetHeight = 0;
            tile.css('top', offsetHeight);
          }
        }

        $('.photo-wrapper').each(function(){
          var tile = $(this);
          var randHeight = Math.round(Math.random()*(380-250)+250);
          topOffset(tile);
          $(this).css({
            'height': randHeight
          });
        });
        $(window).resize(function(){
          $('.photo-wrapper').each(function(){
            var tile = $(this);
            topOffset(tile);
          });
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

})(jQuery); // Fully reference jQuery after this point.
