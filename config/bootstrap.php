<?php
// ==========================================================================
// config/bootstrap.php
// ==========================================================================

// Load composer autoloader.
require_once '../vendor/autoload.php';
require_once '../includes/helper.php';

use Dotenv\Dotenv;

// Attempt to load env variables.
try {
    $dotenv = Dotenv::createImmutable("../", ['.env.dev']);
    $dotenv->load();
} catch (Exception $exception) {
    handleError($exception);
    die("An error has occured. Please try again later.");
}

// Load config settings
$config = require_once __DIR__ . '/config.php';

// Get error config.
$errorConfig = $config['error'];

// Set error display and log settings.
error_reporting($errorConfig['error_reporting']);
ini_set('display_errors', $errorConfig['display_errors']);
ini_set('log_errors', $errorConfig['log_errors']);
ini_set('error_log', $errorConfig['error_log']);
ini_set('html_errors', $errorConfig['html_errors']);
ini_set('track_errors', $errorConfig['track_errors']);

?>