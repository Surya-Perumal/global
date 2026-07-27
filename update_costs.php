<?php

$dir = 'c:\xampp\htdocs\global';
$files = glob($dir . '/study*in*.php');

$data = [
    'denmark' => ['curr' => 'EUR', 'study_ug' => '6,000 - 16,000 / year', 'study_pg' => '8,000 - 21,000 / year', 'study_mba' => '12,000 - 35,000+', 'study_phd' => 'Fully funded or 5,000+', 'study_med' => '15,000+ / year', 'living_c1' => 'Copenhagen', 'living_c1_c' => '900 - 1,500', 'living_c2' => 'Aarhus / Aalborg', 'living_c2_c' => '800 - 1,200', 'living_c3' => 'Odense', 'living_c3_c' => '700 - 1,100', 'living_c4' => 'Esbjerg', 'living_c4_c' => '700 - 1,000', 'living_c5' => 'Roskilde', 'living_c5_c' => '800 - 1,200'],
    'dubai' => ['curr' => 'AED', 'study_ug' => '37,000 - 70,000 / year', 'study_pg' => '55,000 - 90,000 / year', 'study_mba' => '70,000 - 150,000+', 'study_phd' => '100,000+ / total', 'study_med' => '100,000+ / year', 'living_c1' => 'Dubai', 'living_c1_c' => '3,500 - 5,500', 'living_c2' => 'Abu Dhabi', 'living_c2_c' => '3,000 - 5,000', 'living_c3' => 'Sharjah', 'living_c3_c' => '2,000 - 4,000', 'living_c4' => 'Ajman', 'living_c4_c' => '2,000 - 3,500', 'living_c5' => 'Ras Al Khaimah', 'living_c5_c' => '2,000 - 3,500'],
    'france' => ['curr' => 'EUR', 'study_ug' => '2,770 / year', 'study_pg' => '3,770 / year', 'study_mba' => '15,000 - 45,000+', 'study_phd' => '380 / year', 'study_med' => 'Up to 5,000 / year', 'living_c1' => 'Paris', 'living_c1_c' => '1,200 - 1,800', 'living_c2' => 'Lyon / Marseille', 'living_c2_c' => '800 - 1,200', 'living_c3' => 'Toulouse / Bordeaux', 'living_c3_c' => '800 - 1,100', 'living_c4' => 'Lille', 'living_c4_c' => '700 - 1,000', 'living_c5' => 'Montpellier', 'living_c5_c' => '700 - 1,000'],
    'italy' => ['curr' => 'EUR', 'study_ug' => '900 - 4,000 / year', 'study_pg' => '1,500 - 5,000 / year', 'study_mba' => '10,000 - 30,000+', 'study_phd' => 'Mostly funded or minimal fees', 'study_med' => '1,500 - 5,000 / year', 'living_c1' => 'Milan', 'living_c1_c' => '900 - 1,500', 'living_c2' => 'Rome', 'living_c2_c' => '800 - 1,300', 'living_c3' => 'Bologna / Florence', 'living_c3_c' => '750 - 1,200', 'living_c4' => 'Turin', 'living_c4_c' => '700 - 1,100', 'living_c5' => 'Naples', 'living_c5_c' => '600 - 1,000'],
    'spain' => ['curr' => 'EUR', 'study_ug' => '1,000 - 5,000 / year', 'study_pg' => '1,500 - 8,000 / year', 'study_mba' => '10,000 - 40,000+', 'study_phd' => '200 - 1,000 / year', 'study_med' => '2,000 - 8,000 / year', 'living_c1' => 'Madrid / Barcelona', 'living_c1_c' => '900 - 1,500', 'living_c2' => 'Valencia', 'living_c2_c' => '700 - 1,100', 'living_c3' => 'Seville', 'living_c3_c' => '650 - 1,000', 'living_c4' => 'Granada', 'living_c4_c' => '600 - 900', 'living_c5' => 'Salamanca', 'living_c5_c' => '600 - 900'],
    'sweden' => ['curr' => 'SEK', 'study_ug' => '80,000 - 140,000 / year', 'study_pg' => '90,000 - 160,000 / year', 'study_mba' => '150,000 - 300,000+', 'study_phd' => 'Free / fully funded', 'study_med' => '200,000+ / year', 'living_c1' => 'Stockholm', 'living_c1_c' => '10,000 - 15,000', 'living_c2' => 'Gothenburg / Malmo', 'living_c2_c' => '9,000 - 13,000', 'living_c3' => 'Uppsala / Lund', 'living_c3_c' => '8,500 - 12,000', 'living_c4' => 'Umea', 'living_c4_c' => '8,000 - 11,000', 'living_c5' => 'Linkoping', 'living_c5_c' => '8,000 - 11,000'],
    'switzerland' => ['curr' => 'CHF', 'study_ug' => '1,500 - 4,000 / year', 'study_pg' => '1,500 - 5,000 / year', 'study_mba' => '20,000 - 60,000+', 'study_phd' => '100 - 500 / year', 'study_med' => '2,000 - 6,000 / year', 'living_c1' => 'Zurich / Geneva', 'living_c1_c' => '1,800 - 2,800', 'living_c2' => 'Basel / Bern', 'living_c2_c' => '1,500 - 2,200', 'living_c3' => 'Lausanne', 'living_c3_c' => '1,500 - 2,200', 'living_c4' => 'St. Gallen', 'living_c4_c' => '1,400 - 2,000', 'living_c5' => 'Lucerne', 'living_c5_c' => '1,400 - 2,000'],
    'australia' => ['curr' => 'AUD', 'study_ug' => '20,000 - 45,000 / year', 'study_pg' => '22,000 - 50,000 / year', 'study_mba' => '40,000 - 80,000+', 'study_phd' => '18,000 - 42,000 / year', 'study_med' => '60,000+ / year', 'living_c1' => 'Sydney / Melbourne', 'living_c1_c' => '2,000 - 3,000', 'living_c2' => 'Brisbane / Perth', 'living_c2_c' => '1,600 - 2,500', 'living_c3' => 'Adelaide', 'living_c3_c' => '1,500 - 2,200', 'living_c4' => 'Gold Coast', 'living_c4_c' => '1,500 - 2,200', 'living_c5' => 'Hobart', 'living_c5_c' => '1,400 - 2,000'],
    'canada' => ['curr' => 'CAD', 'study_ug' => '15,000 - 35,000 / year', 'study_pg' => '18,000 - 40,000 / year', 'study_mba' => '30,000 - 70,000+', 'study_phd' => '10,000 - 25,000 / year', 'study_med' => '40,000+ / year', 'living_c1' => 'Toronto / Vancouver', 'living_c1_c' => '1,800 - 2,800', 'living_c2' => 'Montreal', 'living_c2_c' => '1,200 - 1,800', 'living_c3' => 'Calgary / Ottawa', 'living_c3_c' => '1,300 - 2,000', 'living_c4' => 'Edmonton', 'living_c4_c' => '1,200 - 1,700', 'living_c5' => 'Halifax', 'living_c5_c' => '1,100 - 1,600'],
    'germany' => ['curr' => 'EUR', 'study_ug' => 'Free (Public) / 10,000+ (Private)', 'study_pg' => 'Free (Public) / 12,000+ (Private)', 'study_mba' => '15,000 - 40,000+', 'study_phd' => 'Free / fully funded', 'study_med' => 'Free (Public) / 15,000+ (Private)', 'living_c1' => 'Munich', 'living_c1_c' => '1,000 - 1,500', 'living_c2' => 'Frankfurt / Stuttgart', 'living_c2_c' => '900 - 1,300', 'living_c3' => 'Berlin / Hamburg', 'living_c3_c' => '850 - 1,200', 'living_c4' => 'Cologne', 'living_c4_c' => '800 - 1,100', 'living_c5' => 'Leipzig / Dresden', 'living_c5_c' => '700 - 1,000'],
    'ireland' => ['curr' => 'EUR', 'study_ug' => '10,000 - 25,000 / year', 'study_pg' => '12,000 - 30,000 / year', 'study_mba' => '15,000 - 35,000+', 'study_phd' => '10,000 - 20,000 / year', 'study_med' => '45,000+ / year', 'living_c1' => 'Dublin', 'living_c1_c' => '1,500 - 2,200', 'living_c2' => 'Cork', 'living_c2_c' => '1,100 - 1,600', 'living_c3' => 'Galway / Limerick', 'living_c3_c' => '1,000 - 1,500', 'living_c4' => 'Waterford', 'living_c4_c' => '900 - 1,300', 'living_c5' => 'Athlone', 'living_c5_c' => '800 - 1,200'],
    'newzealand' => ['curr' => 'NZD', 'study_ug' => '22,000 - 35,000 / year', 'study_pg' => '26,000 - 40,000 / year', 'study_mba' => '35,000 - 60,000+', 'study_phd' => '6,000 - 10,000 / year', 'study_med' => '50,000+ / year', 'living_c1' => 'Auckland', 'living_c1_c' => '1,600 - 2,500', 'living_c2' => 'Wellington', 'living_c2_c' => '1,500 - 2,200', 'living_c3' => 'Christchurch', 'living_c3_c' => '1,300 - 1,900', 'living_c4' => 'Hamilton', 'living_c4_c' => '1,200 - 1,800', 'living_c5' => 'Dunedin', 'living_c5_c' => '1,100 - 1,700'],
    'singapore' => ['curr' => 'SGD', 'study_ug' => '15,000 - 35,000 / year', 'study_pg' => '20,000 - 45,000 / year', 'study_mba' => '50,000 - 100,000+', 'study_phd' => 'Mostly funded / 20,000', 'study_med' => '50,000+ / year', 'living_c1' => 'Central Region', 'living_c1_c' => '1,800 - 3,000', 'living_c2' => 'East Region', 'living_c2_c' => '1,500 - 2,500', 'living_c3' => 'West Region', 'living_c3_c' => '1,400 - 2,200', 'living_c4' => 'North Region', 'living_c4_c' => '1,300 - 2,000', 'living_c5' => 'North-East Region', 'living_c5_c' => '1,300 - 2,000'],
    'uk' => ['curr' => '£', 'study_ug' => '11,400 - 38,000 / year', 'study_pg' => '9,000 - 30,000 / year', 'study_mba' => '20,000 - 75,000+', 'study_phd' => '18,000 - 40,000 / year', 'study_med' => 'Up to 50,000+ / year', 'living_c1' => 'London', 'living_c1_c' => '1,300 - 1,800', 'living_c2' => 'Edinburgh / Glasgow', 'living_c2_c' => '900 - 1,600', 'living_c3' => 'Manchester / Birmingham', 'living_c3_c' => '900 - 1,200', 'living_c4' => 'Leeds / Sheffield', 'living_c4_c' => '850 - 1,100', 'living_c5' => 'Cardiff / Belfast', 'living_c5_c' => '800 - 1,000'],
    'usa' => ['curr' => 'USD', 'study_ug' => '20,000 - 55,000 / year', 'study_pg' => '25,000 - 60,000 / year', 'study_mba' => '50,000 - 120,000+', 'study_phd' => 'Funded or 30,000+', 'study_med' => '50,000 - 80,000 / year', 'living_c1' => 'New York / SF', 'living_c1_c' => '2,500 - 4,000', 'living_c2' => 'Boston / LA', 'living_c2_c' => '2,000 - 3,500', 'living_c3' => 'Chicago / Seattle', 'living_c3_c' => '1,500 - 2,500', 'living_c4' => 'Texas / Florida', 'living_c4_c' => '1,200 - 2,000', 'living_c5' => 'Midwest', 'living_c5_c' => '1,000 - 1,800'],
    
    // MBBS specific (usually only medicine is relevant, we'll keep the same structure but populate it nicely)
    'bangladesh' => ['curr' => 'USD', 'study_ug' => '35,000 - 45,000 / total', 'study_pg' => 'N/A', 'study_mba' => 'N/A', 'study_phd' => 'N/A', 'study_med' => '35,000 - 45,000 / total', 'living_c1' => 'Dhaka', 'living_c1_c' => '200 - 350', 'living_c2' => 'Chittagong', 'living_c2_c' => '150 - 250', 'living_c3' => 'Rajshahi', 'living_c3_c' => '120 - 200', 'living_c4' => 'Sylhet', 'living_c4_c' => '150 - 250', 'living_c5' => 'Comilla', 'living_c5_c' => '120 - 200'],
    'caribbean-islands' => ['curr' => 'USD', 'study_ug' => '45,000 - 70,000 / total', 'study_pg' => 'N/A', 'study_mba' => 'N/A', 'study_phd' => 'N/A', 'study_med' => '45,000 - 70,000 / total', 'living_c1' => 'Barbados', 'living_c1_c' => '600 - 900', 'living_c2' => 'Grenada', 'living_c2_c' => '500 - 800', 'living_c3' => 'Antigua', 'living_c3_c' => '500 - 800', 'living_c4' => 'St. Lucia', 'living_c4_c' => '450 - 750', 'living_c5' => 'Guyana', 'living_c5_c' => '400 - 600'],
    'georgia' => ['curr' => 'USD', 'study_ug' => '4,000 - 8,000 / year', 'study_pg' => 'N/A', 'study_mba' => 'N/A', 'study_phd' => 'N/A', 'study_med' => '4,000 - 8,000 / year', 'living_c1' => 'Tbilisi', 'living_c1_c' => '300 - 500', 'living_c2' => 'Batumi', 'living_c2_c' => '250 - 400', 'living_c3' => 'Kutaisi', 'living_c3_c' => '200 - 350', 'living_c4' => 'Rustavi', 'living_c4_c' => '200 - 350', 'living_c5' => 'Gori', 'living_c5_c' => '200 - 300'],
    'kazakhstan' => ['curr' => 'USD', 'study_ug' => '3,500 - 6,000 / year', 'study_pg' => 'N/A', 'study_mba' => 'N/A', 'study_phd' => 'N/A', 'study_med' => '3,500 - 6,000 / year', 'living_c1' => 'Almaty', 'living_c1_c' => '250 - 450', 'living_c2' => 'Astana', 'living_c2_c' => '250 - 400', 'living_c3' => 'Shymkent', 'living_c3_c' => '200 - 350', 'living_c4' => 'Karaganda', 'living_c4_c' => '200 - 300', 'living_c5' => 'Aktobe', 'living_c5_c' => '200 - 300'],
    'kyrgyzstan' => ['curr' => 'USD', 'study_ug' => '3,000 - 5,000 / year', 'study_pg' => 'N/A', 'study_mba' => 'N/A', 'study_phd' => 'N/A', 'study_med' => '3,000 - 5,000 / year', 'living_c1' => 'Bishkek', 'living_c1_c' => '150 - 300', 'living_c2' => 'Osh', 'living_c2_c' => '120 - 250', 'living_c3' => 'Jalal-Abad', 'living_c3_c' => '120 - 200', 'living_c4' => 'Karakol', 'living_c4_c' => '100 - 200', 'living_c5' => 'Tokmok', 'living_c5_c' => '100 - 200'],
    'latvia' => ['curr' => 'EUR', 'study_ug' => '8,000 - 12,000 / year', 'study_pg' => 'N/A', 'study_mba' => 'N/A', 'study_phd' => 'N/A', 'study_med' => '8,000 - 12,000 / year', 'living_c1' => 'Riga', 'living_c1_c' => '500 - 800', 'living_c2' => 'Daugavpils', 'living_c2_c' => '400 - 600', 'living_c3' => 'Liepāja', 'living_c3_c' => '400 - 600', 'living_c4' => 'Jelgava', 'living_c4_c' => '350 - 550', 'living_c5' => 'Jūrmala', 'living_c5_c' => '450 - 700'],
    'malaysia' => ['curr' => 'USD', 'study_ug' => '15,000 - 25,000 / year', 'study_pg' => 'N/A', 'study_mba' => 'N/A', 'study_phd' => 'N/A', 'study_med' => '15,000 - 25,000 / year', 'living_c1' => 'Kuala Lumpur', 'living_c1_c' => '400 - 700', 'living_c2' => 'Penang', 'living_c2_c' => '350 - 600', 'living_c3' => 'Johor Bahru', 'living_c3_c' => '300 - 550', 'living_c4' => 'Kuching', 'living_c4_c' => '300 - 500', 'living_c5' => 'Malacca', 'living_c5_c' => '300 - 500'],
    'poland' => ['curr' => 'EUR', 'study_ug' => '10,000 - 15,000 / year', 'study_pg' => 'N/A', 'study_mba' => 'N/A', 'study_phd' => 'N/A', 'study_med' => '10,000 - 15,000 / year', 'living_c1' => 'Warsaw', 'living_c1_c' => '500 - 800', 'living_c2' => 'Krakow', 'living_c2_c' => '450 - 700', 'living_c3' => 'Wroclaw', 'living_c3_c' => '400 - 650', 'living_c4' => 'Poznan', 'living_c4_c' => '400 - 600', 'living_c5' => 'Lodz', 'living_c5_c' => '350 - 550'],
    'russia' => ['curr' => 'USD', 'study_ug' => '4,000 - 7,000 / year', 'study_pg' => 'N/A', 'study_mba' => 'N/A', 'study_phd' => 'N/A', 'study_med' => '4,000 - 7,000 / year', 'living_c1' => 'Moscow', 'living_c1_c' => '400 - 700', 'living_c2' => 'St. Petersburg', 'living_c2_c' => '350 - 600', 'living_c3' => 'Kazan', 'living_c3_c' => '250 - 450', 'living_c4' => 'Novosibirsk', 'living_c4_c' => '250 - 400', 'living_c5' => 'Yekaterinburg', 'living_c5_c' => '250 - 400'],
    'tajikistan' => ['curr' => 'USD', 'study_ug' => '3,500 - 5,000 / year', 'study_pg' => 'N/A', 'study_mba' => 'N/A', 'study_phd' => 'N/A', 'study_med' => '3,500 - 5,000 / year', 'living_c1' => 'Dushanbe', 'living_c1_c' => '150 - 300', 'living_c2' => 'Khujand', 'living_c2_c' => '120 - 250', 'living_c3' => 'Bokhtar', 'living_c3_c' => '100 - 200', 'living_c4' => 'Kulob', 'living_c4_c' => '100 - 200', 'living_c5' => 'Istaravshan', 'living_c5_c' => '100 - 180'],
    'uzbekistan' => ['curr' => 'USD', 'study_ug' => '3,000 - 5,000 / year', 'study_pg' => 'N/A', 'study_mba' => 'N/A', 'study_phd' => 'N/A', 'study_med' => '3,000 - 5,000 / year', 'living_c1' => 'Tashkent', 'living_c1_c' => '200 - 350', 'living_c2' => 'Samarkand', 'living_c2_c' => '150 - 300', 'living_c3' => 'Bukhara', 'living_c3_c' => '150 - 250', 'living_c4' => 'Andijan', 'living_c4_c' => '120 - 200', 'living_c5' => 'Fergana', 'living_c5_c' => '120 - 200']
];

