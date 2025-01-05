// ==========================================================================
// modules/accordion.js
// ==========================================================================

const $contactAccordionWrapper = document.querySelector('.contact__accordion-wrapper');
const $contactAccordionPanel = document.querySelector('.contact__accordion-panel');

export function initAccordion() {
    $contactAccordionWrapper.addEventListener('click', togglePanel);
}

// Show or hide panel by setting max height.
function togglePanel() {
    if ($contactAccordionPanel.style.maxHeight) {
        $contactAccordionPanel.style.maxHeight = null;
      } else {
        $contactAccordionPanel.style.maxHeight = $contactAccordionPanel.scrollHeight + "px";
      }
}