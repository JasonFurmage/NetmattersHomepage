// ==========================================================================
// js/main.js
// ==========================================================================

import './vendor/jquery/jquery-3.7.1.min.js';
import './vendor/owl-carousel/owl.carousel.min.js';

import { initCarousel } from './modules/carousel.js';
import { initCookies } from "./modules/cookies.js";
import { initSidebar } from './modules/sidebar.js';
import { initSticky } from './modules/sticky.js';
import { initAccordion } from './modules/accordion.js';

initAccordion();
initCarousel();
initCookies();
initSidebar();
initSticky();