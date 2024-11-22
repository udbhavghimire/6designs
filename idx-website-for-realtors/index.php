<?php
$base_url = (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) ? '/6designs/' : '/';

require_once(__DIR__ . '/../config/cities.php');

// Get city from URL parameter and clean it
$city_slug = isset($_GET['city']) ? strtolower(trim($_GET['city'])) : '';

// Debug information (remove in production)
error_log("Requested city: " . $city_slug);
error_log("Available cities: " . print_r($cities, true));

// Check if city exists in config
if (empty($city_slug) || !isset($cities[$city_slug])) {
    error_log("City not found: " . $city_slug); // Debug log
    header("HTTP/1.0 404 Not Found");
    include(__DIR__ . '/../404.php');
    exit;
}

$city = $cities[$city_slug];
include_once(__DIR__ . '/city-template.php');