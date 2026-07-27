<?php
$directory = __DIR__;
$files = scandir($directory);
$fixed_count = 0;

foreach ($files as $file) {
    if ((str_starts_with($file, 'study_in_') || str_starts_with($file, 'study-in-') || str_starts_with($file, 'study-mbbs-in-')) && str_ends_with($file, '.php')) {
        
        $filepath = $directory . DIRECTORY_SEPARATOR . $file;
        $content = file_get_contents($filepath);

        // Skip if already inserted
        if (str_contains($content, '<!-- Section 3.5: Why Choose Us -->')) {
            continue;
        }

        $country = str_replace(['study_in_', 'study-in-', 'study-mbbs-in-', '.php'], '', $file);
        $country = ucwords(str_replace('-', ' ', $country));

        $new_section = <<<HTML
        <!-- Section 3.5: Why Choose Us -->
        <section class="why-choose-us" style="padding: 60px 0; background-color: var(--bg-light-alt, #f8f9fa);">
            <div class="layout-container">
                <div class="section-header text-center mb-5" data-aos="fade-up">
                    <span class="section-subtitle" style="color: #b8860b; font-weight: 600; letter-spacing: 2px; display: block; margin-bottom: 10px;">YOUR TRUSTED PARTNER</span>
                    <h2 class="section-title">
                        Why Choose <span class="accent-text">The Global Ties?</span>
                    </h2>
                </div>
                <div class="content-wrapper text-center mx-auto" style="max-width: 900px;" data-aos="fade-up" data-aos-delay="100">
                    <p class="hero-description" style="font-size: 1.1rem; line-height: 1.8; color: #555;">
                        The Global Ties offers comprehensive end-to-end support for students aspiring to study in <strong>$country</strong>. Our expert counselors guide you through every stage of the process, from selecting the right university and program to securing your student visa and preparing for life abroad. Our services include university admissions, application processing, document verification, study permit assistance, financial documentation guidance, Statement of Purpose (SOP) review, scholarship assistance, biometrics support, pre-departure orientation, accommodation guidance, and post-arrival assistance. With personalized counseling and dedicated support at every step, we ensure a seamless, stress-free transition to your academic journey and future success in <strong>$country</strong>.
                    </p>
                    <div class="mt-4">
                        <a href="javascript:void(0);" class="cta-btn" data-bs-toggle="modal" data-bs-target="#contactModal">
                            Read More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>


HTML;

        // Find the `<!-- Section 4:` marker and prepend
        $pattern = '/(<!-- Section 4:)/i';
        $new_content = preg_replace($pattern, $new_section . "$1", $content, 1);

        if ($new_content !== null && $new_content !== $content) {
            file_put_contents($filepath, $new_content);
            echo "Added Why Choose section to $file\n";
            $fixed_count++;
        }
    }
}

echo "Total files updated: $fixed_count\n";
