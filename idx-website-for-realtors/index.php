<?php
$base_url = (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) ? '/6designs/' : '/';

require_once(__DIR__ . '/../config/cities.php');

// Get city from URL parameter and clean it
$city_slug = isset($_GET['city']) ? strtolower(trim($_GET['city'])) : '';

// Special handling for Toronto's direct folder
if (empty($city_slug) && strpos($_SERVER['REQUEST_URI'], 'toronto-idx-website-for-realtors') !== false) {
    $city_slug = 'toronto';
}

// Debug information
error_log("Request URI: " . $_SERVER['REQUEST_URI']);
error_log("City slug: " . $city_slug);
error_log("Available cities: " . print_r(array_keys($cities), true));

// Check if city exists in config
if (empty($city_slug) || !isset($cities[$city_slug])) {
    error_log("City not found: " . $city_slug);
    header("HTTP/1.0 404 Not Found");
    include(__DIR__ . '/../404.php');
    exit;
}

$city = $cities[$city_slug];
include_once(__DIR__ . '/city-template.php');