(function($){

    $(document).ready(function() {
        if (screen.width > 767) {
            $('#menu-icon').click(function() {

                $('.leftMenuBox').addClass('slideInLeft').removeClass('slideOutLeft');
                $('.rightMenuBox').addClass('slideInRight').removeClass('slideOutRight');
                $('body, html').css('overflow', 'hidden');
                $('.menuOverlay').addClass('is-opening');
            });
            $('.closeBtn').click(function() {
                $('.leftMenuBox').removeClass('slideInLeft').addClass('slideOutLeft');
                $('.rightMenuBox').removeClass('slideInRight').addClass('slideOutRight');
                $('body, html').css('overflow', 'visible');
                setTimeout(function() {
                    $(".menuOverlay").removeClass("is-opening");
                }, 500);
            });
        }
        /*-------------for mobile screen-------------------*/
        if (screen.width < 767) {
            $('#menu-icon').click(function() {
                $('body, html').css('overflow', 'hidden');
                $('.menuOverlay').addClass('mobile-is-opening');
                $('.menuWrap').addClass('animated slideInLeft').removeClass('slideOutLeft');

            });
            $('.closeBtn').click(function() {
                $('body, html').css('overflow', 'visible');
                setTimeout(function() {
                    $(".menuOverlay").removeClass("mobile-is-opening");
                }, 500);
                $('.menuWrap').removeClass('slideInLeft').addClass('slideOutLeft');
            });

        }

        $('.mainMenu >  li').click(function() {
            $('.mainMenu >  li').removeClass("menuActive");
            $(this).addClass("menuActive");

        });

        $('.countryLanguage').click(function() {
            $('.contryDropdown').slideToggle();
        });
        $('.mainMenu > li').click(function(e) {
            e.stopPropagation();
            var $el = $('ul', this);
            $('.mainMenu > li > ul').not($el).slideUp();
            $el.stop(true, true).slideToggle(400);
        });
        $('.mainMenu > li > ul > li').click(function(e) {
            e.stopImmediatePropagation();

        });

        /*---------------fixed tab js-------------------------------------*/

        $(window).scroll(function(e) {
            // Get the position of the location where the scroller starts.
            var scroller_anchor = $(".scroller_anchor").offset().top;

            // Check if the user has scrolled and the current position is after the scroller start location and if its not already fixed at the top
            if ($(this).scrollTop() >= scroller_anchor && $('.tabMenu').css('position') != 'fixed') { // Change the CSS of the scroller to hilight it and fix it at the top of the screen.
                $('.tabMenu').css({

                    'position': 'fixed',
                    'top': '0px',
                    'z-index': '99'
                });
                $('body').addClass('tabFixed');
                $('.pageSection').removeClass("topPadding");
                // Changing the height of the scroller anchor to that of scroller so that there is no change in the overall height of the page.
                $('.scroller_anchor').css('height', '75px');
            } else if ($(this).scrollTop() < scroller_anchor && $('.tabMenu').css('position') != 'relative') { // If the user has scrolled back to the location above the scroller anchor place it back into the content.

                // Change the height of the scroller anchor to 0 and now we will be adding the scroller back to the content.
                $('.scroller_anchor').css('height', '0px');

                // Change the CSS and put it back to its original position.
                $('.tabMenu').css({

                    'position': 'relative'
                });
                $('body').removeClass('tabFixed');
                $('.pageSection').addClass("topPadding");
            }
        });

        /*---------------Video Content carousel-------------------------*/
        if ($('.videoContent').length) {
            $('.videoContent').owlCarousel({
                items: 1,
                // loop: true,
                loop: false,
                nav:false,
                dots: true,
                touchDrag  : true,
                mouseDrag  : false,
                autoplay: false,
                nav: false,
                center: true,
                dots: true,
                arrows: false,
                URLhashListener: true,
            });
        }
        /*---------------tab carousel-------------------------*/
        if ($('.tabCarousel').length) {
            $('.tabCarousel').owlCarousel({
                items: 4,
                loop: false,
                nav: true,
                center: true,
                touchDrag: false,
                mouseDrag: false,
                autoplay: false,
                // margin: 35,
                startPosition: 1,
                dots: false,
                URLhashListener: true,
                responsive: {
                    1025: {
                        margin: 35,
                        items: 4
                    },
                    768: {
                        // center: false,
                        margin: 10,
                        items: 3
                    },
                    481: {
                        startPosition: 0,
                        center: false,
                        margin: 20,
                        stagePadding: 70,
                        items: 3
                    },
                    320: {
                        items: 1
                    }
                }
            });
        }

        /*------------modal strats from here----------------*/
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("modalBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        /*btn.onclick = function() {
            modal.style.display = "block";
            $('body, html').css('overflow', 'hidden');
            $('.modalContent iframe').attr('src', 'https://www.youtube.com/embed/-DYSucV1_9w');
        }*/

        // When the user clicks on <span> (x), close the modal

        $('.close').click(function() {

            $("#myModal").hide();
            $('body, html').css('overflow', 'visible');
            $('.modalContent iframe').attr('src', '');

        });

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "block";
            }
        }

        /*------------modal ends here----------------*/
        $('.commercial .resdient-slider').owlCarousel('destroy');

        /*----------show more details-----------------*/
        $('.moreBtn').click(function() {
            $(this).parent().prev().addClass('ShowAll').removeClass('ShowLess');
            $(this).hide();
            $(this).next().slideDown();
        });
        $('.lessBtn').click(function() {
            $(this).parent().prev().addClass('ShowLess').removeClass('ShowAll');
            $(this).hide();
            $(this).prev().slideDown();
        });

        /*----------view more details js-----------------*/

        $('.viewMoreBtn').click(function() {
            $(this).parent().parent().prev().addClass('ShowAll').removeClass('ShowLess');
            $(this).hide();
            $(this).next().slideDown();
        });
        $('.viewLessBtn').click(function() {
            $(this).parent().parent().prev().addClass('ShowLess').removeClass('ShowAll');
            $(this).hide();
            $(this).prev().slideDown();
        });

        /*------------scroll to id for tabCarousel ----------------*/

        $(document).on("scroll", onScroll);

        //smoothscroll
        $('.tabCarousel a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            $(document).off("scroll");

            $('.tabCarousel a').each(function() {

                $(this).parent().removeClass('itemActive');

            })
            $(this).parent().addClass('itemActive');

            var target = this.hash,
                menu = target;
            $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top + 2
            }, 500, 'linear', function() {
                window.location.hash = target;
                $(document).on("scroll", onScroll);

            });
        });

        function onScroll(event) {
            var scrollPos = $(document).scrollTop();
            $('.tabCarousel a').each(function() {
                var currLink = $(this);
                var refElement = $(currLink.attr("href"));
                var target = this.hash,
                    menu = target;
                $target = $(target);
                if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                    $('.tabCarousel a').parent().removeClass("itemActive");
                    currLink.parent().addClass("itemActive");
                    $(target).addClass('topPadding');

                } else {
                    currLink.parent().find('itemActive').removeClass("itemActive");
                    $(target).removeClass('topPadding');

                }
            });
        }

    });
})(jQuery);