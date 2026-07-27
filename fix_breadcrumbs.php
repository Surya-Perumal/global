<?php
$files_and_countries = [
    'study_in_canada.php' => 'Study in Canada',
    'study_in_australia.php' => 'Study in Australia',
    'study_in_uk.php' => 'Study in UK',
    'study_in_usa.php' => 'Study in USA',
    'study_in_germany.php' => 'Study in Germany',
    'study_in_ireland.php' => 'Study in Ireland',
    'study_in_newzealand.php' => 'Study in New Zealand',
    'study_in_singapore.php' => 'Study in Singapore',
];

$base_dir = 'c:\xampp\htdocs\global';

foreach ($files_and_countries as $filename => $country_text) {
    $filepath = $base_dir . DIRECTORY_SEPARATOR . $filename;
    $content = file_get_contents($filepath);
    
    // Pattern to match <div class="floating-breadcrumb-card">...</div>
    $pattern = '/(<div class="floating-breadcrumb-card">.*?<nav class="breadcrumb-nav"[^>]*>)(.*?)(<\/nav>\s*<\/div>)/s';
    
    $replacement = '$1
                    <a href="index"><i class="fas fa-home"></i></a>
                    <span class="separator"><i class="fas fa-chevron-right"></i></span>
                    <a href="index" style="display: flex; align-items: center; gap: 5px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        Home
                    </a>
                    <span class="separator"><i class="fas fa-chevron-right"></i></span>
                    <span class="current-page" style="display: flex; align-items: center; gap: 5px; color: var(--accent-color, #b8860b); font-weight: 500;">
                        ' . $country_text . '
                    </span>
                $3';
    
    $new_content = preg_replace($pattern, $replacement, $content);
    
    file_put_contents($filepath, $new_content);
    echo "Updated $filename\n";
}
?>

