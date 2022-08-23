/*

Template: Appino - Responsive App Landing Page
Author: iqonicthemes.in
Version: 1.0
Design and Developed by: iqonicthemes.in

*/
/*================================================
[  Table of contents  ]
================================================

::  Loader
::  Sticky Menu
::  Background Overlay
::  Back to top
::  Silder
::  Accordion
::  Magnific Popup
::  Countdown
::  Owl-carousel
::  Tab Features
::  Widget
::  Counter
::  Tab Mobile
::  Force a hover to see the effect
::  Wow Animation
::  Navbar Active

======================================
[ End table content ]
======================================*/

(function ($) {

    "use strict";
    jQuery(window).on('load', function () {
           /*************************
             Owl-carousel 
        *************************/
             jQuery('.owl-carousel').each(function () {
                var $carousel = jQuery(this);
                $carousel.owlCarousel({
                    items: $carousel.data("items"),
                    loop: $carousel.data("loop"),
                    margin: $carousel.data("margin"),
                    nav: $carousel.data("nav"),
                    dots: $carousel.data("dots"),
                    autoplay: $carousel.data("autoplay"),
                    autoplayTimeout: $carousel.data("autoplay-timeout"),
                    navText: ["<i class='fa fa-angle-left fa-2x'></i>", "<i class='fa fa-angle-right fa-2x'></i>"],
                    responsiveClass: true,
                    responsive: {
                        // breakpoint from 0 up
                        0: {
                            items: $carousel.data("items-mobile-sm"),
                            nav: false,
                            dots: true
                        },
                        // breakpoint from 480 up
                        480: {
                            items: $carousel.data("items-mobile"),
                            nav: false,
                            dots: true
                        },
                        // breakpoint from 786 up
                        786: {
                            items: $carousel.data("items-tab")
                        },
                        // breakpoint from 1023 up
                        1023: {
                            items: $carousel.data("items-laptop")
                        },
                        1199: {
                            items: $carousel.data("items")
                        }
                    }
                });
            });
    
    });

        /*************************
            Loader
        *************************/
        // jQuery("#load").fadeOut();
        // jQuery("#loading").delay(0).fadeOut("slow");
        // jQuery('ul.page-numbers').removeClass('page-numbers').addClass('pagination justify-content-center');



        // if (!jQuery("body").hasClass("home")) {

        //     if (jQuery("body").hasClass("page-id-542")) {
        //         $href = jQuery('a.navbar-brand').attr('href') + "home-2/";
        //     } else if (jQuery("body").hasClass("page-id-543")) {
        //         $href = jQuery('a.navbar-brand').attr('href') + "home-3/";
        //     } else {
        //         var $href = jQuery('a.navbar-brand').attr('href');
        //     }
        //     jQuery('.navbar ul li a, .widget ul.menu li a').each(function () {
        //         var $ahref = jQuery(this).attr('href');
        //         if (!$ahref) {
        //             return;
        //         } // If data is undefined return.
        //         if ($ahref.indexOf("#") != -1) {
        //             var $finalurl = $href + $ahref;
        //             jQuery(this).attr("href", $finalurl)
        //         }
        //     });
        // }
        // jQuery('.page-id-542, .page-id-543').addClass('home');


        /*************************
            Sticky Menu
        *************************/
        if (jQuery(window).scrollTop() > 80) {
            jQuery('#main-header').addClass('menu-sticky');
        } else {
            jQuery('#main-header').removeClass('menu-sticky');
        }
        jQuery(window).on('scroll', function () {
            if (jQuery(this).scrollTop() > 80) {
                jQuery('#main-header').addClass('menu-sticky');
            } else {
                jQuery('#main-header').removeClass('menu-sticky');
            }
        });
        jQuery(".navbar a").on('click', function (event) {
            jQuery(".navbar-collapse").collapse('hide');
        });

        /*************************
            Background Overlay
        *************************/
        jQuery.each(jQuery('.iq-background-overlay'), function () {
            var $i;
            var $p;
            $i = jQuery(this).attr('id');
            $i = '#' + $i;
            $p = jQuery($i).parent().parent().parent().addClass($i);
            jQuery($i).parent().parent().parent().addClass('section_overlay');
            jQuery($i).insertBefore($p);
        });


        /*************************
         Back to top
        *************************/
        jQuery('#back-to-top').fadeOut();
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 250) {
                jQuery('#back-to-top').fadeIn(1500);
            } else {
                jQuery('#back-to-top').fadeOut(500);
            }
        });
        // scroll body to 0px on click
        jQuery('#top').on('click', function () {
            jQuery('top').tooltip('hide');
            jQuery('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });


        /*************************
             Silder
        *************************/
        //Function to animate slider captions 
        function doAnimations(elems) {
            //Cache the animationend event in a variable
            var animEndEv = 'webkitAnimationEnd animationend';

            elems.each(function () {
                var $this = jQuery(this),
                    $animationType = $this.data('animation');
                $this.addClass($animationType).one(animEndEv, function () {
                    $this.removeClass($animationType);
                });
            });
        }

        //Variables on page load 
        var $myCarousel = jQuery('#carouselExampleControls'),
            $firstAnimatingElems = $myCarousel.find('.carousel-item:first').find("[data-animation ^= 'animated']");

        //Initialize carousel 
        $myCarousel.carousel();

        //Animate captions in first slide on page load 
        doAnimations($firstAnimatingElems);

        //Pause carousel    
        //$myCarousel.carousel('pause');


        //Other slides to be animated on carousel slide event 
        $myCarousel.on('slide.bs.carousel', function (e) {
            var $animatingElems = jQuery(e.relatedTarget).find("[data-animation ^= 'animated']");
            doAnimations($animatingElems);
        });


        /*************************
             Accordion
        *************************/
        jQuery('.iq-ad-title').on('click', function (e) {
            e.preventDefault();

            var $this = jQuery(this);

            if ($this.next().hasClass('show')) {
                $this.next().removeClass('show');
                $this.next().slideUp(350);
                $this.parent().removeClass('iq-ad-active');
            } else {
                $this.parent().addClass('iq-ad-active');
                jQuery('.iq-ad-title').not(this).parent().removeClass('iq-ad-active');
                $this.parent().parent().find('div .iq-ad-details').removeClass('show');
                $this.parent().parent().find('div .iq-ad-details').slideUp(350);
                $this.next().toggleClass('show');
                $this.next().slideToggle(350);
            }
        });

        /*************************
             Magnific Popup
        *************************/
        jQuery('.popup-gallery').magnificPopup({
            delegate: 'a.popup-img',
            tLoading: 'Loading image #%curr%...',
            type: 'image',
            mainClass: 'mfp-img-mobile',
            gallery: {
                navigateByImgClick: true,
                enabled: true,
                preload: [0, 1]
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
            }
        });

        jQuery('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
            type: 'iframe',
            disableOn: 700,
            mainClass: 'mfp-fade',
            preloader: false,
            removalDelay: 160,
            fixedContentPos: false
        });

        /*************************
             Countdown
        *************************/
        jQuery('#countdown').countdown({
            date: '10/01/2019 23:59:59',
            day: 'Day',
            days: 'Days'
        });


     

        /*************************
            Tab Features
        *************************/
        jQuery('.nav.nav-tabs li a').on('click', function () {
            jQuery('.nav.nav-tabs li a').attr('aria-selected', false);
            jQuery(this).attr('aria-selected', true);
            jQuery('.iq-amazing-tab .row .nav.nav-tabs li a').removeClass('active');
        });
        jQuery(window).on('scroll', function (e) {

            var nav = jQuery('.iq-amazing-tab');
            if (nav.length) {
                var contentNav = nav.offset().top - 250;
                if (jQuery(this).scrollTop() >= (contentNav)) {
                    e.preventDefault();
                    jQuery('.iq-amazing-tab .row .nav.nav-tabs li a').removeClass('active');
                    jQuery('.iq-amazing-tab .row .nav.nav-tabs li').children('a[aria-selected=true]').addClass('active');
                }
            }
        });

        /*************************
            Widget
        *************************/
        jQuery('.iq-widget-menu > ul > li > a').on('click', function () {
            var checkElement = jQuery(this).next();
            jQuery('.iq-widget-menu li').removeClass('active');
            jQuery(this).closest('li').addClass('active');
            if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                jQuery(this).closest('li').removeClass('active');
                checkElement.slideUp('normal');
            }
            if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                jQuery('.iq-widget-menu ul ul:visible').slideUp('normal');
                checkElement.slideDown('normal');
            }
            if (jQuery(this).closest('li').find('ul').children().length === 0) {
                return true;
            } else {
                return false;
            }
        });

        /*************************
             Counter
        *************************/

        jQuery('.timer').countTo();


        /**************************************
            Force a hover to see the effect
        ***************************************/

        // Force a hover to see the effect
        var share = document.querySelector('.share');
        if (typeof foo !== 'undefined') {
            setTimeout(function () {
                share.classList.add("hover");
            }, 1000);
            setTimeout(function () {
                share.classList.remove("hover");
            }, 3000);
        }

        /*************************
         Wow Animation
        *************************/
        var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            mobile: false,
            live: true
        });
        wow.init();

        /*************************
         Navbar Active
        *************************/
        jQuery(window).on("scroll", onScroll);
        jQuery('header #top-menu a[href^="#"]').on('click', function (e) {

            jQuery('#main-header').addClass('menu-sticky');
            jQuery(window).off("scroll");
            jQuery('header #top-menu a').each(function () {
                jQuery(this).parent().removeClass('current-menu-item');
            })
            jQuery(this).parent().addClass('current-menu-item');

            var target = this.hash;

            //if( target.length ) {
            var nav = jQuery(target);
            if (nav.length) {
                var contentNav = nav.offset().top;
                //e.preventDefault();
                jQuery('html, body').stop().animate({
                    'scrollTop': contentNav
                }, 500, 'swing', function () {
                    window.location.hash = target;
                    jQuery(window).on("scroll", onScroll);
                });
            }
        });

        function onScroll(event) {
            var scrollPos = jQuery(window).scrollTop() + 80;
            jQuery('header #top-menu a[href^="#"]').each(function () {

                if (jQuery(this).attr("href").indexOf('https:///') == -1) {
                    var refElement = jQuery(jQuery(this).attr("href"));
                } else {
                    var refElement = jQuery(this);
                }

                if (jQuery(this).attr("href").indexOf('https:///') == -1) {
                    if (!refElement.length) return; // if the length is 0 (nothing selected) skip the rest of this iteration where the accessing of the position happens
                    if (refElement.position().top <= scrollPos) {
                        jQuery(document).find('.menu-item').removeClass("current-menu-item current-menu-parent");
                        jQuery(this).parent().addClass("current-menu-item");
                    } else {
                        jQuery(this).parent().removeClass("current-menu-item");
                    }
                }

            });
        }

        jQuery('.sub-menu').css('display', 'none');
        jQuery('.sub-menu').prev().addClass('isubmenu');
        jQuery(".sub-menu").before('<i class="fa fa-angle-down toggledrop" aria-hidden="true"></i>');


        jQuery('.widget .fa.fa-angle-down, #main .fa.fa-angle-down').on('click', function () {
            jQuery(this).next('.children, .sub-menu').slideToggle();
        });

        jQuery("#top-menu .menu-item .toggledrop").off("click");
        if (jQuery(window).width() < 992) {
            jQuery('#top-menu .menu-item .toggledrop').on('click', function (e) {
                e.preventDefault();
                jQuery(this).next('.children, .sub-menu').slideToggle();
            });
        }
    
    jQuery(document).ready(function () {

        jQuery(window).on('resize', function () {
            jQuery('.widget .fa.fa-angle-down, #main .fa.fa-angle-down').on('click', function () {
                jQuery(this).next('.children, .sub-menu').slideToggle();
            });

            jQuery("#top-menu .menu-item .toggledrop").off("click");
            if (jQuery(window).width() < 992) {
                jQuery('#top-menu .menu-item .toggledrop').on('click', function (e) {
                    e.preventDefault();
                    jQuery(this).next('.children, .sub-menu').slideToggle();
                });
            }
        });
    });
})(jQuery);    