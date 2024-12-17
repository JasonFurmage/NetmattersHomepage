// ==========================================================================
// js/carousel.js
// ==========================================================================

import '../vendor/jquery/jquery-3.7.1.min.js';
import '../vendor/owl-carousel/owl.carousel.min.js';

export function initCarousel() {
    $(document).ready(function(){

        // Configure affiliates carousels.
        $(".affiliates__carousel").owlCarousel({
            autoplay:true,
            autoplayTimeout:3500,
            autoplayHoverPause:true,
            loop:true,
            autoWidth:true,
            mouseDrag:false,
            margin:50
        });

        // Configure banner carousel.
        $(".banner__carousel").owlCarousel({
            autoplay:true,
            autoplayTimeout:4500,
            autoplayHoverPause:true,
            autoHeight:true,
            loop:true,
            dots:true,
            items:1
        });
    });
}