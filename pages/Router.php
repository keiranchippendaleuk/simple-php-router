<?php
// Disable displaying PHP errors and notices to the user
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', '/path/to/error_log');

// Retrieve the page URL and sanitize it
$pageURL = isset($_GET['page']) ? $_GET['page'] : null;
$pageLink = basename(parse_url($pageURL, PHP_URL_PATH));

// Check if the page URL contains query parameters and sanitize them
if (strpos($pageURL, '?') !== false) {
    $pageParams = parse_url($pageURL, PHP_URL_QUERY);
    $params = array();
    parse_str($pageParams, $params);

    foreach ($params as $key => $value) {
        $params[$key] = filter_var($value, FILTER_SANITIZE_STRING);
    }
}

// Check if the requested page exists and is a PHP file
$pageFile = "{$pageLink}.php";
if (file_exists($pageFile) && is_file($pageFile) && pathinfo($pageFile, PATHINFO_EXTENSION) == 'php') {
    // Load the requested page
    require_once($pageFile);
} else {
    // Log the request and display an error message to the user
    error_log("Invalid page request: " . $_SERVER['REQUEST_URI']);
    http_response_code(404);
    echo "Page not found";
}
?>
