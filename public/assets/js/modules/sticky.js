// ==========================================================================
// modules/sticky.js
// ==========================================================================

const header = document.getElementById('header');
const stickyHeader = header.cloneNode(true);
let timer = null;
let animating = false;
let lastScrollTop = 0;

export function initSticky() {
    window.addEventListener('scroll', () => {
        clearTimeout(timer);

        const scrollTop = window.scrollY; // Get current scroll position.

        // Check if adding or removing is already in progress.
        if (!animating) {
            if (scrollTop > lastScrollTop) {
                // Remove header when scrolling down.
                if (stickyHeader.parentNode) delayedAction(() => toggleStickyHeader('slideOutUp', false));

            } else {
                // Add header when scrolling up and below original header.
                if (scrollTop > 209 && !stickyHeader.parentNode) delayedAction(() => toggleStickyHeader('slideInDown', true));
                
                // Merge sticky header and original header when at top of the page.
                else if (scrollTop === 0 && stickyHeader.parentNode) mergeHeaders();
            }
        }

        // Update last scroll position and prevent negative values.
        lastScrollTop = Math.max(scrollTop, 0);
    });
}

// Delay header animation by 100ms.
function delayedAction(action) {
    timer = setTimeout(action, 100);
}

// Remove sticky header without animation.
function mergeHeaders() {
    toggleOriginalHeader(true);
    stickyHeader.remove();
    animating = false;
}

// Add or remove sticky header with animation.
function toggleStickyHeader(animationName, show) {
    animating = true;
    stickyHeader.className = `sticky animate__animated animate__${animationName}`;
    if (show) document.body.appendChild(stickyHeader);
    toggleOriginalHeader(!show);

    stickyHeader.addEventListener('animationend', () => {
        if (!show) stickyHeader.remove();
        animating = false;

        // Incase top of page was reached during animation.
        if (lastScrollTop === 0) mergeHeaders();
        
    }, { once: true });
}

// Show or hide original header.
function toggleOriginalHeader(show) {
    show ? header.removeAttribute('style') : header.style.opacity = 0;
}