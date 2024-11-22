<?php
$base_url = (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) ? '/6designs/' : '/';

require_once(__DIR__ . '/../../config/cities.php');

// Get the requested path
$request_uri = $_SERVER['REQUEST_URI'];
$path_parts = explode('/', trim($request_uri, '/'));

// Extract city name from URL
$city_slug = '';
foreach ($path_parts as $part) {
    if (strpos($part, '-idx-website-for-realtors') !== false) {
        $city_slug = str_replace('-idx-website-for-realtors', '', $part);
        break;
    }
}

// Debug information
error_log("Request URI: " . $request_uri);
error_log("City slug: " . $city_slug);

// Check if city exists and is not Toronto (which has its own directory)
if ($city_slug === 'toronto') {
    header("Location: " . $base_url . "toronto-idx-website-for-realtors/");
    exit;
}

if (empty($city_slug) || !isset($cities[$city_slug])) {
    error_log("City not found: " . $city_slug);
    header("HTTP/1.0 404 Not Found");
    include(__DIR__ . '/../../404.php');
    exit;
}

$city = $cities[$city_slug];
include_once(__DIR__ . '/../city-template.php');