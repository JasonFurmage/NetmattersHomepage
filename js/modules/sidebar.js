// ==========================================================================
// js/sidebar.js
// ==========================================================================

const $content = document.querySelector('.content');
const $sidebar = document.querySelector('.sidebar');
let isActive = false;

export function initSidebar() {
    document.body.addEventListener('click', (event) => {
        if (isActive) {
            if (event.target !== $sidebar) toggleSidebar(); // Hide sidebar when content is clicked if sidebar is active.
        } else {
            if (event.target.closest('.header__hamburger')) toggleSidebar(); // Show sidebar when hamburger is clicked.
        }
    });
}

function toggleSidebar() {
    isActive = !isActive;

    // Disable scrolling on content.
    document.body.classList.toggle('overflow-hidden');

    // Shift content to the left to reveal sidebar.
    $content.classList.toggle('sidebar-active');

    // Shift sticky header to the left to reveal sidebar.
    const $stickyHeader = document.querySelector('.sticky');
    if ($stickyHeader) $stickyHeader.classList.toggle('sidebar-active');

    // Animate hamburger buttons when clicked.
    const $hamburgers = document.querySelectorAll('.header__hamburger');
    $hamburgers.forEach(hamburger => hamburger.classList.toggle('active'));
}