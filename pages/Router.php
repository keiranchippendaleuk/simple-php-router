<?php
$pageURL = isset($_GET['page']) ? $_GET['page'] : null;
$pageLink = basename(explode('?', $pageURL)[0]);

if (strpos($pageURL, '?') !== false) {
    $pageParams = explode('?', $pageURL)[1];
    $params = array();
    parse_str($pageParams, $params);

    foreach ($params as $key => $value) {
        $params[$key] = filter_var($value, FILTER_SANITIZE_STRING);
    }
}

$pageFile = "{$pageLink}.php";

if (file_exists($pageFile)) {
    require_once($pageFile);
} else {
    echo "Page not found";
}
?>