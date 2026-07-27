<?php
$dir = 'c:\xampp\htdocs\global';
$files = glob($dir . '/study-mbbs-in-*.php');

$oldText1 = "Planning your finances is an important step. Here is a general breakdown of the fee structure including tuition, hostel, and mess charges.";
$newText1 = "Financial planning is a crucial part of your medical journey. Below is a comprehensive overview of the expected fee structure, covering your academic and accommodation expenses to help you budget effectively.";

$oldText2 = "The average cost of living for international students is highly affordable. It typically covers accommodation, food, local transportation, and basic utilities, ensuring a comfortable stay while pursuing your MBBS degree.";
$newText2 = "International students will find the cost of living surprisingly budget-friendly. Everyday expenses—including housing, nutritious meals, local transit, and utilities—are highly manageable, allowing you to focus entirely on your medical studies in a comfortable environment.";

foreach ($files as $file) {
    $content = file_get_contents($file);
    
    // Normalize newlines in case they got split up
    $old1_regex = preg_quote("Planning your finances is an important step. Here is a general breakdown of the fee structure including tuition, hostel, and mess charges.", '/');
    $old1_regex = str_replace('\ ', '\s+', $old1_regex); // handle any whitespace/newline breaks

    $old2_regex = preg_quote("The average cost of living for international students is highly affordable. It typically covers accommodation, food, local transportation, and basic utilities, ensuring a comfortable stay while pursuing your MBBS degree.", '/');
    $old2_regex = str_replace('\ ', '\s+', $old2_regex); // handle any whitespace/newline breaks

    $content = preg_replace('/' . $old1_regex . '/', $newText1, $content);
    $content = preg_replace('/' . $old2_regex . '/', $newText2, $content);
    
    file_put_contents($file, $content);
    echo "Updated text in " . basename($file) . "\n";
}
echo "Done.\n";
