<?php
// ==========================================================================
// config/bootstrap.php
// ==========================================================================

// Load composer autoloader.
require_once '../vendor/autoload.php';

// Load env variables.
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable("../", ['.env']);
$dotenv->load();

// Load config settings
$config = require_once __DIR__ . '/config.php';

?>