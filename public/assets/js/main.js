// ==========================================================================
// js/main.js
// ==========================================================================

const page = document.body.dataset.page; // Get page name.

// Import modules specific to home page.
if (page === "home") {
    import("./modules/carousel.js").then(({ initCarousel }) => { initCarousel(); });
}

// Import modules specific to contact-us page.
if (page === "contact-us") {
    import("./modules/accordion.js").then(({ initAccordion }) => { initAccordion(); });
    import("./modules/validation.js").then(({ initValidation }) => { initValidation(); });
}

// Import shared modules.
if (page === "home" || page === "contact-us") {
    import("./modules/cookies.js").then(({ initCookies }) => { initCookies(); });
    import("./modules/sidebar.js").then(({ initSidebar }) => { initSidebar(); });
    import("./modules/sticky.js").then(({ initSticky }) => { initSticky(); });
}