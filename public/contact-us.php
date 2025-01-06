<?php
// ==========================================================================
// public/contact-us.php
// ==========================================================================

// Load dependencies.
require_once '../config/bootstrap.php';
require_once '../includes/connection.php';
require_once '../includes/form.php';

// Define variables.
$pageTitle = 'Contact Us | Netmatters';
$dataPage = 'contact-us';

// Include components.
include '../includes/components/header.php';
include '../templates/contact-us.php';
include '../includes/components/footer.php';

?>