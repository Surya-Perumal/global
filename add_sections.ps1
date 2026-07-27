$html_to_insert = @"
        <!-- Cost of Study Section -->
        <section class="cost-study-section" style="padding: 60px 0; background-color: #fff;">
            <div class="layout-container">
                <div class="section-header text-center mb-2" data-aos="fade-up">
                    <span class="section-subtitle">FINANCIAL PLANNING</span>
                    <h2 class="section-title">Cost of Study & <span class="accent-text">Tuition Fees</span></h2>
                    <p class="hero-description mx-auto" style="max-width: 700px;">Tuition fee comparison by programme level.</p>
                </div>
                <div class="table-responsive" data-aos="fade-up" data-aos-delay="100">
                    <table class="table table-hover table-bordered shadow-sm" style="background: white; border-radius: 10px; overflow: hidden;">
                        <thead style="background: var(--primary); color: white;">
                            <tr>
                                <th style="padding: 15px;">Programme Level</th>
                                <th style="padding: 15px;">Typical Annual Fee</th>
                                <th style="padding: 15px;">Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding: 15px; font-weight: 500;">Undergraduate (Bachelor's)</td>
                                <td style="padding: 15px;">&pound;11,400 - &pound;38,000 / year</td>
                                <td style="padding: 15px;">Arts & Humanities lowest; Medicine and Engineering highest</td>
                            </tr>
                            <tr>
                                <td style="padding: 15px; font-weight: 500;">Postgraduate Taught Master's</td>
                                <td style="padding: 15px;">&pound;9,000 - &pound;30,000 / year</td>
                                <td style="padding: 15px;">Most popular 1-year route for Indian students</td>
                            </tr>
                            <tr>
                                <td style="padding: 15px; font-weight: 500;">MBA</td>
                                <td style="padding: 15px;">&pound;20,000 - &pound;75,000+</td>
                                <td style="padding: 15px;">Elite schools command the top end</td>
                            </tr>
                            <tr>
                                <td style="padding: 15px; font-weight: 500;">PhD / Doctoral</td>
                                <td style="padding: 15px;">&pound;18,000 - &pound;40,000 / year</td>
                                <td style="padding: 15px;">Many PhD candidates receive research council or university funding</td>
                            </tr>
                            <tr>
                                <td style="padding: 15px; font-weight: 500;">Medicine (Undergraduate, Clinical Years)</td>
                                <td style="padding: 15px;">Up to &pound;50,000+ / year</td>
                                <td style="padding: 15px;">Total programme cost can exceed &pound;200,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Cost of Living Section -->
        <section class="cost-living-section" style="padding: 60px 0; background-color: #f8f9fa;">
            <div class="layout-container">
                <div class="section-header text-center mb-2" data-aos="fade-up">
                    <span class="section-subtitle">STUDENT EXPENSES</span>
                    <h2 class="section-title">Cost of Living <span class="accent-text">by City</span></h2>
                    <p class="hero-description mx-auto" style="max-width: 700px;">City-wise monthly breakdown for international students.</p>
                </div>
                <div class="table-responsive" data-aos="fade-up" data-aos-delay="100">
                    <table class="table table-hover table-bordered shadow-sm" style="background: white; border-radius: 10px; overflow: hidden;">
                        <thead style="background: var(--primary); color: white;">
                            <tr>
                                <th style="padding: 15px;">City / Region</th>
                                <th style="padding: 15px;">Monthly Living Cost</th>
                                <th style="padding: 15px;">Representative Universities</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding: 15px; font-weight: 500;">London</td>
                                <td style="padding: 15px;">&pound;1,300 - &pound;1,800</td>
                                <td style="padding: 15px;">UCL, Imperial, LSE, King's College London, Queen Mary</td>
                            </tr>
                            <tr>
                                <td style="padding: 15px; font-weight: 500;">Edinburgh / Glasgow</td>
                                <td style="padding: 15px;">&pound;900 - &pound;1,600</td>
                                <td style="padding: 15px;">University of Edinburgh, Glasgow, Heriot-Watt</td>
                            </tr>
                            <tr>
                                <td style="padding: 15px; font-weight: 500;">Manchester / Birmingham</td>
                                <td style="padding: 15px;">&pound;900 - &pound;1,200</td>
                                <td style="padding: 15px;">Manchester, Birmingham, Aston</td>
                            </tr>
                            <tr>
                                <td style="padding: 15px; font-weight: 500;">Leeds / Sheffield / Nottingham</td>
                                <td style="padding: 15px;">&pound;850 - &pound;1,100</td>
                                <td style="padding: 15px;">Leeds, Sheffield, Nottingham</td>
                            </tr>
                            <tr>
                                <td style="padding: 15px; font-weight: 500;">Cardiff / Belfast</td>
                                <td style="padding: 15px;">&pound;800 - &pound;1,000</td>
                                <td style="padding: 15px;">Cardiff University, Queen's University Belfast</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
"@

$files = Get-ChildItem -Path "c:\xampp\htdocs\global" -Filter "study*in*.php"

foreach ($file in $files) {
    $content = [System.IO.File]::ReadAllText($file.FullName)
    
    if ($content -match "<!-- Cost of Study Section -->" -or $content -match "cost-study-section") {
        Write-Host "Skipping $($file.Name): already contains section."
        continue
    }

    $insertMarker = "<!-- Section 5: Instagram Reels -->"
    if (-not ($content -match $insertMarker)) {
        $insertMarker = "<!-- Footer -->"
        if (-not ($content -match $insertMarker)) {
            Write-Host "Skipping $($file.Name): could not find insertion point."
            continue
        }
    }
    
    $parts = $content -split $insertMarker, 2
    if ($parts.Length -eq 2) {
        $newContent = $parts[0] + $html_to_insert + "`n" + $insertMarker + $parts[1]
        [System.IO.File]::WriteAllText($file.FullName, $newContent)
        Write-Host "Updated $($file.Name)"
    } else {
        Write-Host "Skipping $($file.Name): marker issue."
    }
}
Write-Host "Done."