foreach ($files as $file) {
    $filename = basename($file, '.php');
    $country = '';
    
    // Extract country name from filename
    if (preg_match('/study-mbbs-in-(.+)/', $filename, $matches)) {
        $country = $matches[1];
    } elseif (preg_match('/study_in_(.+)/', $filename, $matches)) {
        $country = $matches[1];
    } elseif (preg_match('/study-in-(.+)/', $filename, $matches)) {
        $country = $matches[1];
    }

    if (!$country || !isset($data[$country])) {
        echo "Skipping $filename (No data for country: $country)\n";
        continue;
    }

    $c = $data[$country];
    $curr = $c['curr'];

    $content = file_get_contents($file);

    // Build the new HTML for Cost of Study
    if (strpos($filename, 'mbbs') !== false) {
        $study_html = "
                            <tr>
                                <td style=\"padding: 15px; font-weight: 500;\">Medicine (MBBS/MD)</td>
                                <td style=\"padding: 15px;\">$curr {$c['study_med']}</td>
                                <td style=\"padding: 15px;\">Core Medical Program</td>
                            </tr>
        ";
    } else {
        $study_html = "
                            <tr>
                                <td style=\"padding: 15px; font-weight: 500;\">Undergraduate (Bachelor's)</td>
                                <td style=\"padding: 15px;\">$curr {$c['study_ug']}</td>
                                <td style=\"padding: 15px;\">3-4 year programs typically</td>
                            </tr>
                            <tr>
                                <td style=\"padding: 15px; font-weight: 500;\">Postgraduate Taught Master's</td>
                                <td style=\"padding: 15px;\">$curr {$c['study_pg']}</td>
                                <td style=\"padding: 15px;\">1-2 year programs</td>
                            </tr>
                            <tr>
                                <td style=\"padding: 15px; font-weight: 500;\">MBA</td>
                                <td style=\"padding: 15px;\">$curr {$c['study_mba']}</td>
                                <td style=\"padding: 15px;\">Top tier schools command the higher end</td>
                            </tr>
                            <tr>
                                <td style=\"padding: 15px; font-weight: 500;\">PhD / Doctoral</td>
                                <td style=\"padding: 15px;\">$curr {$c['study_phd']}</td>
                                <td style=\"padding: 15px;\">Often funded with stipends</td>
                            </tr>
                            <tr>
                                <td style=\"padding: 15px; font-weight: 500;\">Medicine (Undergraduate, Clinical)</td>
                                <td style=\"padding: 15px;\">$curr {$c['study_med']}</td>
                                <td style=\"padding: 15px;\">Total programme cost is significantly higher</td>
                            </tr>
        ";
    }

    $living_html = "
                            <tr>
                                <td style=\"padding: 15px; font-weight: 500;\">{$c['living_c1']}</td>
                                <td style=\"padding: 15px;\">$curr {$c['living_c1_c']}</td>
                                <td style=\"padding: 15px;\">Top tier metropolitan cost</td>
                            </tr>
                            <tr>
                                <td style=\"padding: 15px; font-weight: 500;\">{$c['living_c2']}</td>
                                <td style=\"padding: 15px;\">$curr {$c['living_c2_c']}</td>
                                <td style=\"padding: 15px;\">Major city / Urban area</td>
                            </tr>
                            <tr>
                                <td style=\"padding: 15px; font-weight: 500;\">{$c['living_c3']}</td>
                                <td style=\"padding: 15px;\">$curr {$c['living_c3_c']}</td>
                                <td style=\"padding: 15px;\">Large student populations</td>
                            </tr>
                            <tr>
                                <td style=\"padding: 15px; font-weight: 500;\">{$c['living_c4']}</td>
                                <td style=\"padding: 15px;\">$curr {$c['living_c4_c']}</td>
                                <td style=\"padding: 15px;\">Regional centers</td>
                            </tr>
                            <tr>
                                <td style=\"padding: 15px; font-weight: 500;\">{$c['living_c5']}</td>
                                <td style=\"padding: 15px;\">$curr {$c['living_c5_c']}</td>
                                <td style=\"padding: 15px;\">Affordable tier</td>
                            </tr>
    ";

    // Regex replace for cost-study-section tbody
    $content = preg_replace(
        '/(<section class="cost-study-section"[\s\S]*?<tbody>)[\s\S]*?(<\/tbody>)/',
        '$1' . $study_html . '$2',
        $content
    );

    // Regex replace for cost-living-section tbody
    $content = preg_replace(
        '/(<section class="cost-living-section"[\s\S]*?<tbody>)[\s\S]*?(<\/tbody>)/',
        '$1' . $living_html . '$2',
        $content
    );

    // Save changes
    file_put_contents($file, $content);
    echo "Updated $filename\n";
}

echo "Done.\n";
