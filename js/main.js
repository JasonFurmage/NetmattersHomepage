// ==========================================================================
// js/main.js
// ==========================================================================

const page = document.body.dataset.page;

if (page === "home") {
    import("./modules/carousel.js").then(({ initCarousel }) => { initCarousel(); });
}

if (page === "contact-us") {
    import("./modules/accordion.js").then(({ initAccordion }) => { initAccordion(); });
}

if (page === "home" || page === "contact-us") {
    import("./modules/cookies.js").then(({ initCookies }) => { initCookies(); });
    import("./modules/sidebar.js").then(({ initSidebar }) => { initSidebar(); });
    import("./modules/sticky.js").then(({ initSticky }) => { initSticky(); });
}