<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$request_uri = $_SERVER['REQUEST_URI'];
$base_url = (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) ? '/6designs/' : '/';

// Remove base URL from request
$path = str_replace($base_url, '', $request_uri);

// Check if it's a city-idx-website-for-realtors request
if (preg_match('/^([^\/]+)-idx-website-for-realtors\/?$/', $path, $matches)) {
    $_GET['city'] = $matches[1];
    require_once(__DIR__ . '/idx-website-for-realtors/index.php');
} else {
    // Handle regular pages
    require_once(__DIR__ . '/index.php');
}
