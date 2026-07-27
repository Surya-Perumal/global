<?php

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$path = str_replace("/global", "", $path);

switch ($path) {

    case "/":
        require "home.php";   // or your home page content
        break;

    case "/services":
        require "service.php";
        break;

    case "/about":
        require "about.php";
        break;

    case "/contact":
        require "contact.php";
        break;

    default:
        http_response_code(404);
        echo "404 Not Found";
}