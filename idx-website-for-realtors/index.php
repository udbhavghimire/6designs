<?php
$base_url = (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) ? '/6designs/' : '/';

require_once(__DIR__ . '/../config/cities.php');

// Get city from URL parameter
$city_slug = $_GET['city'] ?? '';



$city = $cities[$city_slug];
include_once(__DIR__ . '/city-template.php');