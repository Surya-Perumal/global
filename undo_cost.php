<?php
$directory = __DIR__;
$files = scandir($directory);
$fixed_count = 0;

foreach ($files as $file) {
    if ((str_starts_with($file, 'study_in_') || str_starts_with($file, 'study-in-') || str_starts_with($file, 'study-mbbs-in-')) && str_ends_with($file, '.php')) {
        
        if (strtolower($file) === 'study_in_uk.php') {
            continue; // Keep the UK costs table on the UK page!
        }

        $filepath = $directory . DIRECTORY_SEPARATOR . $file;
        $content = file_get_contents($filepath);

        // Remove the incorrectly added UK tables block
        $pattern = '/\s*<!-- Cost of Study Section -->.*?<!-- Cost of Living Section -->.*?<\/section>\s*/s';
        
        $new_content = preg_replace($pattern, "\n\n", $content);

        if ($new_content !== null && $new_content !== $content) {
            file_put_contents($filepath, $new_content);
            echo "Removed UK cost tables from $file\n";
            $fixed_count++;
        }
    }
}

echo "Total files fixed: $fixed_count\n";
