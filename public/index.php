<?php
// ==========================================================================
// public/index.php
// ==========================================================================

// Load dependencies.
require_once '../config/bootstrap.php';
require_once '../includes/connection.php';

// Define variables.
$pageTitle = 'Full Service Digital Agency | Cambridgeshire & Norfolk | Netmatters';
$dataPage = 'home';

// Include components.
include '../includes/components/header.php';
include '../templates/home.php';
include '../includes/components/footer.php';

?>