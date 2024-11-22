<?php
$base_url = (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) ? '/6designs/' : '/';

require_once(__DIR__ . '/../config/cities.php');

// Get city from URL
$city_slug = isset($_GET['city']) ? strtolower(trim($_GET['city'])) : '';

// Special case for Toronto's direct folder
if (empty($city_slug)) {
    $request_uri = $_SERVER['REQUEST_URI'];
    if (strpos($request_uri, 'toronto-idx-website-for-realtors') !== false) {
        $city_slug = 'toronto';
    }
}

// Debug logging
error_log('Requested URI: ' . $_SERVER['REQUEST_URI']);
error_log('City slug: ' . $city_slug);

// Validate city
if (empty($city_slug) || !isset($cities[$city_slug])) {
    error_log('Invalid city: ' . $city_slug);
    header("HTTP/1.0 404 Not Found");
    include(__DIR__ . '/../404.php');
    exit;
}

$city = $cities[$city_slug];
include_once(__DIR__ . '/city-template.php');