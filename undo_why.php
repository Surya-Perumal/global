<?php
$directory = __DIR__;
$files = scandir($directory);
$fixed_count = 0;

foreach ($files as $file) {
    if ((str_starts_with($file, 'study_in_') || str_starts_with($file, 'study-in-') || str_starts_with($file, 'study-mbbs-in-')) && str_ends_with($file, '.php')) {
        
        if (str_contains(strtolower($file), 'canada') || str_contains(strtolower($file), 'newzealand')) {
            continue;
        }

        $filepath = $directory . DIRECTORY_SEPARATOR . $file;
        $content = file_get_contents($filepath);

        $country = str_replace(['study_in_', 'study-in-', 'study-mbbs-in-', '.php'], '', $file);
        $country = ucwords(str_replace('-', ' ', $country));

        $pattern = '/<h2 class="section-title">\s*Why Choose The Global Ties\?\s*<\/h2>\s*<p class="hero-description">.*?<\/p>/s';
        
        $country_upper = strtoupper($country);
        $replacement = <<<HTML
<span class="gold-label">World-Class Education | the global ties</span>

                    <h2 class="section-title">
                        Why Study in
                        <span class="accent-text">$country_upper</span>
                    </h2>

                    <p class="hero-description">
                        $country has one of the most respected education systems in the world. Every year, thousands of students from other countries pursue their educational goals in $country, drawn by its welcoming culture and safe environment.
                        <br><br>
                        With excellent opportunities to gain valuable work experience during and after your studies, the advantages of studying in $country are immense. There are also promising pathways for international students who wish to build a career after graduating from post-secondary programs in $country.
                    </p>
HTML;

        $new_content = preg_replace($pattern, $replacement, $content);

        if ($new_content !== null && $new_content !== $content) {
            file_put_contents($filepath, $new_content);
            echo "Fixed $file\n";
            $fixed_count++;
        }
    }
}

echo "Total files fixed: $fixed_count\n";
