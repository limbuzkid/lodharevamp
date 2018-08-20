(function($) {
    var prdctListMenuPos,
        headerTopPos,
        winW = $(window).width(),
        imgSlider, contSlider, tabsSlider,
        fixed_header = $('.fixedHeader').outerHeight(),
        subheader_height = $('.subHeader').outerHeight(),
        breadcrumb_height = $('.subHeader .breadcrumb').outerHeight(),
        topNav_height = $('.subHeader .topNav').outerHeight() / 2,
        navTotalHeight = breadcrumb_height + topNav_height,
        form_offset = $('body > .getInTouchWrap .getInTouchLightBox').length ? $('body > .getInTouchWrap .getInTouchLightBox').offset().top : 0,
        form_offsetLeft = $('body > .getInTouchWrap .getInTouchLightBox').length ? $('body > .getInTouchWrap .getInTouchLightBox').offset().left : 0,
        formTopFixed = form_offset - navTotalHeight;

    $.fn.hasAttr = function(name) {
        return this.attr(name) !== undefined;
    };

    function openPopup(id) {
        var popId = $('#' + id);
        popId.fadeIn(500);
        $('body').css({ overflow: 'hidden', position: 'relative' });
    }

    function closePopup() {
        $('.modal').fadeOut(500);
        $('body').css({ overflow: 'visible', position: 'relative' });
    }

    function screenSize() {
        if ($(window).width() <= 1024) {
            $("body").removeClass("largeScreen").addClass("smallScreen");
        } else if ($(window).width() > 1024) {
            $("body").removeClass("smallScreen").addClass("largeScreen");
        }
    }

    function homeBannerSrc() {
        var countr = 0;
        $('.bannerCarousel .item').each(function(countr) {
            var imgSrcdesktop = $(this).find('img.bannerImage').attr('data-srcdesktop');
            var imgSrcdevice = $(this).find('img.bannerImage').attr('data-srcdevice');

            var vdoSrcdesktop = $(this).attr('data-videosrcDesk');
            var vdoSrcdevice = $(this).attr('data-videosrcDevice');

            if ($(window).width() < 768) {
                $(this).attr('data-videosrc', vdoSrcdevice)
                $(this).find('img.bannerImage').attr("src", imgSrcdevice);
            } else if ($(window).width() >= 768) {
                //videosrc = vdoSrcdesktop
                $(this).attr('data-videosrc', vdoSrcdesktop)
                $(this).find('img.bannerImage').attr("src", imgSrcdesktop);
            }

            var attr = $(this).attr('data-videosrc');
            if (typeof attr !== typeof undefined && attr !== false) {
                var videosrc = $(this).attr('data-videosrc');
                $(this).find('img.bannerImage').animate({ "opacity": 1 }, 10)
                $(this).find('video').remove()

                var ths = $(this)

                $(this).append('<video muted loop="loop" preload="auto"><source src="' + videosrc + '" type="video/mp4"></video>');
            }

            var ths = $(this);
            var chkreadyState = ths.find('video').prop('readyState');
            var attr = ths.attr('data-videosrc');

            function checkLoad() {
                if (countr < $('.bannerCarousel .item').length) {
                    if (typeof ths.attr('data-videosrc') !== typeof undefined && ths.attr('data-videosrc') !== false) {
                        if (ths.find('video').prop('readyState') === 4) {
                            ths.find('img.bannerImage').animate({ "opacity": 0.5 }, 500)
                            //ths.find('video').height(ths.find('img').height())
                            ths.find('video')[0].play();
                            countr++
                        } else {
                            ths.find('img.bannerImage').animate({ "opacity": 1 }, 10)
                            setTimeout(checkLoad, 100);
                        }
                    } else {
                        countr++
                    }
                } else {
                    return false
                }
            }
            checkLoad();
        })
    }

    function formPostback() {

        $(".selectWrapper select").each(function() {
            $(this).children("option").each(function() {
                if ($(this).attr("selected")) {
                    $(this).parent().prev(".selectedvalue").html($(this).html());
                }
            });
            if ($(this).prop('selectedIndex') != "0") {
                $(this).parents('.selectWrapper').removeClass('defaultSel');
            } else {
                $(this).parents('.selectWrapper').addClass('defaultSel');
            }
        });
        $(".selectWrapper select").bind('change', function() {
            $(this).prev().html($(this).find('option:selected').text());

            if ($(this).prop('selectedIndex') != "0") {
                $(this).parents('.selectWrapper').removeClass('defaultSel');
            } else {
                $(this).parents('.selectWrapper').addClass('defaultSel');
            }
        });
    }

    function inputBlur() {
        $('input[type="text"], textarea').each(function() {
            if (!$(this).val() == "") {
                $(this).next('.placeholder').addClass('stay');
            } else {
                $(this).next('.placeholder').removeClass('stay');
            }
        });

        $('input[type="text"], textarea').blur(function() {
            if (!$(this).val() == "") {
                $(this).next('.placeholder').addClass('stay');
            } else {
                $(this).next('.placeholder').removeClass('stay');
            }
        });
        $('input[type="text"], textarea').focus(function() {
            $(this).next('.placeholder').addClass('stay');
        });

        $('input[type="text"] ~ .placeholder, textarea ~ .placeholder').click(function() {
            if (!$(this).hasClass('stay')) {
                $(this).addClass('stay').prev().focus()
            }
        });
    }

    function destGal(galId, sld) {
        var ths = $(galId);
        console.log( 'ths.length >> ' , ths.length );
        if(ths.length != 0){
            var ulWrap = '';
            var liHeight = parseInt(ths.css('height'));
            var liWidth = parseInt(ths.css('width'));
            ths.find('.rhs').remove();
            ths.find('ul').eq(0).removeClass('lhs');
            ths.find('ul, li, img').removeAttr('style');
            $(sld).slider("destroy");
            $(sld).find('.wrap').remove();
        }
    }

    function genGal(galId, sld) {
        var ths = $(galId);
        var ulWrap = '';
        var liHeight = parseInt(ths.css('height'));
        var liWidth = parseInt(ths.css('width'));
        ths.append('<ul class="rhs"></ul>');
        ths.find('ul').eq(0).addClass('lhs');
        for (var i = 0; i < ths.find('ul.lhs li').length; i++) {
            var clone = ths.find('ul.lhs li').eq(i).clone();
            ths.find('ul.rhs').prepend(clone);
        }
        ths.find('li, img').css('height', liHeight);
        ths.find('li, img').css('width', liWidth);
        ths.find('ul.rhs').css('margin-top', (parseInt(ths.find('ul.rhs').css('height')) - liHeight) * -1);

        $(sld).slider({
            slide: function(e, ui) {
                onSlideStartStop('slide', sld, galId, e, ui);
            },
            stop: function(e, ui) {
                onSlideStartStop('stop', sld, galId, e, ui);
            }
        });

        var sliderWidth = $(sld).width() / 7;
        $(sld).prepend('<div class="wrap"></div>')
        for (var i = 0; i < sliderWidth; i++) {
            $(sld).find('.wrap').prepend('<em></em>')
        }
        for (var i = 0; i < ths.find('ul.lhs li').length - 1; i++) {
            $(sld).find('.wrap').append('<span class="steps step' + i + '"></span>')
        }
        $(sld).find('.wrap .steps').css({ "width": $(sld).width() / (ths.find('ul.lhs li').length - 1) })
    }

    function animateDots(sliderId, uiVal) {
        var v = Math.floor($(sliderId).width() * uiVal / 100);
        var finalA, finalB;
        for (var i = 0; i < 1000; i++) {
            var a = i * 7;
            var b = (i + 1) * 7;
            if (v >= a && v <= b) {
                finalA = Math.floor(a / 7);
                finalB = Math.floor(b / 7);
                break;
            }
        }
        var randomArray = [];
        for (var j = 0; j < 6; j++) {
            randomArray.push('height_' + Math.floor(Math.random() * (10 - 1 + 1)));
        }

        $(sliderId).find('em').removeAttr('class');

        if (finalA >= 2) { $(sliderId).find('em').eq(finalA - 2).addClass(randomArray[0]); }
        if (finalA >= 1) { $(sliderId).find('em').eq(finalA - 1).addClass(randomArray[1]); }
        $(sliderId).find('em').eq(finalA).addClass(randomArray[2]);
        $(sliderId).find('em').eq(finalB).addClass(randomArray[3]);
        $(sliderId).find('em').eq(finalB + 1).addClass(randomArray[4]);
        $(sliderId).find('em').eq(finalB + 2).addClass(randomArray[5]);
        $(sliderId).find('em').eq(finalB + 3).removeAttr('class');
        $(sliderId).find('em').eq(finalB + 4).removeAttr('class');
    }

    function onSlideStartStop(evnt, sliderId, galleryId, e, ui) {
        var ths = $(galleryId);
        var uiVal = ui.value; //10
        animateDots(sliderId, uiVal);

        if (evnt == 'stop') {
            var len = parseInt(ths.find('ul.lhs li').length) - 1;
            var uiVal1 = 100 / len; //25
            var activeLiInd = Math.round(uiVal / uiVal1);
            var activeLiIndTxt = ths.find('ul.lhs li').eq(activeLiInd).attr('data-attr')
            for (var k = 0; k < len; k++) {
                var a = uiVal1 * k;
                var b = uiVal1 * (k + 1);
                if (uiVal > a && uiVal < b) {
                    var c = (uiVal1 * k) + (uiVal1 / 2);
                    if (uiVal > c) {
                        uiVal = (b);
                    } else if (uiVal < c) {
                        uiVal = (a);
                    }
                    break;
                }
            }

            $(sliderId).slider("value", uiVal);
            $(sliderId).find('em').removeAttr('class');


            var ht2 = parseInt(ths.find('ul').height()) - parseInt(ths.height());
            var val = (ht2 * uiVal) / 100;

            ths.find('.lhs').stop(false, true).animate({
                'top': val * -1
            }, uiVal * 10);
            ths.find('.rhs').stop(false, true).animate({
                'top': val
            }, uiVal * 10);
        } else {

            var ht2 = parseInt(ths.find('ul').height()) - parseInt(ths.height());
            var val = (ht2 * uiVal) / 100;

            ths.find('.lhs').stop(false, true).animate({
                'top': val * -1
            }, uiVal);
            ths.find('.rhs').stop(false, true).animate({
                'top': val
            }, uiVal);
        }
    }

    function pillars() {
        if ($(window).width() < 768) {
            $('.pillarsCarousel').addClass('active');
            setTimeout(function() {
                $('.pillarsCarousel.active').owlCarousel({
                    loop: false,
                    nav: true,
                    touchDrag: true,
                    mouseDrag: true,
                    autoplay: false,
                    navRewind: false,
                    responsive: {
                        0: {
                            items: 1
                        }
                    }
                });
            }, 400)
        } else if ($(window).width() >= 768) {
            $('.pillarsCarousel').removeClass('active');
            setTimeout(function() {
                $('.pillarsCarousel').trigger('destroy.owl.carousel').removeClass('owl-loaded');
                $('.pillarsCarousel').find('.owl-stage-outer').children().unwrap();
                $('.pillarsCarousel').removeClass('owl-carousel');
            }, 100)
        }
    }

    function sectionAnimate() {
        var sections = $('section');
        $(window).scroll(function() {
            var cur_pos = $(this).scrollTop();
            sections.each(function() {
                var top = $(this).offset().top - 300;
                var bottom = top + $(this).outerHeight();
                if (cur_pos >= top && cur_pos <= bottom) {
                    $(this).addClass('animate');
                }
            });
        });
    }

    function formTop() {
        setTimeout(function() {
            var header_height = $('.fixedHeader').outerHeight();
            var banner_height = $('.bannerWithForm').offset().top + $('.bannerWithForm').outerHeight();
            var banner_width = $('.bannerWithForm').offset().left + $('.bannerWithForm').outerWidth();
            var form_height = $('.getInTouchLightBox').outerHeight();
            // console.log('header_height: ' + header_height + '@@banner_height:' + banner_height + '@@banner_width:' + banner_width + '@@form_height:' + form_height);
            $(' body > .getInTouchWrap > .getInTouchLightBox').css({ 'top': banner_height - form_height, 'opacity': 1 });
            if ($(window).width() > 1900) {
                $(' body > .getInTouchWrap > .getInTouchLightBox').css({ 'right': 'calc(105% - ' + banner_width + 'px)' });
            }
        }, 500);

    }

    function pageination() {
        $('.pagination').each(function() {
            var indexEle = $(this).parents('.content').find('.carouCont').find('.flex-active-slide').index() + 1;
            var totalEle = $(this).parents('.content').find('.carouCont').find('.carouselCont').length;
            var somehtml = '<span>' + indexEle + '</span> / <span>' + totalEle + '</span>'
            $(this).html(somehtml);
        });
    }

    function amenitySlider() {
        $('.sliderAmenities').removeData("flexslider");
        if ($('.sliderAmenities').length > 0) {
            $('.sliderAmenities').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                start: function(slider) {
                    var pagingSection = $(slider).attr('navFor');
                    var totalSlides = slider.count;
                    var slideLength = totalSlides.toString().length;
                    if (slideLength == 1) {
                        $('#' + pagingSection).find('.totalSlides').html('0' + slider.count);
                    } else {
                        $('#' + pagingSection).find('.totalSlides').html(slider.count);
                    }

                    $('#' + pagingSection).find('.currentSlide').html('01');
                },
                after: function(slider) {
                    var pagingSection = $(slider).attr('navFor');
                    var curSlides = slider.currentSlide;
                    var curSlideLength = curSlides.toString().length;
                    var curSlide = slider.currentSlide + 1;
                    // console.log(curSlide + ' curSlide | totalSlide ' + curSlideLength);
                    if (curSlideLength == 1) {
                        $('#' + pagingSection).find('.currentSlide').html('0' + curSlide);
                    } else {
                        $('#' + pagingSection).find('.currentSlide').html(curSlide);
                    }

                }
            });
        }
    }

    function openAccess() {
        $('#accessPop').fadeIn();
        $('.openAccess').css({ 'display': 'none' });
        $('.gotomap').css({ 'display': 'block' });
    }

    function closeAccess() {
        $('#accessPop').fadeOut();
        $('.gotomap').css({ 'display': 'none' });
        $('.openAccess').css({ 'display': 'block' });
    }
    var winW = $(window).width();
    var thumbGap;
    if(winW<=768){
            thumbGap = 75;
        }else{
            thumbGap = 125;
        }

    function startSlider() {
        

        $('#carouselFloor').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: thumbGap,
            itemMargin: 15,
            asNavFor: '#sliderFloor'
        });

        $('#sliderFloor').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carouselFloor",
            start: function(slider) {
                $('.totalSlides').text(slider.count);
                $('.currentSlide').text('1');
            },
            after: function(slider) {
                $('.currentSlide').text(slider.currentSlide + 1);
            }
        });
    }

    $(window).on('load', function() {
        $('.fixedHeader, .homeBanner, .innerMainBanner').addClass('animate');
        setTimeout(function() {
            sectionAnimate();
        }, 1000)
        // (window.location.pathname.split("/").pop() == 'index.html' || window.location.pathname.split("/").pop() == 'nri-overview.html')
        if ($('#map').length && $('#map').hasClass('openMap')) { initMap(undefined, 1); }
        if ($('#share-button-2').length) { new needShareDropdown(document.getElementById('share-button-2')); }

        $('.count').each(function() {
            $(this).prop('Counter', ($(this).text() - 20)).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    }).on('resize', function() {
        $('.menuDropdown').hide()
        if (this.resizeTO) clearTimeout(this.resizeTO);
        this.resizeTO = setTimeout(function() {
            $(this).trigger('resizeEnd');
        }, 100);
        if ($('.bannerWithForm').length) {
            formTop();
        }
        if ($('.custCarou > .inner-slider').length > 0) {
            $('.custCarou > .inner-slider').css({ height: $('.custCarou > div').width() });
        }

    }).bind('resizeEnd', function() {
        homeBannerSrc();
        screenSize();
        pillars();
        setTimeout(function() {
            destGal('.galleryWrapper', '#slider');
            destGal('.galleryWrapper1', '#slider1');
            destGal('.galleryWrapper2', '#slider2');
            destGal('.galleryWrapper3', '#slider3');
        }, 10)

        setTimeout(function() {
            genGal('.galleryWrapper', '#slider');
            genGal('.galleryWrapper1', '#slider1');
            genGal('.galleryWrapper2', '#slider2');
            genGal('.galleryWrapper3', '#slider3');
        }, 100)
        if (winW != $(window).width()) {

        }
        winW = $(window).width();
    }).on('scroll', function() {
        if ($('body').hasClass('homepage')) {
            headerTopPos = $('.homeBanner .content').offset().top + ($('.homeBanner .content').height() / 2);
        }
        if ($(this).scrollTop() > headerTopPos) {
            $('.fixedHeader').addClass("fixed");
        } else {
            $('.fixedHeader').removeClass("fixed");
        }
    });
    $(document).ready(function() {
        homeBannerSrc();
        screenSize();
        formPostback();
        inputBlur();
        pillars();

        
        setTimeout(function() {
            genGal('.galleryWrapper', '#slider');
            genGal('.galleryWrapper1', '#slider1');
            genGal('.galleryWrapper2', '#slider2');
            genGal('.galleryWrapper3', '#slider3');
        }, 100)
        

        // Navigation carousel on mobile
        $('.mobileNav').owlCarousel({
            loop: false,
            nav: true,
            touchDrag: true,
            mouseDrag: true,
            autoplay: false,
            navRewind: false,
            autoWidth: true
        });
        // Navigation carousel on mobile
        if ($('body > .getInTouchWrap .getInTouchLightBox').length == 0) {
            $('.enquire-block').fadeIn();
        }
        $(".hide").hide();
        $('.radioGroup li').click(function() {
            if ($("#bookasitevisit").is(':checked') == true) {
                $('.hide').slideDown();
            } else {
                $('.hide').slideUp();
            }
        });
        $('.locateUs .mapSec span.plusSign').click(function() {
            $(this).parents('.locateUs').find('.mapContainer').fadeIn();
        });
        $('.locateUs .mapContainer span.minusSign').click(function() {
            $(this).parents('.mapContainer').fadeOut();
        });
        $('.dropdown').click(function() {
            $(this).attr('tabindex', 1).focus();
            $(this).toggleClass('active');
            $(this).find('.dropdown-menu').slideToggle(300);
        });
        $('.dropdown').focusout(function() {
            $(this).removeClass('active');
            $(this).find('.dropdown-menu').slideUp(300);
        });
        $('.dropdown .dropdown-menu li').click(function() {
            var ths = $(this);
            ths.parents('.dropdown').find('span').text(ths.text());
            ths.parents('.sliderWrap').find('.sectionOverlay').addClass('slide');
            ths.parents('.sliderWrap').find('.galleryWrap').eq(ths.index()).addClass('currentActive').siblings('.galleryWrap').removeClass('currentActive');
            setTimeout(function() {
                ths.parents('.sliderWrap').find('.sectionOverlay').removeClass('slide');
            }, 1000);
            setTimeout(function() {
                ths.parent('.dropdown-menu').slideUp(300);
            }, 10);
        });

        var ths = $('.dropdown .dropdown-menu li').eq(0);
        ths.parents('.dropdown').find('span').text(ths.text());
        ths.parents('.sliderWrap').find('.galleryWrap').eq(ths.index()).addClass('currentActive');
        var selectCatIcon = setInterval(function() {
            var liLength = $('.lifestyleWrap .selectCat span.icon li').length - 1;
            var activeLI = $('.lifestyleWrap .selectCat span.icon li.current').index();
            //console.log(activeLI < liLength)
            if (activeLI < liLength) {
                $('.lifestyleWrap .selectCat span.icon li').eq(activeLI + 1).addClass('current').siblings('li').removeClass('current');
            } else if (activeLI == liLength) {
                $('.lifestyleWrap .selectCat span.icon li').eq(0).addClass('current').siblings('li').removeClass('current');
            }
        }, 500);
        $("#searchValslider").slider();
        $('.searchWrap .searchIcon').click(function() {
            $('body').addClass('noScroll');
            $('.searchLightboxWrap').fadeIn().find('.searchLightbox').addClass('active')
        });
        $('.searchLightbox .close').click(function() {
            $('.searchLightboxWrap').hide().find('.searchLightbox').removeClass('active');
            $('body').removeClass('noScroll');
        });
        $('.pillarsCarousel .item').mouseenter(function() {
            if ($(window).width() >= 768) {
                $(this).parents('.pillarsCarousel').find('.item').addClass('disabled');
                $(this).removeClass('disabled').addClass('hovered');
            }
        });
        $('.pillarsCarousel .item').mouseleave(function() {
            $(this).parents('.pillarsCarousel').find('.item').removeClass('disabled');
            $(this).removeClass('hovered');
        });
        var tabsCount = 0;
        $('.otherProjectsCarousel .slide').each(function() {
            tabsCount++
            $(this).find('.tabsWrap').addClass('tabsWrap' + tabsCount);
            var tabsWrap = $(this).find('.tabsWrap').html();
            $('.letsWorkBetter .appendedTabsWrap').append('<div class="tabsWrap tabsWrap' + tabsCount + '">' + tabsWrap + '</div>')
        });

        $('.appendedTabsWrap').on('click', '.tabs li', function() {
            var ind = $(this).index();
            $('.otherProjectsCarousel .owl-item.active .slide').find('.tabs li').eq(ind).click();
        });

        $('.letsWorkBetter .appendedTabsWrap .tabsWrap').hide();
        $('.letsWorkBetter .appendedTabsWrap .tabsWrap.tabsWrap1').show();
        $('.otherProjectsCarousel').on('click', '.tabs li', function() {
            $(this).addClass('active').siblings('li').removeClass('active');
            $(this).parents('.slide').find('.tabContentWrap .tabContent').eq($(this).index()).show().addClass('currenttabContent').siblings('.tabContent').hide().removeClass('currenttabContent')
            var currentClass = $(this).parents('.tabsWrap').attr('class').split(' ')[1];
            $('.appendedTabsWrap .tabsWrap.' + currentClass).find('li').eq($(this).index()).addClass('active').siblings('li').removeClass('active');
        }).eq(0).click();

        $('.otherProjectsCarousel .slide').each(function() {
            $(this).find('.tabs li').eq(0).click();
        });
        $('.letsWorkBetter .appendedTabsWrap .tabsWrap').each(function() {
            $(this).find('.tabs li').eq(0).addClass('active');
        });

        $('.reviewsWrap').on('click', '.profilePic', function() {
            var ind = $(this).children('.tab').attr('data-attr');
            $(this).parents('.reviewsWrap').find('.profileWrap .profileBox').eq(ind).fadeIn().siblings('.profileBox').hide();
            var currentClass = $(this).attr('class').split(' ')[1];
            $(this).siblings('.profilePic.profilePicMain').addClass(currentClass).removeClass('profilePicMain');
            $(this).removeClass(currentClass).addClass('profilePicMain');
        });

        $('.reviewsWrap .profilePic .tab[data-attr="0"]').click()

        $(".selectWrapper select").focus(function() {
            $(this).parent('.selectWrapper').addClass('fieldFocus')
        });
        $(".selectWrapper select").blur(function() {
            $(this).parent('.selectWrapper').removeClass('fieldFocus')
        });

        if ($('.propertypricecarousel').length) {
            $('.propertypricecarousel').owlCarousel({
                loop: true,
                nav: true,
                margin: 25,
                autoplay: false,
                responsive: {
                    1025: {
                        items: 3
                    },
                    768: {
                        items: 2
                    },
                    320: {
                        slideTransition: 'linear',
                        items: 1
                    }
                }
            });
        }
        $(".accordianWrap p.heading").click(function() {
            if ($(this).hasClass('active')) {
                $(this).removeClass("active");
                $(this).next('.accordCont').slideUp();
            } else {
                $(".accordianWrap p.heading").removeClass("active");
                $(this).addClass("active");
                $('.accordCont').slideUp();
                $(this).next('.accordCont').slideDown();
            }

        });
        if ($('.resdient-slider').length) {
            $('.resdient-slider').owlCarousel({
                items: 3,
                center: true,
                loop: true,
                nav: true,
                touchDrag: false,
                mouseDrag: false,
                autoplay: false,
                // merge:true,
                // margin: 35,
                startPosition: 1,
                responsive: {
                    1025: {
                        margin: 35
                    },
                    768: {
                        // center: false,
                        margin: 10
                    },
                    481: {
                        startPosition: 1,
                        center: true,
                        margin: 10,
                        items: 3
                    },
                    320: {
                        items: 3,
                        margin: 10
                    }
                }
            });
        }

        if ($('.iconicProCarousel').length) {
            $('.iconicProCarousel').owlCarousel({
                items: 1,
                animateIn: 'slideInLeft',
                animateOut: 'fadeOut',
                loop: true,
                nav: true,
                dots: true,
                touchDrag: true,
                mouseDrag: false,
                autoplay: false,
                navRewind: false
            });
        }
        if ($('.otherProjectsCarousel').length) {
            $('.otherProjectsCarousel').owlCarousel({
                items: 1,
                animateIn: 'slideInLeft',
                animateOut: 'fadeOut',
                loop: true,
                nav: true,
                dots: true,
                touchDrag: true,
                mouseDrag: false,
                autoplay: false,
                navRewind: false,
            });
        }
        $('.otherProjectsCarousel').on('changed.owl.carousel', function(e) {
            if (e.item) {
                var index = e.item.index - 1;
                var count = e.item.count;
                if (index > count) {
                    index -= count;
                }
                if (index <= 0) {
                    index += count;
                }
                $('.letsWorkBetter .appendedTabsWrap .tabsWrap').hide();
                $('.letsWorkBetter .appendedTabsWrap .tabsWrap.tabsWrap' + index).fadeIn();
            }
        });

        if ($('.innerMainBanner .bannerCarousel').length) {
            $('.innerMainBanner .bannerCarousel').owlCarousel({
                items: 1,
                animateIn: 'fadeIn',
                animateOut: 'fadeOut',
                loop: false,
                nav: false,
                dots: true,
                touchDrag: true,
                mouseDrag: false,
                autoplay: false,
                navRewind: false,
            });
        }

        if ($('.ourAmenities .bannerCarousel').length) {
            $('.ourAmenities .contentWrap').addClass('active');
            $('.ourAmenities .bannerCarousel').owlCarousel({
                rtl: true,
                items: 1,
                loop: true,
                nav: true,
                dots: true,
                touchDrag: true,
                mouseDrag: false,
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 2000,
                autoplayHoverPause: true
            });
            var secTitle = $('.ourAmenities').find('.sectionTitle').html();
            var content = $('.ourAmenities .bannerCarousel').find('.owl-item.active .content').html();
            $('.ourAmenities .contentWrap').find('.sectionTitle').append(secTitle);
            $('.ourAmenities .contentWrap').find('.content').html(content);
            var owl = $('.ourAmenities .bannerCarousel');
            $('.customNextBtn').click(function() {
                owl.trigger('next.owl.carousel');
            })
            var activeSlide = $('.ourAmenities .bannerCarousel .owl-controls').find('.owl-dot.active').index() + 1;
            var totalSlides = $('.ourAmenities .bannerCarousel .owl-controls').find('.owl-dot').length
            if (totalSlides < 10) {
                $('.ourAmenities .contentWrap .pagination .totalSlides').html(' / 0' + totalSlides)
            } else if (totalSlides >= 10) {
                $('.ourAmenities .contentWrap .pagination .totalSlides').html(totalSlides)
            }
            if (activeSlide < 10) {
                $('.ourAmenities .contentWrap .pagination .activeSlide').html('0' + activeSlide)
            } else if (activeSlide >= 10) {
                $('.ourAmenities .contentWrap .pagination .activeSlide').html(activeSlide)
            }
        }
        $('.ourAmenities .bannerCarousel').on('changed.owl.carousel', function(e) {
            var activeSlide = $('.ourAmenities .bannerCarousel .owl-controls').find('.owl-dot.active').index() + 1;
            $('.ourAmenities .contentWrap').removeClass('active');
            var current = e.item.index;
            content = $(e.target).find(".owl-item").eq(current).find('.content').html();
            $('.ourAmenities .contentWrap').find('.content').html(content);
            setTimeout(function() {
                $('.ourAmenities .contentWrap').addClass('active');
                if (activeSlide < 10) {
                    $('.ourAmenities .contentWrap .pagination .activeSlide').html('0' + activeSlide)
                } else if (activeSlide >= 10) {
                    $('.ourAmenities .contentWrap .pagination .activeSlide').html(activeSlide)
                }
            }, 50)

        });

        var owl = $('.bannerCarousel');
        if ($('.bannerCarousel').length) {
            $('.bannerCarousel').owlCarousel({
                items: 1,
                animateIn: 'fadeIn',
                animateOut: 'fadeOut',
                loop: false,
                nav: false,
                dots: true,
                touchDrag: true,
                mouseDrag: false,
                autoplay: false,
                navRewind: false,
            });
        }

        $('.bannerCarousel').on('changed.owl.carousel', function(e) {
            var current = e.item.index;
            $('.bannerCarousel .owl-item').each(function() {
                if ($(this).find('video').length) {
                    var allVideo = $(this).find('video')
                    allVideo[0].pause();
                    allVideo[0].currentTime = 0;
                }
            });
            if ($(e.target).find(".owl-item").eq(current).find('video').length) {
                var currentVideo = $(e.target).find(".owl-item").eq(current).find('video')
                currentVideo[0].play();
            }

        });

        if ($('.resdient-slider').length) {
            var owl = $('.resdient-slider').owlCarousel({
                items: 3,
                center: true,
                loop: true,
                nav: true,
                touchDrag: false,
                mouseDrag: false,
                autoplay: false,
                startPosition: 1,
                responsive: {
                    1025: {
                        margin: 35
                    },
                    768: {
                        margin: 10
                    },
                    481: {
                        startPosition: 1,
                        center: true,
                        margin: 10,
                        items: 3
                    },
                    320: {
                        items: 3,
                        margin: 10
                    }
                },

            });


        }

        // $('.inner-slider').owlCarousel({
        //     items: 1,
        //     nav: true,
        //     loop: false
        // });
        if ($('.bannerWithForm').length) {
            formTop();
        }
        $('.subHeader .topNav ul').show();
        if ($(window).width > 768) {
            if ($('.subHeader .topNav ul').length) {
                setTimeout(function() {
                    $('.subHeader .topNav ul').owlCarousel({
                        items: 6,
                        nav: false,
                        dots: false,
                        autoplay: false,
                        responsive: {
                            767: {
                                autoWidth: true
                            },
                            481: {
                                items: 6
                            },
                            361: {
                                items: 4
                            },
                            320: {
                                items: 3
                            }
                        }
                    });
                }, 400);
            }
        }

        $('.subHeader').css({ 'top': fixed_header });

        if ($('.projectimgCarou').length) {
            imgSlider = $('.projectimgCarou').flexslider({
                directionNav: true,
                animation: "slide",
                controlNav: false,
                animationLoop: true,
                slideshow: false,
                customDirectionNav: $(".custom-navigation a"),
                start: pageination,
                touch: false


            });
        }
        if ($('.projectsTab.mobile').length) {
            tabsSlider = $('.projectsTab.mobile').flexslider({
                directionNav: true,
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                touch: false,
            });
        }
        if ($('.projectContCarou').length) {
            contSlider = $('.projectContCarou').flexslider({
                directionNav: true,
                animation: "fade",
                controlNav: false,
                animationLoop: true,
                slideshow: false,
                touch: false
            });
        }
        $('.supremusabout .lifestyleWrap .topSection .content  div').attr('data-height', $('.supremusabout .lifestyleWrap .topSection .content  div').height()).height('100px');

        $('img.svg').each(function() {
            var $img = jQuery(this);
            var imgID = $img.attr('id');
            var imgClass = $img.attr('class');
            var imgURL = $img.attr('src');


            jQuery.get(imgURL, function(data) {
                var $svg = jQuery(data).find('svg');
                if (typeof imgID !== 'undefined') {
                    $svg = $svg.attr('id', imgID);
                }
                if (typeof imgClass !== 'undefined') {
                    $svg = $svg.attr('class', imgClass + ' replaced-svg');
                }
                $svg = $svg.removeAttr('xmlns:a');
                if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                    $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
                }
                $img.replaceWith($svg);

            }, 'xml');

        });

        var slider1 = $('#carouselFloor').data('flexslider');
        var slider2 = $('#sliderFloor').data('flexslider');
        amenitySlider();

        function gallerySlider() {
            $('#photoSlider').removeData("flexslider");
            $('#photosThumb').removeData("flexslider");
            if ($('#photosThumb').length > 0) {
                $('#photosThumb').flexslider({
                    animation: "slide",
                    controlNav: false,
                    animationLoop: false,
                    slideshow: false,
                    itemWidth: thumbGap,
                    itemMargin: 15,
                    asNavFor: "#photoSlider"
                });
            }
            if ($('#photoSlider').length > 0) {
                $('#photoSlider').flexslider({
                    animation: "slide",
                    controlNav: false,
                    animationLoop: false,
                    slideshow: false,
                    sync: "#photosThumb",
                    start: function(slider) {
                        var pagingSection = $(slider).attr('navFor');
                        var totalSlides = slider.count;
                        var slideLength = totalSlides.toString().length;
                        if (slideLength == 1) {
                            $('#' + pagingSection).find('.totalSlides').html('0' + slider.count);
                        } else {
                            $('#' + pagingSection).find('.totalSlides').html(slider.count);
                        }

                        $('#' + pagingSection).find('.currentSlide').html('01');
                    },
                    after: function(slider) {
                        var pagingSection = $(slider).attr('navFor');
                        var curSlides = slider.currentSlide;
                        var curSlideLength = curSlides.toString().length;
                        var curSlide = slider.currentSlide + 1;
                        // console.log(curSlide + ' curSlide | totalSlide ' + curSlideLength);
                        if (curSlideLength == 1) {
                            $('#' + pagingSection).find('.currentSlide').html('0' + curSlide);
                        } else {
                            $('#' + pagingSection).find('.currentSlide').html(curSlide);
                        }

                    }
                });
            }
            $('#videoSlider').removeData("flexslider");
            $('#videosThumb').removeData("flexslider");
            if ($('#videosThumb').length > 0) {
                $('#videosThumb').flexslider({
                    animation: "slide",
                    controlNav: false,
                    animationLoop: false,
                    slideshow: false,
                    itemWidth: thumbGap,
                    itemMargin: 15,
                    asNavFor: "#videoSlider"
                });
            }
            if ($('#videoSlider').length > 0) {
                $('#videoSlider').flexslider({
                    animation: "slide",
                    controlNav: false,
                    animationLoop: false,
                    slideshow: false,
                    sync: "#videosThumb",
                    start: function(slider) {
                        var pagingSection = $(slider).attr('navFor');
                        var totalSlides = slider.count;
                        var slideLength = totalSlides.toString().length;
                        if (slideLength == 1) {
                            $('#' + pagingSection).find('.totalSlides').html('0' + slider.count);
                        } else {
                            $('#' + pagingSection).find('.totalSlides').html(slider.count);
                        }

                        $('#' + pagingSection).find('.currentSlide').html('01');
                    },
                    after: function(slider) {
                        var pagingSection = $(slider).attr('navFor');
                        var curSlides = slider.currentSlide;
                        var curSlideLength = curSlides.toString().length;
                        var curSlide = slider.currentSlide + 1;
                        // console.log(curSlide + ' curSlide | totalSlide ' + curSlideLength);
                        if (curSlideLength == 1) {
                            $('#' + pagingSection).find('.currentSlide').html('0' + curSlide);
                        } else {
                            $('#' + pagingSection).find('.currentSlide').html(curSlide);
                        }

                    }
                });
            }
            $('#360Slider').removeData("flexslider");
            $('#360Thumb').removeData("flexslider");
            if ($('#videoSlider').length > 0) {
                $('#360Thumb').flexslider({
                    animation: "slide",
                    controlNav: false,
                    animationLoop: false,
                    slideshow: false,
                    itemWidth: thumbGap,
                    itemMargin: 15,
                    asNavFor: "#360Slider"
                });
            }
            if ($('#360Slider').length > 0) {
                $('#360Slider').flexslider({
                    animation: "slide",
                    controlNav: false,
                    animationLoop: false,
                    slideshow: false,
                    sync: "#360Thumb",
                    start: function(slider) {
                        var pagingSection = $(slider).attr('navFor');
                        var totalSlides = slider.count;
                        var slideLength = totalSlides.toString().length;
                        if (slideLength == 1) {
                            $('#' + pagingSection).find('.totalSlides').html('0' + slider.count);
                        } else {
                            $('#' + pagingSection).find('.totalSlides').html(slider.count);
                        }

                        $('#' + pagingSection).find('.currentSlide').html('01');
                    },
                    after: function(slider) {
                        var pagingSection = $(slider).attr('navFor');
                        var curSlides = slider.currentSlide;
                        var curSlideLength = curSlides.toString().length;
                        var curSlide = slider.currentSlide + 1;
                        // console.log(curSlide + ' curSlide | totalSlide ' + curSlideLength);
                        if (curSlideLength == 1) {
                            $('#' + pagingSection).find('.currentSlide').html('0' + curSlide);
                        } else {
                            $('#' + pagingSection).find('.currentSlide').html(curSlide);
                        }

                    }
                });
            }
        }
        gallerySlider();
        if ($('.townSlider').length > 0) {
            $('.townSlider').flexslider({
                animation: "fade",
                controlNav: true,
                animationLoop: false,
                slideshow: false
            });
        }
        $('.customTabs').each(function() {
            var tabLinks = $(this).find('li');
            var commontabs;
            var currentTab;

            function customTabs() {
                commontabs = $(this).parent().attr('commonTab');
                currentTab = $(this).attr('tabName');
                $('.' + commontabs).css({ 'display': 'none' });
                $('#' + currentTab).fadeIn();
                tabLinks.removeClass('activeTab');
                $(this).addClass('activeTab');
                if ($(this).hasAttr('checkSlider')) {
                    // console.log('testddd');
                    startSlider();
                }
                if ($(this).hasAttr('amenitySlider')) {
                    amenitySlider();
                }
                if ($(this).hasAttr('gallerySlider')) {
                    gallerySlider();
                }
            }
            $(tabLinks[0]).addClass('activeTab');

            $(tabLinks).on('click', customTabs);
        });
        $('ul[commontab="amenityTabs_1"] li').eq(0).click();
        $('.propertyNav').owlCarousel({
            items: 4,
            loop: false,
            center: false,
            margin: 0,
            nav: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 2
                }
            }
        });
        $('.unitplanCarousel').owlCarousel({
            items: 1,
            loop: false,
            center: false,
            margin: 1,
            nav: true
        });
        $('.toggleBtn a').each(function() {
            $(this).click(function() {
                var contentToggle = $(this).attr('toggleContent');
                $('#' + contentToggle).toggleClass('listHidden');
                $(this).toggleClass('open');
            });
        });
        if ($('.popup-youtube').length) {
            $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,

                fixedContentPos: false
            });
        }
        if ($('.zoom-gallery').length) {
            $('.zoom-gallery').magnificPopup({
                delegate: 'a.zoom',
                type: 'image',
                tLoading: 'Loading image #%curr%...',
                mainClass: 'mfp-img-mobile',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1]
                },
                image: {
                    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
                }
            });
        }
        $('.openAccess').click(openAccess);
        $('.closeAccessPop').click(closeAccess);
        $('.exploreIframe').click(function() {
            $('#exploreIframe').fadeIn();
        });
        $('.towerCarousel').owlCarousel({
            loop: true,
            nav: true,
            margin: 25,
            autoplay: false,
            responsive: {
                1025: {
                    items: 2
                },
                768: {
                    items: 2
                },
                320: {
                    items: 2
                }
            }
        });

        var mapBtn = $('#mapBtns').find('li');

        $(mapBtn).click(function() {
            var tabShow = $(this).attr('showTab');
            $('.mapTabsDiv').css({ 'display': 'none' });
            $('#' + tabShow).fadeIn();
            $(mapBtn).removeClass('active');
            $(this).addClass('active');
        });

        $('.closeAccessMap').click(function() {
            $('.mapTabsDiv').css({ 'display': 'none' });
            $('#mapHolder').fadeIn();
            $(mapBtn).removeClass('active');
            $(mapBtn[0]).addClass('active');
        });

        var owlEvent = $('.eventsCarousel');
        var eventsContent = $('.eventsContent');
        owlEvent.owlCarousel({
            loop: true,
            nav: true,
            margin: 0,
            autoplay: false,
            items: 1,
            responsive: {
                1025: {
                    items: 1
                },
                768: {
                    items: 1
                },
                320: {
                    items: 1
                }
            }
        });
        owlEvent.on('changed.owl.carousel', function(event) {
            var current = event.page.index;
            $(eventsContent).removeClass('current');
            $(eventsContent[current]).addClass('current');
        });

        var WinW = $(window).width();

        function luxury() {
            if (WinW < 768) {
                $('.luxuryCarousel').addClass('active');
                setTimeout(function() {
                    $('.luxuryCarousel.active').owlCarousel({
                        //items: 3,
                        loop: true,
                        nav: true,
                        touchDrag: true,
                        mouseDrag: true,
                        autoplay: false,
                        navRewind: false,
                        responsive: {
                            0: {
                                items: 1
                            }
                        }
                    });
                }, 400)
            } else if (WinW >= 768) {
                $('.pillarsCarousel').removeClass('active');
                setTimeout(function() {
                    $('.luxuryCarousel').trigger('destroy.owl.carousel').removeClass('owl-loaded');
                    $('.luxuryCarousel').find('.owl-stage-outer').children().unwrap();
                    $('.luxuryCarousel').removeClass('owl-carousel');
                }, 100)
            }
        }
        luxury();
        $('.luxuryCarousel .item').mouseenter(function() {
            if (WinW >= 768) {
                $(this).parents('.luxuryCarousel').find('.item').addClass('disabled');
                $(this).removeClass('disabled').addClass('hovered');
            }
        });
        $('.luxuryCarousel .item').mouseleave(function() {
            $(this).parents('.luxuryCarousel').find('.item').removeClass('disabled');
            $(this).removeClass('hovered');
        });

        $(window).resize(function() {
            WinW = $(window).width();
            luxury();
        });

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
            $(this).closest('li').find('ul').slideToggle()

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
        $('.showMore > a').click(function() {
            $('.showMoreContent').slideDown();
            $(this).slideUp();
        });
        $('.showMoreContent a').click(function() {
            $('.showMoreContent').slideUp();
            $('.showMore a').slideDown();
        });
        var scrollDuration = 300;
        var leftPaddle = document.getElementsByClassName('left-paddle');
        var rightPaddle = document.getElementsByClassName('right-paddle');
        var itemsLength = $('.item').length;
        var itemSize = $('.item').outerWidth(true);
        var paddleMargin = 20;
        var getMenuWrapperSize = function() {
            return $('.tabMenu').outerWidth();
        }
        var menuWrapperSize = getMenuWrapperSize();
        $(window).on('resize', function() {
            menuWrapperSize = getMenuWrapperSize();
        });
        var menuVisibleSize = menuWrapperSize;
        var getMenuSize = function() {
            return itemsLength * itemSize;
        };
        var menuSize = getMenuSize();
        var menuInvisibleSize = menuSize - menuWrapperSize;
        var getMenuPosition = function() {
            return $('.menuList').scrollLeft();
        };
        $('.menuList').on('scroll', function() {
            menuInvisibleSize = menuSize - menuWrapperSize;
            var menuPosition = getMenuPosition();
            var menuEndOffset = menuInvisibleSize - paddleMargin;
            if (menuPosition <= paddleMargin) {
                $(leftPaddle).addClass('hidden');
                $(rightPaddle).removeClass('hidden');
            } else if (menuPosition < menuEndOffset) {
                // show both paddles in the middle
                $(leftPaddle).removeClass('hidden');
                $(rightPaddle).addClass('hidden');
            } else if (menuPosition >= menuEndOffset) {
                $(leftPaddle).removeClass('hidden');
                $(rightPaddle).addClass('hidden');
            }

        });
        $(rightPaddle).on('click', function() {
            $('.menuList').animate({ scrollLeft: menuInvisibleSize }, scrollDuration);
        });
        $(leftPaddle).on('click', function() {
            $('.menuList').animate({ scrollLeft: '0' }, scrollDuration);
        });

        $('.menuList >  li').click(function() {
            $('.menuList >  li').removeClass("active");
            $(this).addClass("active");

        });
        var tabheader = $("body");
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= window.innerHeight) {
                tabheader.addClass("tabFixed");
            } else {
                tabheader.removeClass("tabFixed");
            }
        });
        if ($('.videoContent').length) {
            $('.videoContent').owlCarousel({
                items: 1,
                nav: true,
                center: true,
                touchDrag: false,
                mouseDrag: false,
                autoplay: false,
                startPosition: 1,
                responsive: {
                    1025: {
                        margin: 35
                    },
                    768: {
                        margin: 10
                    },
                    481: {
                        startPosition: 0,
                        center: false,
                        margin: 20,
                        stagePadding: 70,
                        items: 1
                    },
                    320: {
                        items: 1
                    }
                }
            });
        }

        var tabCarousel = $('.tabCarousel');
        if ($(tabCarousel).length) {
            $(tabCarousel).owlCarousel({
                items: 4,
                loop: false,
                nav: true,
                center: true,
                touchDrag: false,
                mouseDrag: false,
                autoplay: false,
                startPosition: 1,
                dots: false,
                URLhashListener: true,
                responsive: {
                    1025: {
                        margin: 35,
                        items: 4
                    },
                    768: {
                        margin: 10,
                        items: 3
                    },
                    640: {
                        startPosition: 0,
                        center: false,
                        margin: 0,
                        stagePadding: 0,
                        items: 2
                    },
                    320: {
                        startPosition: 0,
                        items: 1,
                        center: false,
                        margin: 0,
                        stagePadding: 0
                    }
                }
            });
        }

        var owlItem = $(tabCarousel).find('.owl-item');
        var item = $(tabCarousel).find('.item');
        inView('#boutiqueOffice').on('enter', function(){
            $(tabCarousel).trigger('to.owl.carousel', 0);  
            $(owlItem).find('.item').removeClass('itemActive');
            $(owlItem[0]).find('.item').addClass('itemActive');              
        });
        inView('#leaseOffice').on('enter', function(){
            $(tabCarousel).trigger('to.owl.carousel', 1);
            $(owlItem).find('.item').removeClass('itemActive');
            $(owlItem[1]).find('.item').addClass('itemActive');                
        });
        inView('#retail').on('enter', function(){
            $(tabCarousel).trigger('to.owl.carousel', 2);    
            $(owlItem).find('.item').removeClass('itemActive');
            $(owlItem[2]).find('.item').addClass('itemActive');            
        });
        inView('#warehouse').on('enter', function(){
            $(tabCarousel).trigger('to.owl.carousel', 3);
            $(owlItem).find('.item').removeClass('itemActive');
            $(owlItem[3]).find('.item').addClass('itemActive');                
        });
            

        

        var modal = document.getElementById('myModal');

        var btn = document.getElementById("modalBtn");

        var span = document.getElementsByClassName("close")[0];

        $('.close').click(function() {

            $("#myModal").hide();
            $('body, html').css('overflow', 'visible');
            $('.modalContent iframe').attr('src', '');

        });

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "block";
            }
        }

        $('.commercial .resdient-slider').owlCarousel('destroy');

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


        $(document).on("scroll", onScroll);

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

        $('.dropdownWrap .dropdown-btn').click(function() {
            $('.dropdownContainer').slideToggle();
        });
        $('.tabContainer ul.tabs li').click(function() {
            var tab_id = $(this).attr('data-tab');

            $('.tabContainer ul.tabs li').removeClass('current');
            $('.tab-content').removeClass('current');

            $(this).addClass('current');
            $("#" + tab_id).addClass('current');
        });
        $('.mapTabs').owlCarousel({
            items: 4,
            autoWidth: true,
            loop: false,
            nav: true,
            dots: true,
            touchDrag: true,
            mouseDrag: false,
            autoplay: false,
            navRewind: false
        });
        if ($('#videoTextSlider').length > 0) {
            $('#videoTextSlider').flexslider({
                animation: "fade",
                controlNav: false,
                animationLoop: true,
                slideshow: false,
            });
        }
        if ($('#videoTextSlider').length > 0) {
            $('#videoGallerySlider').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: true,
                slideshow: false,
                sync: "#videoTextSlider",
                start: function(slider) {
                    var pagingSection = $(slider).attr('navFor');
                    var totalSlides = slider.count;
                    var slideLength = totalSlides.toString().length;
                    if (slideLength == 1) {
                        $('#' + pagingSection).find('.totalSlides').html('0' + slider.count);
                    } else {
                        $('#' + pagingSection).find('.totalSlides').html(slider.count);
                    }

                    $('#' + pagingSection).find('.currentSlide').html('01');
                },
                after: function(slider) {
                    var pagingSection = $(slider).attr('navFor');
                    var curSlides = slider.currentSlide;
                    var curSlideLength = curSlides.toString().length;
                    var curSlide = slider.currentSlide + 1;
                    // console.log(curSlide + ' curSlide | totalSlide ' + curSlideLength);
                    if (curSlideLength == 1) {
                        $('#' + pagingSection).find('.currentSlide').html('0' + curSlide);
                    } else {
                        $('#' + pagingSection).find('.currentSlide').html(curSlide);
                    }

                }
            });
        }
        if ($('.earnPointsSlider').length) {
            $('.earnPointsSlider').owlCarousel({
                center: true,
                items: 3,
                loop: false,
                margin: 100,
                responsive: {
                    768: {
                        center: false,
                        loop: false,
                        mouseDrag: false,
                        items: 3,
                        margin: 100
                    },
                    420: {
                        center: true,
                        loop: true,
                        items: 2,
                        margin: 30
                    },
                    0: {
                        center: true,
                        loop: false,
                        items: 1,
                        margin: 0
                    }
                }
            });
            $('.redeemPointsSlider').owlCarousel({
                center: true,
                items: 3,
                loop: false,
                margin: 100,
                nav: true,
                responsive: {
                    768: {
                        center: false,
                        loop: false,
                        mouseDrag: false,
                        items: 3,
                        margin: 100
                    },
                    420: {
                        center: true,
                        loop: true,
                        items: 2,
                        margin: 30
                    },
                    0: {
                        center: true,
                        loop: false,
                        items: 1,
                        margin: 100
                    }
                }
            });
        }
        if ($('.ourgivewayscarousel').length) {
            $('.ourgivewayscarousel').owlCarousel({
                items: 1,
                loop: true,
                nav: true,
                margin: 25,
                autoplay: false,
                responsive: {
                    1025: {
                        items: 2
                    },
                    768: {
                        items: 2
                    },
                    320: {
                        slideTransition: 'linear',
                        items: 1
                    }
                }
            });
        }
        if ($('.testimonials-slider').length) {
            $('.testimonials-slider').owlCarousel({
                items: 3,
                nav: true,
                loop: true,
                center: true,
                startPosition: 1,
                responsive: {
                    1025: {
                        margin: 0,
                        center: true,
                        startPosition: 0,
                    },
                    420: {
                        items: 3
                    },
                    320: {
                        items: 1
                    }
                }
            });
        }


        //Custom Carousel init
        $('.custCarou').append('<a href="javascript:;" class="cust-prev cust-arrow"></a><a href="javascript:;" class="cust-next cust-arrow"></a>')
        $('.custCarou > .inner-slider').css({ height: $('.custCarou > div').width() });
        $('.custCarou > .inner-slider > img:first-child').addClass('active');

        //Custom Carousel init

    }).on('click', '.custCarou .cust-next', function() {
        var thisImg = $(this).siblings('.inner-slider').find('img.active');
        if (thisImg.is(':last-child')) {
            thisImg.parent('.inner-slider').find('img:first-child').addClass('active').siblings('img').removeClass('active');
        } else {
            thisImg.next('img').addClass('active').siblings('img').removeClass('active');
        }
    }).on('click', '.custCarou .cust-prev', function() {
        var thisImg = $(this).siblings('.inner-slider').find('img.active');
        if (thisImg.is(':first-child')) {
            thisImg.parent('.inner-slider').find('img:last-child').addClass('active').siblings('img').removeClass('active');

        } else {
            thisImg.prev('img').addClass('active').siblings('img').removeClass('active');

        }
    }).on('click', '.letsWorkBetter .projectsTab li a', function() {
        var tabIndex = $(this).parent().index();
        $('.letsWorkBetter .projectstabcontent > div').eq(tabIndex).addClass('active').siblings().removeClass('active');
        $(this).addClass('active').parent().siblings().find('a').removeClass('active');
        $('.letsWorkBetter .projectsTab li').eq(tabIndex).find('a').addClass('active').parent().siblings().find('a').removeClass('active');
        imgSlider.resize();
        contSlider.resize();
        tabsSlider.resize();
        pageination()
    }).on('click', '.letsWorkBetter .custom-navigation .flex-next', function(e) {
        e.preventDefault();
        $(this).parents('.content').find('.carouCont').find('.flex-direction-nav').find('.flex-next').click();
        $(this).parents('.content').find('.carouImg').find('.flex-direction-nav').find('.flex-next').click();

        pageination();
    }).on('click', '.supremusabout .lifestyleWrap .more', function() {
        if ($('.supremusabout .lifestyleWrap .topSection .content  div').hasClass('open')) {
            $('.supremusabout .lifestyleWrap .topSection .content  div').css({ height: '100px' }).removeClass('open');

            $(this).text('MORE +');
        } else {
            $('.supremusabout .lifestyleWrap .topSection .content  div').css({ height: $('.supremusabout .lifestyleWrap .topSection .content  div').attr('data-height') }).addClass('open');
            $(this).text('LESS -');
        }
    }).on('click', '.modalOpen', function() {
        var modalOp = $(this).attr('data-modal-id');
        openPopup(modalOp);
    }).on('click', '.modalBody .close', function() {
        closePopup();
    }).on('click', '.smPageLink a', function(e) {
        e.preventDefault();
        $(this).parents('ul').find('a').removeClass('active');
        $(this).addClass('active')
        var secPos = $('.' + $(this).attr('href')).offset().top;
        $('html, body').animate({ scrollTop: secPos - $('.subHeader').outerHeight(true) }, 500);
    }).on('click', '.mapTabs a', function() {
        $(this).addClass('active').parents('.owl-item').siblings().find('a').removeClass('active');
        var searchtype = $(this).attr('data-change-map');
        initMap(searchtype);
        $('#map').removeClass('propMap');
        $('#map').removeClass('pointerOpen');
    }).on('scroll', function() {
        var y = $(document).scrollTop();
        if (y > fixed_header) {
            $('.subHeader .breadcrumb').fadeIn();
            $('.subHeader').addClass('active'); +
            $('.innerMainBanner').css({ 'margin-top': subheader_height });
            if ($('body > .getInTouchWrap .getInTouchLightBox').length == 0) {
                $('.subHeader .topNav .enquire-block').fadeIn();
            }
            if ($('body > .getInTouchWrap .getInTouchLightBox').length > 0 && y > formTopFixed) {
                $('body > .getInTouchWrap .getInTouchLightBox').fadeOut();
                $('.subHeader .topNav .enquire-block').fadeIn();
            }
        } else {
            $('.subHeader .breadcrumb').hide();
            $('.subHeader').removeClass('active');
            $('.innerMainBanner').css({ 'margin-top': '' });
            if ($('body > .getInTouchWrap .getInTouchLightBox').length == 0) {
                $('.subHeader .topNav .enquire-block').hide();
            }
            if ($('body > .getInTouchWrap .getInTouchLightBox').length > 0 && y < formTopFixed) {
                $('body > .getInTouchWrap .getInTouchLightBox').fadeIn();
                $('.subHeader .topNav .enquire-block').hide();
            }
        }
    }).on('change', '#ptype', function() {

        var imgsrc = $('#ptype option:selected').val();
        var imgsrcarr = imgsrc.split('|')

        $('.planImg img').attr('src', imgsrcarr[0]);
        $('.zoom').attr('href', imgsrcarr[1]);
        $('.propprice p strong:nth-child(1)').text(imgsrcarr[2]);
        $('.propprice p strong:nth-child(3)').text(imgsrcarr[3]);
    });

    $('.thumbSlider').each(function() {
        var flexNav = $(this).find('.flex-direction-nav');
        $(this).find('iframe').mouseenter(function() {
            console.log('iframe on' + $(flexNav));
            $(this).closest('.flexslider').find('.flex-direction-nav').css({ 'display': 'block' });
            $(this).closest('.flexslider').find('.flex-direction-nav').mouseenter(function() {
                $(this).css({ 'display': 'block' });
            });
        });
        $(this).find('iframe').mouseleave(function() {
            console.log('iframe off');
            $(this).closest('.flexslider').find('.flex-direction-nav').css({ 'display': 'none' });
        });
    });
})(jQuery);