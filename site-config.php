<?php

$host = $_SERVER['HTTP_HOST'];
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";

if (strpos($host, 'railway.app') !== false) {
    define('BASE_URL', 'https://global-ties-production.up.railway.app/');
} else {
    define('BASE_URL', $protocol . '://' . $host . '/global/');
}