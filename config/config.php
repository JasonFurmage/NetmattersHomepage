<?php
// ==========================================================================
// config/config.php
// ==========================================================================

return [
    // Get db credentials or use defaults for local testing.
    'database' => [
        'host' => $_ENV['DB_HOST'] ?: 'localhost',
        'name' => $_ENV['DB_NAME'] ?: 'netmattershomepage',
        'user' => $_ENV['DB_USER'] ?: 'root',
        'pass' => $_ENV['DB_PASS'] ?: '',
        'options'  => [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,   // Throw exceptions on errors.
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,         // Fetch data as associative arrays.
            PDO::ATTR_EMULATE_PREPARES   => false,                    // Use real prepared statements.
        ]
    ],
];

?>