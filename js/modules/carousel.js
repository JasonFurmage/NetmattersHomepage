// ==========================================================================
// js/carousel.js
// ==========================================================================

// Configure owl carousel.
export function initCarousel() {
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            autoplay:true,
            autoplayTimeout:3500,
            autoplayHoverPause:true,
            loop:true,
            margin:50,
            autoWidth:true,
            mouseDrag:false
        });
    });
}