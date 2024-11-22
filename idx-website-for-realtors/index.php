<?php
$base_url = (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) ? '/6designs/' : '/';
?>
<?php
require_once(__DIR__ . '/../config/cities.php');

// Get city from URL parameter
$city_slug = $_GET['city'] ?? '';

// Check if city exists in config
if (!isset($cities[$city_slug])) {
    header('Location: /6designs/404.php');
    exit;
}

$city = $cities[$city_slug];
include_once(__DIR__ . '/city-template.php');