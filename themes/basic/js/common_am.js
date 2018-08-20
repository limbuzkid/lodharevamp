(function($){
    $.fn.hasAttr = function(name) {
        return this.attr(name) !== undefined;
    };



    $(document).ready(function() {

        jQuery('img.svg').each(function(){
            var $img = jQuery(this);
            var imgID = $img.attr('id');
            var imgClass = $img.attr('class');
            var imgURL = $img.attr('src');


            jQuery.get(imgURL, function(data) {
                // Get the SVG tag, ignore the rest
                var $svg = jQuery(data).find('svg');

                // Add replaced image's ID to the new SVG
                if(typeof imgID !== 'undefined') {
                    $svg = $svg.attr('id', imgID);
                }
                // Add replaced image's classes to the new SVG
                if(typeof imgClass !== 'undefined') {
                    $svg = $svg.attr('class', imgClass+' replaced-svg');
                }

                // Remove any invalid XML tags as per http://validator.w3.org
                $svg = $svg.removeAttr('xmlns:a');

                // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
                if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                    $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
                }

                // Replace image with new SVG
                $img.replaceWith($svg);

            }, 'xml');

        });

        var slider1 = $('#carouselFloor').data('flexslider');
        var slider2 = $('#sliderFloor').data('flexslider');

        // The slider being synced must be initialized first
        function startSlider(){

            $('#carouselFloor').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 125,
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
        function amenitySlider(){
            $('.sliderAmenities').removeData("flexslider");
            $('.sliderAmenities').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                start: function(slider) {
                    var pagingSection = $(slider).attr('navFor');
                    var totalSlides = slider.count;
                    var slideLength = totalSlides.toString().length;
                    if(slideLength == 1){
                        $('#'+pagingSection).find('.totalSlides').html('0'+slider.count);
                    }else{
                        $('#'+pagingSection).find('.totalSlides').html(slider.count);
                    }

                    $('#'+pagingSection).find('.currentSlide').html('01');
                },
                after: function(slider) {
                    var pagingSection = $(slider).attr('navFor');
                    var curSlides = slider.currentSlide;
                    var curSlideLength = curSlides.toString().length;
                    var curSlide = slider.currentSlide + 1;
                    console.log(curSlide + ' curSlide | totalSlide ' + curSlideLength);
                    if(curSlideLength == 1){
                        $('#'+pagingSection).find('.currentSlide').html('0'+ curSlide);
                    }else{
                        $('#'+pagingSection).find('.currentSlide').html(curSlide);
                    }

                }
            });
        }
        amenitySlider();

        function gallerySlider(){

            $('#photoSlider').removeData("flexslider");
            $('#photosThumb').removeData("flexslider");

            $('#photosThumb').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 125,
                itemMargin: 15,
                asNavFor: "#photoSlider"
            });

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
                    if(slideLength == 1){
                        $('#'+pagingSection).find('.totalSlides').html('0'+slider.count);
                    }else{
                        $('#'+pagingSection).find('.totalSlides').html(slider.count);
                    }

                    $('#'+pagingSection).find('.currentSlide').html('01');
                },
                after: function(slider) {
                    var pagingSection = $(slider).attr('navFor');
                    var curSlides = slider.currentSlide;
                    var curSlideLength = curSlides.toString().length;
                    var curSlide = slider.currentSlide + 1;
                    console.log(curSlide + ' curSlide | totalSlide ' + curSlideLength);
                    if(curSlideLength == 1){
                        $('#'+pagingSection).find('.currentSlide').html('0'+ curSlide);
                    }else{
                        $('#'+pagingSection).find('.currentSlide').html(curSlide);
                    }

                }
            });

            $('#videoSlider').removeData("flexslider");
            $('#videosThumb').removeData("flexslider");

            $('#videosThumb').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 125,
                itemMargin: 15,
                asNavFor: "#videoSlider"
            });

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
                    if(slideLength == 1){
                        $('#'+pagingSection).find('.totalSlides').html('0'+slider.count);
                    }else{
                        $('#'+pagingSection).find('.totalSlides').html(slider.count);
                    }

                    $('#'+pagingSection).find('.currentSlide').html('01');
                },
                after: function(slider) {
                    var pagingSection = $(slider).attr('navFor');
                    var curSlides = slider.currentSlide;
                    var curSlideLength = curSlides.toString().length;
                    var curSlide = slider.currentSlide + 1;
                    console.log(curSlide + ' curSlide | totalSlide ' + curSlideLength);
                    if(curSlideLength == 1){
                        $('#'+pagingSection).find('.currentSlide').html('0'+ curSlide);
                    }else{
                        $('#'+pagingSection).find('.currentSlide').html(curSlide);
                    }

                }
            });

            $('#360Slider').removeData("flexslider");
            $('#360Thumb').removeData("flexslider");

            $('#360Thumb').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 125,
                itemMargin: 15,
                asNavFor: "#360Slider"
            });

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
                    if(slideLength == 1){
                        $('#'+pagingSection).find('.totalSlides').html('0'+slider.count);
                    }else{
                        $('#'+pagingSection).find('.totalSlides').html(slider.count);
                    }

                    $('#'+pagingSection).find('.currentSlide').html('01');
                },
                after: function(slider) {
                    var pagingSection = $(slider).attr('navFor');
                    var curSlides = slider.currentSlide;
                    var curSlideLength = curSlides.toString().length;
                    var curSlide = slider.currentSlide + 1;
                    console.log(curSlide + ' curSlide | totalSlide ' + curSlideLength);
                    if(curSlideLength == 1){
                        $('#'+pagingSection).find('.currentSlide').html('0'+ curSlide);
                    }else{
                        $('#'+pagingSection).find('.currentSlide').html(curSlide);
                    }

                }
            });


        }
        gallerySlider();

        $('.townSlider').flexslider({
            animation: "fade",
            controlNav: true,
            animationLoop: false,
            slideshow: false
        });

        $('.customTabs').each(function(){
            var tabLinks = $(this).find('li');
            var commontabs;
            var currentTab;
            function customTabs(){
                commontabs = $(this).parent().attr('commonTab');
                currentTab = $(this).attr('tabName');
                $('.'+commontabs).css({'display':'none'});
                $('#'+currentTab).fadeIn();
                tabLinks.removeClass('activeTab');
                $(this).addClass('activeTab');
                if($(this).hasAttr('checkSlider')) {
                    console.log('testddd');
                    startSlider();
                }
                if($(this).hasAttr('amenitySlider')) {
                    amenitySlider();
                }
                if($(this).hasAttr('gallerySlider')) {
                    gallerySlider();
                }
            }
            $(tabLinks[0]).addClass('activeTab');

            $(tabLinks).on('click', customTabs);
        });
        $('ul[commontab="amenityTabs_1"] li').eq(0).click();


        $('.propertyNav').owlCarousel({
            items:4,
            loop:false,
            center:false,
            margin:0,
            nav:true,
            responsive:{
                0:{
                    items:2
                },600:{
                    items:2
                },
                1000:{
                    items:2
                }
            }
        });
        $('.unitplanCarousel').owlCarousel({
            items:1,
            loop:false,
            center:false,
            margin:1,
            nav:true
        });

        $('.toggleBtn a').each(function(){
            $(this).click(function(){
                var contentToggle = $(this).attr('toggleContent');
                $('#'+contentToggle).toggleClass('hidden');
                $(this).toggleClass('open');
            });
        });


        /*$('.toggleBtn a').each(function(){
            $(this).click(function(){
                var contentToggle = $(this).attr('toggleContent');
                $('#'+contentToggle).toggleClass('hidden');
                $(this).toggleClass('open');
            });
        });*/


        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false
        });

        $('.zoom-gallery').magnificPopup({
            delegate: 'a.zoom',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
            }
        });

        function openAccess(){
            $('#accessPop').fadeIn();
            $('.openAccess').css({'display':'none'});
            $('.gotomap').css({'display':'block'});
        }

        function closeAccess(){
            $('#accessPop').fadeOut();
            $('.gotomap').css({'display':'none'});
            $('.openAccess').css({'display':'block'});
        }

        $('.openAccess').click(openAccess);
        $('.closeAccessPop').click(closeAccess);

        $('.exploreIframe').click(function(){
            $('#exploreIframe').fadeIn();
        });


    });
})(jQuery);