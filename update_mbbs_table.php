<?php

$dir = 'c:\xampp\htdocs\global';
$files = glob($dir . '/study-mbbs-in-*.php');

$data = [
    'bangladesh' => ['tuition' => 'USD 35,000 - 45,000 (Total Program)', 'hostel' => 'USD 100 - 150 / month', 'mess' => 'USD 50 - 100 / month'],
    'caribbean-islands' => ['tuition' => 'USD 45,000 - 70,000 (Total Program)', 'hostel' => 'USD 400 - 600 / month', 'mess' => 'USD 200 - 300 / month'],
    'georgia' => ['tuition' => 'USD 4,000 - 8,000 / year', 'hostel' => 'USD 150 - 250 / month', 'mess' => 'USD 100 - 150 / month'],
    'kazakhstan' => ['tuition' => 'USD 3,500 - 6,000 / year', 'hostel' => 'USD 100 - 150 / month', 'mess' => 'USD 80 - 120 / month'],
    'kyrgyzstan' => ['tuition' => 'USD 3,000 - 5,000 / year', 'hostel' => 'USD 80 - 120 / month', 'mess' => 'USD 70 - 100 / month'],
    'latvia' => ['tuition' => 'EUR 8,000 - 12,000 / year', 'hostel' => 'EUR 200 - 300 / month', 'mess' => 'EUR 150 - 250 / month'],
    'malaysia' => ['tuition' => 'USD 15,000 - 25,000 / year', 'hostel' => 'USD 200 - 300 / month', 'mess' => 'USD 150 - 250 / month'],
    'poland' => ['tuition' => 'EUR 10,000 - 15,000 / year', 'hostel' => 'EUR 250 - 400 / month', 'mess' => 'EUR 150 - 250 / month'],
    'russia' => ['tuition' => 'USD 4,000 - 7,000 / year', 'hostel' => 'USD 100 - 200 / month', 'mess' => 'USD 100 - 150 / month'],
    'tajikistan' => ['tuition' => 'USD 3,500 - 5,000 / year', 'hostel' => 'USD 80 - 150 / month', 'mess' => 'USD 70 - 120 / month'],
    'uzbekistan' => ['tuition' => 'USD 3,000 - 5,000 / year', 'hostel' => 'USD 80 - 150 / month', 'mess' => 'USD 70 - 120 / month']
];

foreach ($files as $file) {
    $filename = basename($file, '.php');
    $country = '';
    
    if (preg_match('/study-mbbs-in-(.+)/', $filename, $matches)) {
        $country = $matches[1];
    }

    if (!$country || !isset($data[$country])) {
        echo "Skipping $filename\n";
        continue;
    }

    $c = $data[$country];
    $content = file_get_contents($file);

    $new_tbody = "
                <tbody>
                  <tr>
                    <td class=\"py-3 fw-bold\">Tuition Fee</td>
                    <td class=\"py-3 text-muted\">{$c['tuition']}</td>
                  </tr>
                  <tr>
                    <td class=\"py-3 fw-bold\">Hostel Charges</td>
                    <td class=\"py-3 text-muted\">{$c['hostel']}</td>
                  </tr>
                  <tr>
                    <td class=\"py-3 fw-bold\">Mess / Food</td>
                    <td class=\"py-3 text-muted\">{$c['mess']}</td>
                  </tr>
                </tbody>
";

    // Regex to replace the specific tbody following the custom-table
    $content = preg_replace('/<tbody>[\s\S]*?Varies by University[\s\S]*?<\/tbody>/', $new_tbody, $content);
    
    file_put_contents($file, $content);
    echo "Updated table in $filename\n";
}
echo "Done.\n";
