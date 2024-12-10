// ==========================================================================
// js/sidebar.js
// ==========================================================================

const $content = document.querySelector('.content');

export function initSidebar() {
    document.body.addEventListener('click', (event) => {
        if (event.target.closest('.header__hamburger')) toggleSidebar();
    });
}

function toggleSidebar() {
    $content.classList.toggle('sidebar-active');

    const $stickyHeader = document.querySelector('.sticky');
    if ($stickyHeader) $stickyHeader.classList.toggle('sidebar-active');

    const $hamburgers = document.querySelectorAll('.header__hamburger');
    $hamburgers.forEach(hamburger => hamburger.classList.toggle('active'));
}