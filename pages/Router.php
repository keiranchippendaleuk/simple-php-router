<?php
// Disable displaying PHP errors and notices to the user
error_reporting(0);

// Retrieve the page URL and sanitize it
$pageURL = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_URL);
$pageLink = pathinfo($pageURL, PATHINFO_FILENAME);

// Check if the page URL contains query parameters and sanitize them
$params = array();
if (strpos($pageURL, '?') !== false) {
    $query = parse_url($pageURL, PHP_URL_QUERY);
    parse_str($query, $params);

    foreach ($params as &$value) {
        $value = filter_var($value, FILTER_SANITIZE_STRING);
    }
}

// Check if the requested page exists and is a PHP file
$pageFile = realpath("{$pageLink}.php");
if ($pageFile !== false && is_file($pageFile) && strtolower(pathinfo($pageFile, PATHINFO_EXTENSION)) === 'php') {
    // Load the requested page
    require $pageFile;
} else {
    // Log the request and display an error message to the user
    error_log("Invalid page request: {$_SERVER['REQUEST_URI']}");
    http_response_code(404);
    echo "Page not found";
}
?>
