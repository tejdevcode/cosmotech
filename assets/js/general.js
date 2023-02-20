/* global screenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

var $ = jQuery.noConflict();

//$.fn.dataTable.ext.errMode = 'none';
(function($) {


    function headerFix() {

        $(window).resize(function() {
            var hederfixheight = $(".site-headertop").outerHeight();
        });
        var $window = $(window);
        var headerHeightfirst = $(".site-headertop").offset().top + $(".site-headertop").height();


        $(window).scroll(function() {
            var headerHeight = $(".site-headertop").outerHeight();

            if (window.innerWidth <= 767) {
                if (window.scrollY >= headerHeight) {
                    $(".site-headertop").addClass("fixed");
                } else {
                    $(".site-headertop").removeClass("fixed");
                }
            } else {
                if (window.scrollY >= headerHeightfirst) {
                    $(".site-headertop").addClass("fixed");
                }
                if (window.scrollY <= headerHeightfirst) {
                    $(".site-headertop").removeClass("fixed");
                }
            }
        });
    }


    //header hide on scroll down
    // Hide header on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;

    $(window).scroll(function(event) {
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();

        // Make scroll more than delta
        if (Math.abs(lastScrollTop - st) <= delta) return;

        // If scrolled down and past the navbar, add class .nav-up.
        //if (st > lastScrollTop && st > navbarHeight){
        //if (st > lastScrollTop && st > 100) {
        if (st > lastScrollTop && st > 50) {
            // Scroll Down
            $(".site-headertop").removeClass("nav-down").addClass("nav-up");
            //$('.site-headertop.fixed.nav-down').css('top' , 0);
        } else {
            // Scroll Up
            if (st + $(window).height() < $(document).height()) {
                $(".site-headertop").removeClass("nav-up").addClass("nav-down");
            }
        }

        lastScrollTop = st;
    }

    jQuery(document).ready(function($) {
    	


        /*nav*/
        $(".enumenu_ul").responsiveMenu({
            menuIcon_text: "",
            menuslide_overlap: true,
            menuslide_direction: "bottom",
            onMenuopen: function() {},
        });

        //sticky header
        headerFix();

        $('.testimonail_info').slick();

    });



})(jQuery);