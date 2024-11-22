<?php
$base_url = (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) ? '/6designs/' : '/';

require_once(__DIR__ . '/../config/cities.php');

// Get city from URL parameter and clean it
$city_slug = isset($_GET['city']) ? strtolower(trim($_GET['city'])) : '';

// Check if city exists in config
if (!isset($cities[$city_slug])) {
    header("HTTP/1.0 404 Not Found");
    header('Location: ' . $base_url . '404.php');
    exit;
}

$city = $cities[$city_slug];
include_once(__DIR__ . '/city-template.php');