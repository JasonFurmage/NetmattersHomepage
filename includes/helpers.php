<?php
// ==========================================================================
// includes/helper.php
// ==========================================================================

// Handle errors.
function handleError($exception) {

    // Display error message in browser in development.
    if ((isset($_ENV['APP_ENV'])) && $_ENV['APP_ENV']  === 'dev') {
        echo "<strong>Error:</strong> " . $exception->getMessage() . "<br>";
        echo "<strong>File:</strong> " . $exception->getFile() . "<br>";
        echo "<strong>Line:</strong> " . $exception->getLine() . "<br>";
        echo "<strong>Stack Trace:</strong><pre>" . $exception->getTraceAsString() . "</pre>";
    }

    // Log error.
    error_log("Error occurred: " . $exception->getMessage() . " in " . $exception->getFile() . " on line " . $exception->getLine());
    error_log("Stack trace: " . $exception->getTraceAsString());
}

?>