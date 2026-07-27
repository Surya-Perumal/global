import re

with open('study_in_australia.php', 'r', encoding='utf-8') as f:
    content = f.read()

# Define the corrupted part to replace
pattern = r'<span class=\"current-page\" style=\"display: flex; align-items: center; gap: 5px; color: var\(--accent-color, #b8860b\); font-weight: 500;\">.*?<!-- Right Content Area \(Slider\) -->'

# Define the correct restored part
replacement = '''<span class=\"current-page\" style=\"display: flex; align-items: center; gap: 5px; color: var(--accent-color, #b8860b); font-weight: 500;\">
                        Study in Australia
                    </span>
                </nav>
            </div>
        </div>

        <!-- Section 2: Introduction -->
        <section class=\"canada-intro\">
            <div class=\"layout-container intro-grid\">
                <div class=\"intro-image\">
                    <img src=\"assets/img/australia.jpg\" alt=\"Students in Australia\">
                </div>
                <div class=\"intro-content\">
                    <span class=\"gold-label\">Staying in Australia permanently | the global ties</span>

                    <h2 class=\"section-title\">
                        Why Study in
                        <span class=\"accent-text\">Australia :</span>
                    </h2>

                    <p class=\"hero-description\">
                        <strong>Growing Destination</strong><br>
                        Australia is currently the third most popular destination for international students in the English-speaking world, behind the United States and the UK. Many international students choose to study there because of the cultural diversity, friendly natives, and high quality of education.<br><br>
                        <strong>Global Recognition</strong><br>
                        Schools and employers all over the world recognize degrees from Australian schools. Graduates from Australian schools are highly sought after due to the impressive international reputation of the Australian education system. This system is carefully regulated by the Australian government in order to maintain the high standards of education associated with the country.
                    </p>

                    <div>
                        <a href=\"javascript:void(0);\" class=\"cta-btn\" data-bs-toggle=\"modal\" data-bs-target=\"#contactModal\">
                            Read More
                            <i class=\"fas fa-arrow-right\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3: Work Opportunities -->
        <section class=\"opportunities-section luxury-testimonial-layout\">
            <div class=\"layout-container opp-luxury-split\">
                <!-- Left Content Area -->
                <div class=\"opp-left-luxury\">
                    <!-- <h2 class=\"destinations-title\">Study & Work Benefits</h2> -->
                     <h2 class=\"section-title\">
           Why Choose
            <span class=\"accent-text\">Australia</span>
          </h2>
                    <p class=\"hero-description\">
                        Australia provides international students with excellent education, flexible work opportunities,
                        advanced research facilities, and a high quality of life, helping students build successful
                        global careers.
                    </p>

                </div>

                <!-- Right Content Area (Slider) -->'''

new_content = re.sub(pattern, replacement, content, flags=re.DOTALL)

with open('study_in_australia.php', 'w', encoding='utf-8') as f:
    f.write(new_content)

print("Fixed successfully!")
