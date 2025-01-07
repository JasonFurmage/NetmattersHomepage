<?php
// ==========================================================================
// config/config.php
// ==========================================================================

$env = $_ENV['APP_ENV'];

return [
    // Get database credentials.
    'database' => [
        'host' => $_ENV['DB_HOST'],
        'name' => $_ENV['DB_NAME'],
        'user' => $_ENV['DB_USER'],
        'pass' => $_ENV['DB_PASS'],
        'options'  => [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,             // Throw exceptions on errors.
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,                   // Fetch data as associative arrays.
            PDO::ATTR_EMULATE_PREPARES   => false,                              // Use real prepared statements.
        ]
    ],

    'error' => [
        'error_reporting'   => $env == 'dev' ? E_ALL : E_ERROR | E_WARNING | E_PARSE,   // Sets the level of errors to report.
        'display_errors'    => $env == 'dev' ? 1 : 0,                                   // Determines if errors should be shown in browser.
        'html_errors'       => $env == 'dev' ? 1 : 0,                                   // Enables/disables HTML formatting for error messages in browser.
        'track_errors'      => $env == 'dev' ? 1 : 0,                                   // Tracks last error message in $php_errormsg variable.
        'log_errors'        => $env == 'dev' ? 1 : 1,                                   // Enables error logging to a file.
        'error_log'         => '../logs/error.log',                                     // Specifies file where errors are logged.
    ]
];

?>