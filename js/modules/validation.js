// ==========================================================================
// modules/validation.js
// ==========================================================================

const $form = document.getElementById('form');
const $nameTextField = document.getElementById('name');
const $emailTextField = document.getElementById('email');
const $telephoneTextField = document.getElementById('telephone');
const $messageTextArea = document.getElementById('message');

export function initValidation() {
    $form.addEventListener('submit', submitForm);
    $nameTextField.addEventListener('input', () => isValid($nameTextField));
    $emailTextField.addEventListener('input', () => isValid($emailTextField, true));
    $telephoneTextField.addEventListener('input', () => isValid($telephoneTextField));
    $messageTextArea.addEventListener('input', () => isValid($messageTextArea));
}

function submitForm(event) {
    event.preventDefault(); // Prevent submission before checks.

    let valid = true;

    // Check if form data is valid.
    if (!isValid($nameTextField)) valid = false;
    if (!isValid($emailTextField, true)) valid = false;
    if (!isValid($telephoneTextField)) valid = false;
    if (!isValid($messageTextArea)) valid = false;

    if (valid) $form.submit(); // Submit if all checks are passed.
}

// Check if data in text field is valid.
function isValid($textField, isEmail = false) {
    const valid = isEmail ? isValidEmail($textField.value) : !isEmptyString($textField.value);
    toggleHighlight($textField, valid);
    return valid;
}

// Check for empty string.
function isEmptyString(string) {
    return string.trim() === "";
}

// Check if email is valid.
function isValidEmail(email) {
    const emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return emailRegex.test(email);
}

// Toggle error class to highlight text field.
function toggleHighlight($textField, valid) {
    $textField.classList.toggle('textfield--error', !valid);
}