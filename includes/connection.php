<?php
// ==========================================================================
// database/connection.php
// ==========================================================================

$dbConfig = $config['database']; // Get database config.

// Get database credentials.
$host = $dbConfig['host'];
$name = $dbConfig['name'];
$user = $dbConfig['user'];
$pass = $dbConfig['pass'];
$options = $dbConfig['options'];

// Attempt to connect to database.
try {
    $pdo = new PDO("mysql:host=$host;dbname=$name", $user, $pass, $options);
} catch (PDOException $exception) {
    handleError($exception);
    die("Database connection failed. Please try again later.");
}

?>