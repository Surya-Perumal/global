<?php
$dir = 'c:\xampp\htdocs\global';
$files = glob($dir . '/study-mbbs-in-*.php');

foreach ($files as $file) {
    $content = file_get_contents($file);

    // Remove the cost-study-section
    $content = preg_replace('/<!-- Cost of Study Section -->[\s\S]*?<section class="cost-study-section"[\s\S]*?<\/section>/', '', $content);
    
    // In case the comment is missing:
    $content = preg_replace('/<section class="cost-study-section"[\s\S]*?<\/section>/', '', $content);

    // Remove the cost-living-section
    $content = preg_replace('/<!-- Cost of Living Section -->[\s\S]*?<section class="cost-living-section"[\s\S]*?<\/section>/', '', $content);

    // In case the comment is missing:
    $content = preg_replace('/<section class="cost-living-section"[\s\S]*?<\/section>/', '', $content);

    file_put_contents($file, $content);
    echo "Removed sections from " . basename($file) . "\n";
}
echo "Done.\n";
