(function($){
    // ------------priva page sliders Starts------------
    $(document).ready(function() {
        // Section earn points carousel Starts
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
            // Section earn points carousel Starts
            // Section redeem points carousel Starts
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
        // Section redeem points carousel end
        // Section our giveways carousel Starts
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
        // Section our giveways carousel end
        // Section testimonials carousel Starts
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
        // Section testimonials carousel end
    });
// ------------priva page sliders Starts------------
})(jQuery);