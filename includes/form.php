<?php
// ==========================================================================
// includes/form.php
// ==========================================================================

// Check if request method is post.
$isPost = ($_SERVER['REQUEST_METHOD'] == 'POST');

// Get and sanitize form data.
$name = initializeField('name');
$company = initializeField('company');
$email = initializeField('email');
$telephone = initializeField('telephone');
$message = initializeField('message');
$marketing = $_POST['marketing'] ?? 'off';

// Process form submission.
if ($isPost) {

    // Check if form data is valid and return any errors.
    $errors = validateForm($name, $email, $telephone, $message);

    // Save form to database if no errors are found.
    if (empty($errors)) {
        if (saveToDatabase($pdo, $name, $company, $email, $telephone, $message, $marketing)) {
            $name = $company = $email = $telephone = $message = $marketing = '';
        } else {
            $errors[] = 'There was an error submitting your message.';
        }
    }
}

// Remove white space and default to empty if no post.
function initializeField($fieldName) {
    return trim($_POST[$fieldName] ?? '');
}

// Check if form data is valid and return any errors.
function validateForm($name, $email, $telephone, $message) {
    $errors = [];

    if (empty($email)) { $errors[] = 'The email field is required.'; } 
    elseif (!isValidEmail($email)) { $errors[] = 'Please enter a valid email address.'; }
    if (empty($message)) { $errors[] = 'The message field is required.'; }
    if (empty($name)) { $errors[] = 'The name field is required.'; }
    if (empty($telephone)) { $errors[] = 'The telephone field is required.'; } 
    elseif (!isValidTelephone($telephone)) { $errors[] = 'The telephone format is incorrect.'; }
    
    return $errors;
}

// Check if email address is valid.
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// Check if telephone number is valid.
function isValidTelephone($telephone) {
    $regex = '/((?:\+|00)[17](?: |-)?|(?:\+|00)[1-9]\d{0,2}(?: |-)?|(?:\+|00)1-\d{3}(?: |-)?)?(0\d|([0-9]{3})|[1-9]{0,3})(?:((?: |-)[0-9]{2}){4}|((?:[0-9]{2}){4})|((?: |-)[0-9]{3}(?: |-)[0-9]{4})|([0-9]{7}))/';
    return preg_match($regex, $telephone);
}

// Attempt to save form data to database.
function saveToDatabase($pdo, $name, $company, $email, $telephone, $message, $marketing) {
    try {

        $stmt = $pdo->prepare('
            INSERT INTO enquiries (name, company, email, telephone, message, marketing)
            VALUES (:name, :company, :email, :telephone, :message, :marketing)
        ');

        $params = [
            ':name' => $name,
            ':company' => $company,
            ':email' => $email,
            ':telephone' => $telephone,
            ':message' => $message,
            ':marketing' => $marketing
        ];

        return $stmt->execute($params);

    } catch (PDOException $e) {
        handleError($exception);
        return false;
    }
}

// Insert form status into HTML.
function insertFormStatus($errors) {
    
    // Show succcss message if there are no errors.
    if (empty($errors)) {
        echo generateFormStatusHTML('Your enquiry has been sent.', 'form__status--success');
        return;
    }

    // Loop through errrors and generate HTML.
    foreach ($errors as $error) {
        echo generateFormStatusHTML($error, 'form__status--error');
    }
}

// Generate form status HTML and set modifier class for color scheme.
function generateFormStatusHTML($error, $class) {
    return '<div class="form__status ' . $class . '">' . $error . '<button type="button" class="form__status-btn">x</button></div>';
}

?>