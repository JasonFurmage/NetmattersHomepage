// ==========================================================================
// modules/cookies.js
// ==========================================================================

const $cookiesOverlay = document.querySelector('.cookies__overlay');
const $cookiesConsentBtn = document.querySelector('.cookies__consent-btn');
const $cookiesBtns = document.querySelectorAll('.cookies__btn');

export function initCookies() {
    $cookiesConsentBtn.addEventListener('click', () => showPopup(true));
    $cookiesBtns[0].addEventListener('click', () => showPopup(false)); // Settings
    $cookiesBtns[1].addEventListener('click', setCookiesPreference); // Accept

    const cookiesPreferenceSet = localStorage.getItem("cookiesPreferenceSet");

    // Show popup if cookies preference is not set.
    if (!cookiesPreferenceSet) showPopup(true);
}

// Toggle hidden class to show or hide popup.
function showPopup(show) {
    $cookiesOverlay.classList.toggle('hidden', !show);
}

// Save cookies preference to local storage and hide popup.
function setCookiesPreference() {
    localStorage.setItem('cookiesPreferenceSet', 'true');
    showPopup(false);
}