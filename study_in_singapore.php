<?php require_once 'site-config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study in Canada | The Global Ties</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="study_in_canada.css">
</head>

<body>
   <?php include 'include/header.php'; ?>

    <main>
        <section class="about-hero">
    <div class="container aos-init aos-animate" data-aos="fade-up">
      <h1>Study in<span class="accent-text" style="color:var(--accent);"> Singapore</span></h1>
      <p>Experience a world-class education in Asia's premier business and innovation hub, offering a unique blend of Eastern and Western cultures.</p>
    </div>
  </section>

        <!-- Floating Breadcrumb Section -->
        <div class="layout-container" style="position: relative; z-index: 5;">
            <div class="floating-breadcrumb-card">
                <nav class="breadcrumb-nav" aria-label="breadcrumb">
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
                        Study in Singapore
                    </span>
                </nav>
            </div>
        </div>

        <!-- Section 2: Introduction -->
        <section class="canada-intro">
            <div class="layout-container intro-grid">
                <div class="intro-image">
                    <img src="img/singapore.jpg"
                        alt="Students in Canada">
                </div>
                <div class="intro-content">
                    <span class="gold-label">Staying in Singapore permanently | the global ties</span>

<h2 class="section-title">
Study Abroad in             <span class="accent-text">Singapore</span>
          </h2>
                    <p class="hero-description">
                     
When you are looking for greater prospects of in-country employment after graduation, Singapore is your destination. Students from Coimbatore, Tiruppur, Erode and Ooty, through Global ties, get the best chances of securing their jobs in Singapore after their internship. With all our experience, we provide details regarding admission details, courses offered in Singapore, fee structure, visa requirements for Singapore and detailed information on the work permit in Singapore.
<br>
Singapore universities are known for courses in animation, design, gaming and music. Being the popular destination for Indians, scholarships are offered with a Work in Singapore </p>
                 

                    <div>
                        <a href="javascript:void(0);" class="cta-btn" data-bs-toggle="modal" data-bs-target="#contactModal">
                          Read More
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <!-- Section 3: Work Opportunities -->
        <section class="opportunities-section luxury-testimonial-layout">
            <div class="layout-container opp-luxury-split">
                <!-- Left Content Area -->
                <div class="opp-left-luxury">
<h2 class="section-title">
           Why Choose
            <span class="accent-text">Singapore</span>
          </h2>
                    <p class="hero-description">
                      Singapore offers world-class education, globally recognized degrees, outstanding career opportunities, industry-focused training, financial assistance, and flexible study options that help students build successful international careers. Renowned for its high academic standards, modern infrastructure, and strong emphasis on innovation, Singapore has become one of Asia's leading destinations for higher education.
                    </p>

                </div>

                <!-- Right Content Area (Slider) -->
                <div class="opp-slider-wrapper">
    <div class="opp-slider-container" id="opp-slider">
        <div class="opp-slider-track" id="opp-track">

            <!-- Card 1 -->
            <div class="opp-slide">
                <div class="opp-card luxury-card">
                    <div class="card-author-area">
                        <div class="author-info">
                            <h4>Affordable Education</h4>
                        </div>
                    </div>
                    <div class="card-divider"></div>
                    <p class="card-text">
                        Many institutes in Singapore offer English-taught programs on special concessions.
                        Compared to many other study destinations, tuition fees and living expenses are
                        relatively affordable for international students.
                    </p>
                    <a href="#" class="read-more-btn" onclick="toggleCard(event, this)">Read More &rarr;</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="opp-slide">
                <div class="opp-card luxury-card">
                    <div class="card-author-area">
                        <div class="author-info">
                            <h4>Strong Indian Community</h4>
                        </div>
                    </div>
                    <div class="card-divider"></div>

                    <p class="card-text">
                        Singapore has a strong South Asian community, with a large number of students and
                        professionals from India and Sri Lanka. This creates a comfortable and welcoming
                        environment for international students.
                    </p>
                    <a href="#" class="read-more-btn" onclick="toggleCard(event, this)">Read More &rarr;</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="opp-slide">
                <div class="opp-card luxury-card">
                    <div class="card-author-area">
                        <div class="author-info">
                            <h4>Excellent Connectivity</h4>
                        </div>
                    </div>
                    <div class="card-divider"></div>
                    <p class="card-text">
                        Home to some of the best airports in the world, Singapore is exceptionally connected
                        to the rest of Asia and beyond, making international travel convenient for students.
                    </p>
                    <a href="#" class="read-more-btn" onclick="toggleCard(event, this)">Read More &rarr;</a>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="opp-slide">
                <div class="opp-card luxury-card">
                    <div class="card-author-area">
                        <div class="author-info">
                            <h4>Career Opportunities</h4>
                        </div>
                    </div>
                    <div class="card-divider"></div>

                    <p class="card-text">
                        For meritorious students, the chances of securing employment in Singapore are high.
                        The country offers strong industry connections, global business exposure, and
                        excellent career growth opportunities.
                    </p>
                    <a href="#" class="read-more-btn" onclick="toggleCard(event, this)">Read More &rarr;</a>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="opp-slide">
                <div class="opp-card luxury-card">
                    <div class="card-author-area">
                        <div class="author-info">
                            <h4>Financial Aid Support</h4>
                        </div>
                    </div>
                    <div class="card-divider"></div>

                    <p class="card-text">
                        The Ministry of Education, Singapore, provides financial aid opportunities for
                        international students. Its need-blind admission approach helps talented students
                        pursue quality education regardless of their financial background.
                    </p>
                    <a href="#" class="read-more-btn" onclick="toggleCard(event, this)">Read More &rarr;</a>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="opp-slide">
                <div class="opp-card luxury-card">
                    <div class="card-author-area">
                        <div class="author-info">
                            <h4>Global Schoolhouse</h4>
                        </div>
                    </div>
                    <div class="card-divider"></div>

                    <p class="card-text">
                        Singapore is recognized as a global schoolhouse due to its outstanding universities
                        and international collaborations. Its institutions partner with leading universities
                        worldwide, ensuring world-class education and global recognition.
                    </p>
                    <a href="#" class="read-more-btn" onclick="toggleCard(event, this)">Read More &rarr;</a>
                </div>
            </div>

        </div>
    </div>

    <!-- Slider Controls -->
    <div class="opp-slider-controls image-exact-controls">
        <button class="arrow-btn prev-btn" onclick="moveSlide(-1)">&#8249;</button>
        <div class="opp-pagination image-exact-pagination" id="opp-pagination">
            <span class="dot active" onclick="goToSlide(0)"></span>
            <span class="dot" onclick="goToSlide(1)"></span>
            <span class="dot" onclick="goToSlide(2)"></span>
            <span class="dot" onclick="goToSlide(3)"></span>
            <span class="dot" onclick="goToSlide(4)"></span>
            <span class="dot" onclick="goToSlide(5)"></span>
        </div>
        <button class="arrow-btn next-btn" onclick="moveSlide(1)">&#8250;</button>
    </div>
</div>
            </div>
        </section>
        <!-- Section 4: Canada Advantage Banner -->
        <section class="advantage-banner">
            <div class="layout-container advantage-grid">
                <div>
                    <h2 class="destinations-titles">Why International Students Choose Singapore</h2>
                </div>
                <div class="features-wrapper">
                    <div class="feature-glass-card">
                        <h4>Quality Education</h4>
                    </div>
                    <div class="feature-glass-card">
                        <h4>Work Opportunities</h4>
                    </div>
                    <div class="feature-glass-card">
                        <h4>Global Recognition</h4>
                    </div>
                    <div class="feature-glass-card">
                        <h4>Stay & Settle</h4>
                    </div>
                    <div class="feature-glass-card">
                        <h4>Safe Environment</h4>
                    </div>
                    <div class="feature-glass-card">
                        <h4>High Quality of Life</h4>
                    </div>
                </div>
            </div>
        </section>


<!-- Top Universities Section -->
        <section class="top-universities-section" style="padding: 60px 0; background-color: #f8f9fa;">
            <div class="layout-container">
                <div class="section-header text-center" data-aos="fade-up">
                    <span class="section-subtitle">EXCELLENCE IN EDUCATION</span>
                    <h2 class="section-title">Top Universities <span class="accent-text">& Rankings</span></h2>
                    <p class="hero-description mx-auto text-center" style="max-width: 700px;">Discover globally recognized institutions offering world-class academic excellence and research opportunities.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="university-card" style="background: #fff; padding: 30px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); height: 100%; transition: transform 0.3s ease; border-bottom: 4px solid var(--accent);">
                            <h4 style="color: var(--primary); font-weight: 700; margin-bottom: 15px;">Global Top 100 University</h4>
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                <li style="margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;"><i class="fas fa-check-circle" style="color: var(--accent); margin-top: 5px;"></i> <span><strong>Ranking:</strong> Top 1% Worldwide</span></li>
                                <li style="margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;"><i class="fas fa-check-circle" style="color: var(--accent); margin-top: 5px;"></i> <span><strong>Specialisations:</strong> Engineering, Business, IT</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="university-card" style="background: #fff; padding: 30px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); height: 100%; transition: transform 0.3s ease; border-bottom: 4px solid var(--accent);">
                            <h4 style="color: var(--primary); font-weight: 700; margin-bottom: 15px;">Premier Institute of Technology</h4>
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                <li style="margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;"><i class="fas fa-check-circle" style="color: var(--accent); margin-top: 5px;"></i> <span><strong>Ranking:</strong> Highly Ranked in Tech</span></li>
                                <li style="margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;"><i class="fas fa-check-circle" style="color: var(--accent); margin-top: 5px;"></i> <span><strong>Specialisations:</strong> Computer Science, Data Science</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="university-card" style="background: #fff; padding: 30px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); height: 100%; transition: transform 0.3s ease; border-bottom: 4px solid var(--accent);">
                            <h4 style="color: var(--primary); font-weight: 700; margin-bottom: 15px;">Leading Business School</h4>
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                <li style="margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;"><i class="fas fa-check-circle" style="color: var(--accent); margin-top: 5px;"></i> <span><strong>Ranking:</strong> Triple Crown Accredited</span></li>
                                <li style="margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;"><i class="fas fa-check-circle" style="color: var(--accent); margin-top: 5px;"></i> <span><strong>Specialisations:</strong> MBA, Finance, Marketing</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Popular Programs Section -->
        <section class="popular-programs-section" style="padding: 60px 0;">
            <div class="layout-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                        <span class="section-subtitle">YOUR FUTURE CAREER</span>
                        <h2 class="section-title mb-4">Popular Programs & <span class="accent-text">Specialisations</span></h2>
                        <p class="hero-description mb-4">Choose from a wide variety of globally recognized courses tailored to industry demands and emerging technologies.</p>
                        
                        <div class="programs-list">
                            <div class="program-item" style="background: var(--light-bg); padding: 20px; border-radius: 10px; margin-bottom: 15px; border-left: 4px solid var(--primary);">
                                <h5 style="color: var(--primary); font-weight: 700; margin-bottom: 5px;">STEM Programs</h5>
                                <p style="margin: 0; font-size: 0.95rem; color: #555;">Computer Science, Artificial Intelligence, Engineering, Data Analytics.</p>
                            </div>
                            <div class="program-item" style="background: var(--light-bg); padding: 20px; border-radius: 10px; margin-bottom: 15px; border-left: 4px solid var(--accent);">
                                <h5 style="color: var(--primary); font-weight: 700; margin-bottom: 5px;">Business & Management</h5>
                                <p style="margin: 0; font-size: 0.95rem; color: #555;">MBA, International Business, Supply Chain Management, Finance.</p>
                            </div>
                            <div class="program-item" style="background: var(--light-bg); padding: 20px; border-radius: 10px; border-left: 4px solid var(--primary);">
                                <h5 style="color: var(--primary); font-weight: 700; margin-bottom: 5px;">Healthcare & Medicine</h5>
                                <p style="margin: 0; font-size: 0.95rem; color: #555;">Nursing, Public Health, Pharmacy, Biotechnology.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <img src="img/hero_edu1.png" alt="Popular Programs" class="img-fluid rounded-4 shadow-lg w-100" style="object-fit: cover; height: 500px;">
                    </div>
                </div>
            </div>
        </section>
        <!-- Cost of Study Section -->
<section class="cost-study-section" style="padding: 60px 0; background-color: #fff;">
    <div class="layout-container">
        <div class="section-header text-center mb-2" data-aos="fade-up">
            <span class="section-subtitle">FINANCIAL PLANNING</span>
            <h2 class="section-title">Cost of Study & <span class="accent-text">Tuition Fees</span></h2>
            <p class="hero-description mx-auto" style="max-width:700px;">
                Estimated annual tuition fees for international students studying in Singapore.
            </p>
        </div>

        <div class="table-responsive" data-aos="fade-up" data-aos-delay="100">
            <table class="table table-hover table-bordered shadow-sm" style="background:#fff;border-radius:10px;overflow:hidden;">
                <thead style="background:var(--primary);color:#fff;">
                    <tr>
                        <th style="padding:15px;">Programme Level</th>
                        <th style="padding:15px;">Typical Annual Fee</th>
                        <th style="padding:15px;">Notes</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td style="padding:15px;font-weight:500;">Diploma</td>
                        <td style="padding:15px;">SGD 8,000 – SGD 18,000 / year</td>
                        <td style="padding:15px;">Available at polytechnics and private institutions.</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">Undergraduate (Bachelor's)</td>
                        <td style="padding:15px;">SGD 15,000 – SGD 45,000 / year</td>
                        <td style="padding:15px;">Engineering, Medicine, and Business generally cost more.</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">Postgraduate (Master's)</td>
                        <td style="padding:15px;">SGD 20,000 – SGD 50,000 / year</td>
                        <td style="padding:15px;">MBA and specialized programmes have higher tuition fees.</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">MBA</td>
                        <td style="padding:15px;">SGD 35,000 – SGD 90,000+</td>
                        <td style="padding:15px;">Premium business schools charge the highest tuition.</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">PhD / Doctoral</td>
                        <td style="padding:15px;">SGD 18,000 – SGD 40,000 / year</td>
                        <td style="padding:15px;">Research scholarships may reduce tuition costs.</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Cost of Living Section -->
<section class="cost-living-section" style="padding:30px 0;background-color:#f8f9fa;">
    <div class="layout-container">

        <div class="section-header text-center mb-2" data-aos="fade-up">
            <span class="section-subtitle">STUDENT EXPENSES</span>
            <h2 class="section-title">Cost of Living <span class="accent-text">by Area</span></h2>
            <p class="hero-description mx-auto" style="max-width:700px;">
                Estimated monthly living expenses for international students in Singapore.
            </p>
        </div>

        <div class="table-responsive" data-aos="fade-up" data-aos-delay="100">
            <table class="table table-hover table-bordered shadow-sm" style="background:#fff;border-radius:10px;overflow:hidden;">

                <thead style="background:var(--primary);color:#fff;">
                    <tr>
                        <th style="padding:15px;">Area</th>
                        <th style="padding:15px;">Monthly Living Cost</th>
                        <th style="padding:15px;">Representative Universities</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td style="padding:15px;font-weight:500;">Central Singapore</td>
                        <td style="padding:15px;">SGD 1,800 – SGD 2,800</td>
                        <td style="padding:15px;">SMU, LASALLE, NAFA</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">Queenstown / Clementi</td>
                        <td style="padding:15px;">SGD 1,500 – SGD 2,300</td>
                        <td style="padding:15px;">National University of Singapore (NUS)</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">Jurong West</td>
                        <td style="padding:15px;">SGD 1,400 – SGD 2,100</td>
                        <td style="padding:15px;">Nanyang Technological University (NTU)</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">Punggol / Tampines</td>
                        <td style="padding:15px;">SGD 1,300 – SGD 2,000</td>
                        <td style="padding:15px;">Singapore Institute of Technology (SIT)</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">Woodlands / Yishun</td>
                        <td style="padding:15px;">SGD 1,200 – SGD 1,900</td>
                        <td style="padding:15px;">Various Private Institutions</td>
                    </tr>

                </tbody>

            </table>
        </div>
    </div>
</section>
  <!-- Section 5: Instagram Reels -->
        <section class="reels-section luxury-testimonial-layout">
            <div class="layout-container opp-luxury-split">
                <!-- Left Content Area -->
               <div class="opp-left-luxury">
                    <span class="section-subtitle">INSTAGRAM STORIES</span>
                    <div class="reels-accent-line"></div>
                    <!-- <h2 class=".destinations-title">Experience Through Instagram Stories</h2></br> -->
                    <h2 class="section-title">
           Experience Through 
            <span class="accent-text">Instagram Stories</span>
          </h2>
                    <p class="hero-description">Step into the world of global education through the inspiring stories of our students. Explore visa success celebrations, university admissions, campus life, graduation moments, cultural experiences, and unforgettable memories shared directly from our Instagram community. </p>
                   <div class="social-box">

    <a href="https://www.instagram.com/theglobalties/reels/" target="_blank" class="social-card instagram">
        <div class="social-icon">
            <i class="fa-brands fa-instagram"></i>
        </div>

        <div class="social-content">
            <span>Watch us on</span>
            <h5>Instagram Reels</h5>
        </div>
    </a>

    <a href="https://www.facebook.com/theglobalties" target="_blank" class="social-card facebook">
        <div class="social-icon">
            <i class="fa-brands fa-facebook-f"></i>
        </div>

        <div class="social-content">
            <span>Connect with us</span>
            <h5>Facebook</h5>
        </div>
    </a>

</div>
                </div>

                <!-- Right Content Area (Reels Slider) -->
                <div class="reel-slider-wrapper">
                    <div class="reel-slider-container" id="reel-slider">
                        <div class="reel-slider-track" id="reel-track">
                            <!-- Reel 1 -->
                            <div class="reel-slide">
                                <div class="reel-card" style="position: relative; overflow: hidden; border-radius: 15px;">
                                    <iframe src="https://www.youtube.com/embed/ZKEQ7xHlKpg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none; z-index: 1;" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <div class="reel-overlay" style="z-index: 2; pointer-events: none;"></div>
                                    <div class="reel-top" style="z-index: 3; pointer-events: none;">
                                        <div class="reel-account">
                                            <div class="reel-avatar">
                                                <img src="assets/images/logo.png" alt="The Global Ties"
                                                    onerror="this.src='https://ui-avatars.com/api/?name=GT&background=fff&color=0D3B66'">
                                            </div>
                                            <div class="reel-account-text">
                                                <span class="reel-name">The Global Ties <span
                                                        class="verified-badge">âœ“</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reel-bottom" style="z-index: 3; pointer-events: none;">
                                        <span class="student-name">Student Story</span>
                                        <span class="university-name">Study in Canada</span>
                                        <span class="country-name">Canada</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Reel 2 -->
                            <div class="reel-slide">
                                <div class="reel-card" style="position: relative; overflow: hidden; border-radius: 15px;">
                                    <iframe src="https://www.youtube.com/embed/dP3zAT8Dfh8" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none; z-index: 1;" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <div class="reel-overlay" style="z-index: 2; pointer-events: none;"></div>
                                    <div class="reel-top" style="z-index: 3; pointer-events: none;">
                                        <div class="reel-account">
                                            <div class="reel-avatar">
                                                <img src="assets/images/logo.png" alt="The Global Ties"
                                                    onerror="this.src='https://ui-avatars.com/api/?name=GT&background=fff&color=0D3B66'">
                                            </div>
                                            <div class="reel-account-text">
                                                <span class="reel-name">The Global Ties <span
                                                        class="verified-badge">âœ“</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reel-bottom" style="z-index: 3; pointer-events: none;">
                                        <span class="student-name">Student Story</span>
                                        <span class="university-name">Study in Canada</span>
                                        <span class="country-name">Canada</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Reel 3 -->
                            <div class="reel-slide">
                                <div class="reel-card" style="position: relative; overflow: hidden; border-radius: 15px;">
                                    <iframe src="https://www.youtube.com/embed/hWDNvdlbBsM" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none; z-index: 1;" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <div class="reel-overlay" style="z-index: 2; pointer-events: none;"></div>
                                    <div class="reel-top" style="z-index: 3; pointer-events: none;">
                                        <div class="reel-account">
                                            <div class="reel-avatar">
                                                <img src="assets/images/logo.png" alt="The Global Ties"
                                                    onerror="this.src='https://ui-avatars.com/api/?name=GT&background=fff&color=0D3B66'">
                                            </div>
                                            <div class="reel-account-text">
                                                <span class="reel-name">The Global Ties <span
                                                        class="verified-badge">âœ“</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reel-bottom" style="z-index: 3; pointer-events: none;">
                                        <span class="student-name">Student Story</span>
                                        <span class="university-name">Study in Canada</span>
                                        <span class="country-name">Canada</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Reel 4 -->
                            <div class="reel-slide">
                                <div class="reel-card" style="position: relative; overflow: hidden; border-radius: 15px;">
                                    <iframe src="https://www.youtube.com/embed/sWDBq8rBaLo" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none; z-index: 1;" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <div class="reel-overlay" style="z-index: 2; pointer-events: none;"></div>
                                    <div class="reel-top" style="z-index: 3; pointer-events: none;">
                                        <div class="reel-account">
                                            <div class="reel-avatar">
                                                <img src="assets/images/logo.png" alt="The Global Ties"
                                                    onerror="this.src='https://ui-avatars.com/api/?name=GT&background=fff&color=0D3B66'">
                                            </div>
                                            <div class="reel-account-text">
                                                <span class="reel-name">The Global Ties <span
                                                        class="verified-badge">âœ“</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reel-bottom" style="z-index: 3; pointer-events: none;">
                                        <span class="student-name">Student Story</span>
                                        <span class="university-name">Study in Canada</span>
                                        <span class="country-name">Canada</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Reel 5 -->
                            <div class="reel-slide">
                                <div class="reel-card" style="position: relative; overflow: hidden; border-radius: 15px;">
                                    <iframe src="https://www.youtube.com/embed/hO1PeNA7EdM" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none; z-index: 1;" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <div class="reel-overlay" style="z-index: 2; pointer-events: none;"></div>
                                    <div class="reel-top" style="z-index: 3; pointer-events: none;">
                                        <div class="reel-account">
                                            <div class="reel-avatar">
                                                <img src="assets/images/logo.png" alt="The Global Ties"
                                                    onerror="this.src='https://ui-avatars.com/api/?name=GT&background=fff&color=0D3B66'">
                                            </div>
                                            <div class="reel-account-text">
                                                <span class="reel-name">The Global Ties <span
                                                        class="verified-badge">âœ“</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reel-bottom" style="z-index: 3; pointer-events: none;">
                                        <span class="student-name">Student Story</span>
                                        <span class="university-name">Study in Canada</span>
                                        <span class="country-name">Canada</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slider Controls -->
                    <div class="opp-slider-controls image-exact-controls">
                        <button class="arrow-btn prev-btn" onclick="moveReelSlide(-1)">&#8249;</button>
                        <div class="opp-pagination image-exact-pagination" id="reel-pagination">
                            <span class="dot active" onclick="goToReelSlide(0)"></span>
                            <span class="dot" onclick="goToReelSlide(1)"></span>
                            <span class="dot" onclick="goToReelSlide(2)"></span>
                            <span class="dot" onclick="goToReelSlide(3)"></span>
                            <span class="dot" onclick="goToReelSlide(4)"></span>
                        </div>
                        <button class="arrow-btn next-btn" onclick="moveReelSlide(1)">&#8250;</button>
                    </div>
                </div>
            </div>
        </section>
<!-- Work Opportunities Section -->
<section class="work-opportunities-section" style="padding: 27px 0 0px 0; background-color: #f8f9fa;">
    <div class="layout-container">

        <div class="section-header text-center mb-5" data-aos="fade-up">
            <span class="section-subtitle">CAREER & EARNINGS</span>
            <h2 class="section-title">
                Part-Time Jobs & <span class="accent-text">Work Opportunities</span> in Singapore
            </h2>
        </div>

        <div class="row g-5 align-items-center mb-5">

            <div class="col-lg-6" data-aos="fade-right">

                <h4 class="fw-bold mb-3" style="color: var(--primary);">
                    Part-Time Jobs in Singapore
                </h4>

                <p class="text-muted" style="line-height:1.8;">
                    Singapore offers international students valuable opportunities to gain practical work experience while pursuing their studies. Eligible students may work part-time during their academic programs, allowing them to earn additional income while developing industry-relevant skills.
                </p>

                <p class="text-muted" style="line-height:1.8;">
                    Students can find part-time employment in retail, hospitality, restaurants, customer service, supermarkets, administration, logistics, healthcare support, tourism, and campus-based positions. These roles help students gain real-world experience while understanding Singapore's highly professional and multicultural work environment.
                </p>

                <p class="text-muted" style="line-height:1.8;">
                    Working while studying enhances communication skills, builds professional confidence, expands industry networks, strengthens resumes, and prepares students for rewarding international careers after graduation.
                </p>

            </div>

            <div class="col-lg-6" data-aos="fade-left">

                <div class="position-relative">

                    <img src="img/part-time.webp"
                        alt="Work in Singapore"
                        class="img-fluid rounded-4 shadow-lg w-100"
                        style="object-fit:cover;height:400px;">

                    <div class="position-absolute bottom-0 start-0 w-100 p-4 rounded-bottom-4"
                        style="background:linear-gradient(to top,rgba(9,30,62,.9),transparent);">

                        <h5 class="text-white fw-bold mb-1">
                            Graduate Career Opportunities
                        </h5>

                        <p class="text-white opacity-75 mb-0" style="font-size:.9rem;">
                            Build a successful career in one of Asia's leading business hubs.
                        </p>

                    </div>

                </div>

            </div>

        </div>

        <div class="row g-4 mb-5" data-aos="fade-up">

            <div class="col-12">

                <div class="bg-white p-5 rounded-4 shadow-sm"
                    style="border-left:5px solid var(--accent);">

                    <h4 class="fw-bold mb-4" style="color:var(--primary);">
                        Graduate Career Opportunities
                    </h4>

                    <p class="text-muted mb-4">
                        After successfully completing an eligible qualification, graduates can explore career opportunities in Singapore's dynamic economy. Gaining professional experience in Singapore enhances employability, develops international expertise, and opens pathways to exciting global career opportunities.
                    </p>

                    <p class="text-muted mb-0">
                        Singapore offers excellent employment prospects in Information Technology, Artificial Intelligence, Banking, Finance, Business Management, Engineering, Healthcare, Biotechnology, Logistics, Hospitality, Data Analytics, Cyber Security, Digital Marketing, and Supply Chain Management.
                    </p>

                </div>

            </div>

        </div>

        <div class="row g-5 mb-5">

            <div class="col-lg-6" data-aos="fade-right">

                <h4 class="fw-bold mb-4" style="color:var(--primary);">
                    Benefits of Working While Studying
                </h4>

                <ul class="list-unstyled mb-0" style="line-height:2;">

                    <li class="d-flex align-items-start mb-3">
                        <div class="me-3 mt-1" style="color:var(--accent);">
                            <i class="fas fa-check-circle fs-5"></i>
                        </div>
                        <span class="text-muted fw-bold">
                            Gain valuable Singaporean work experience.
                        </span>
                    </li>

                    <li class="d-flex align-items-start mb-3">
                        <div class="me-3 mt-1" style="color:var(--accent);">
                            <i class="fas fa-check-circle fs-5"></i>
                        </div>
                        <span class="text-muted fw-bold">
                            Earn additional income to support living expenses.
                        </span>
                    </li>

                    <li class="d-flex align-items-start mb-3">
                        <div class="me-3 mt-1" style="color:var(--accent);">
                            <i class="fas fa-check-circle fs-5"></i>
                        </div>
                        <span class="text-muted fw-bold">
                            Develop professional, communication, and workplace skills.
                        </span>
                    </li>

                    <li class="d-flex align-items-start mb-3">
                        <div class="me-3 mt-1" style="color:var(--accent);">
                            <i class="fas fa-check-circle fs-5"></i>
                        </div>
                        <span class="text-muted fw-bold">
                            Build a strong resume and expand your professional network.
                        </span>
                    </li>

                    <li class="d-flex align-items-start mb-3">
                        <div class="me-3 mt-1" style="color:var(--accent);">
                            <i class="fas fa-check-circle fs-5"></i>
                        </div>
                        <span class="text-muted fw-bold">
                            Improve career opportunities after graduation.
                        </span>
                    </li>

                    <li class="d-flex align-items-start mb-3">
                        <div class="me-3 mt-1" style="color:var(--accent);">
                            <i class="fas fa-check-circle fs-5"></i>
                        </div>
                        <span class="text-muted fw-bold">
                            Experience Singapore's modern and multicultural workplace.
                        </span>
                    </li>

                    <li class="d-flex align-items-start">
                        <div class="me-3 mt-1" style="color:var(--accent);">
                            <i class="fas fa-check-circle fs-5"></i>
                        </div>
                        <span class="text-muted fw-bold">
                            Enhance employability through practical international experience.
                        </span>
                    </li>

                </ul>

            </div>

            <div class="col-lg-6" data-aos="fade-left">

                <div class="bg-primary text-white p-5 rounded-4 h-100 d-flex flex-column justify-content-center position-relative overflow-hidden"
                    style="background:var(--primary)!important;">

                    <div class="position-absolute"
                        style="top:-20px;right:-20px;opacity:.1;font-size:150px;">
                        <i class="fas fa-city"></i>
                    </div>

                    <h4 class="fw-bold mb-4 position-relative z-1 text-white">
                        How The Global Ties Can Help
                    </h4>

                    <p class="mb-4 position-relative z-1 text-light"
                        style="line-height:1.8;opacity:.9;">

                        The Global Ties provides complete guidance for students planning to study in Singapore. Our experienced counsellors assist with university selection, admissions, document verification, Student Pass applications, financial documentation, scholarship guidance, accommodation assistance, pre-departure orientation, and post-arrival support. We also help students understand work eligibility, career opportunities, and future employment pathways to ensure a smooth and successful study abroad journey.

                    </p>

                    <div class="p-3 rounded-3 position-relative z-1"
                        style="background:rgba(255,255,255,.1);border-left:3px solid var(--accent);">

                        <p class="mb-0 small" style="opacity:.85;">

                            <strong>Note:</strong> Student work rights, permitted working hours, Student Pass conditions, and employment regulations are governed by the Singapore Government and may change over time. Students should always refer to the latest official guidelines before making employment or visa-related decisions.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>
<section class="canada-intro">
            <div class="layout-container intro-grid">
               
                <div class="intro-content">

<h2 class="section-title">
         Why Choose The Global Ties?
        
          </h2>
                    <p class="hero-description">
                        The Global Ties provides comprehensive end-to-end support for students planning to study in Singapore. Our experienced counsellors offer personalized guidance to help you choose the right university, institution, and program based on your academic qualifications, career aspirations, and budget.

Our services include university selection, profile evaluation, course counselling, admissions, document verification, Statement of Purpose (SOP) guidance, Student Pass application assistance, financial documentation support, scholarship guidance, education loan assistance, accommodation support, pre-departure orientation, travel guidance, and post-arrival assistance. We ensure a smooth, transparent, and hassle-free process from your initial consultation to your successful arrival in Singapore, helping you achieve your study abroad goals with confidence.
</p>                 

                    <div>
                        <a href="javascript:void(0);" class="cta-btn" data-bs-toggle="modal" data-bs-target="#contactModal">
                          Read More
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                 <div class="intro-image">
                    <img src="img/img-for.jpg"
                        alt="Students in Canada">
                </div>

            </div>
        </section>
 <section class="request-info-section">
    <div class="layout-container">
        <div class="row align-items-center g-5">
            <!-- Left Side Image -->
            <div class="col-lg-7 mb-4 mb-lg-0" data-aos="fade-right">
                <div class="position-relative">
                    <img src="img/form_img.jpg" alt="Request Information" class="img-fluid rounded-4 shadow-lg w-100" style="max-height: 450px; object-fit: cover;">
                    <div class="position-absolute bottom-0 start-0 bg-white p-4 shadow-lg d-flex align-items-center gap-3" style="transform: translateY(20px); border-radius: 0 20px 20px 0; border-left: 5px solid var(--accent, #F59E0B); z-index: 2;">
                        <div style="width: 55px; height: 55px; background: rgba(245, 158, 11, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--accent, #F59E0B); font-size: 24px;">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1" style="color: var(--primary, #091E3E); font-size: 1.25rem;">Need Expert Advice?</h5>
                            <p class="text-muted mb-0" style="font-size: 0.9rem; font-weight: 500;">Talk to our senior counselors today</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side Form -->
           <div class="col-lg-5 aos-init aos-animate" data-aos="fade-left">
         <div class="lead-form-card glass-form" style="max-width: 380px; margin: 0 auto;">
              <h3 class="mb-4 fw-bold">Request Information</h3>
              
              <?php if (isset($_GET['form_submitted']) && $_GET['form_submitted'] == 'success'): ?>
              <div class="alert alert-success" role="alert" style="padding: 10px; margin-bottom: 15px; border-radius: 5px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb;">
                Request submitted successfully! Our counselors will contact you soon.
              </div>
              <?php endif; ?>
              <form action="process_form.php" method="POST">
                <div class="form-row">
                  <input type="text" name="full_name" class="custom-input" placeholder="Full Name" required="">
                  <input type="tel" name="phone" class="custom-input" placeholder="Phone Number" required="">
                </div>
                <input type="email" name="email" class="custom-input" placeholder="Email Address" required="">
                <input type="text" name="course" class="custom-input" required="" placeholder="Course/Destination Interested In">
                <input type="text" name="city" class="custom-input" placeholder="City">
                <textarea name="questions" class="custom-input" rows="3" placeholder="Any specific questions?"></textarea>
                        <button type="submit" class="submit-btn">Submit Application Form</button>
              </form>
            </div>
          </div>
        </div>
    </div>
 </section>

    <!-- Contact Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fw-bold" id="contactModalLabel" style="color: var(--primary);">Singapore Student Pass Checklist</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4" style="line-height: 1.6; font-size: 0.95rem;">
                    <h5 class="mb-3 fw-bold" style="color: var(--accent);">Complete Student Visa Document Checklist | The Global Ties</h5>
                    <p class="text-muted mb-4">Singapore is one of Asia's premier education destinations, offering globally recognised universities, world-class infrastructure, and excellent career opportunities. International students pursuing full-time studies in Singapore are generally required to obtain a Student Pass, issued by the Immigration & Checkpoints Authority (ICA). Most educational institutions registered with the Committee for Private Education (CPE) or autonomous universities assist students with the Student Pass application through the SOLAR+ system. (ica.gov.sg)</p>

                    <h5 class="mt-4 mb-3 fw-bold" style="color: var(--primary);">Mandatory Documents</h5>
                    
                    <div class="mb-3">
                        <strong class="text-dark">1. Valid Passport</strong>
                        <ul class="text-muted mt-2">
                            <li>Original passport valid for at least 6 months beyond your intended stay.</li>
                            <li>Passport should have sufficient blank pages.</li>
                            <li>Copies of previous passports (if applicable).</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">2. Letter of Acceptance</strong>
                        <ul class="text-muted mt-2">
                            <li>Official Offer Letter or Admission Letter issued by a recognised Singapore educational institution.</li>
                            <li>The institution should be authorised to enrol international students.</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">3. Student Pass Application (SOLAR+)</strong>
                        <ul class="text-muted mt-2">
                            <li>Student Pass application submitted through the Student's Pass Online Application & Registration (SOLAR+) system.</li>
                            <li>Application Reference Number issued by the institution.</li>
                            <li>Completed eForm 16 (where applicable). (ica.gov.sg)</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">4. Passport-Size Photograph</strong>
                        <ul class="text-muted mt-2">
                            <li>Recent passport-size colour photograph.</li>
                            <li>Must meet ICA photo specifications.</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">5. Proof of Tuition Fee Payment</strong>
                        <ul class="text-muted mt-2">
                            <li>Tuition fee payment receipt.</li>
                            <li>Admission deposit receipt (if applicable).</li>
                            <li>Official payment confirmation from the institution.</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">6. Proof of Financial Support</strong>
                        <p class="text-muted mt-2 mb-1">Students should provide evidence demonstrating sufficient funds to cover:</p>
                        <ul class="text-muted">
                            <li>Tuition Fees</li>
                            <li>Living Expenses</li>
                            <li>Accommodation</li>
                            <li>Daily personal expenses</li>
                        </ul>
                        <p class="text-muted mt-2 mb-1">Accepted financial documents include:</p>
                        <ul class="text-muted">
                            <li>Recent Bank Statements</li>
                            <li>Education Loan Sanction Letter</li>
                            <li>Scholarship Award Letter</li>
                            <li>Sponsor's Financial Documents</li>
                            <li>Fixed Deposit Certificates (if applicable)</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">7. Academic Documents</strong>
                        <ul class="text-muted mt-2">
                            <li>10th Mark Sheet & Certificate</li>
                            <li>12th Mark Sheet & Certificate</li>
                            <li>Bachelor's Degree (for postgraduate applicants)</li>
                            <li>Consolidated Mark Sheets</li>
                            <li>Degree/Provisional Certificate</li>
                            <li>Transfer Certificate (if applicable)</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">8. English Language Proficiency</strong>
                        <p class="text-muted mt-2 mb-1">Provide valid English language test scores where required:</p>
                        <ul class="text-muted">
                            <li>IELTS Academic</li>
                            <li>TOEFL iBT</li>
                            <li>PTE Academic</li>
                            <li>Other accepted English language qualifications.</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">9. Statement of Purpose (If Required)</strong>
                        <p class="text-muted mt-2 mb-1">A Statement of Purpose should explain:</p>
                        <ul class="text-muted">
                            <li>Why you chose Singapore.</li>
                            <li>Why you selected the university and programme.</li>
                            <li>Your academic background.</li>
                            <li>Career goals after graduation.</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">10. Medical Examination</strong>
                        <p class="text-muted mt-2 mb-0">Students may be required to undergo a medical examination, including a medical report and chest X-ray, depending on ICA and institutional requirements. The medical examination may be completed before or after arrival as instructed. (ica.gov.sg)</p>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">11. Accommodation Details</strong>
                        <p class="text-muted mt-2 mb-1">Provide accommodation information such as:</p>
                        <ul class="text-muted">
                            <li>University Hostel Confirmation</li>
                            <li>Rental Agreement</li>
                            <li>Student Residence Booking</li>
                            <li>Temporary Accommodation Confirmation</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">12. Travel & Health Insurance</strong>
                        <p class="text-muted mt-2 mb-0">Many institutions require students to have medical and travel insurance for the duration of their studies. Students should verify their university's insurance requirements before travelling.</p>
                    </div>

                    <h5 class="mt-4 mb-3 fw-bold" style="color: var(--primary);">Additional Supporting Documents (If Applicable)</h5>
                    <ul class="text-muted">
                        <li>Resume / Curriculum Vitae (CV)</li>
                        <li>Scholarship Award Letter</li>
                        <li>Sponsorship Letter</li>
                        <li>Employment Experience Certificates</li>
                        <li>Internship Certificates</li>
                        <li>Previous Singapore Visa Copies</li>
                        <li>Birth Certificate (if requested)</li>
                        <li>Marriage Certificate (if applicable)</li>
                        <li>Name Change Affidavit</li>
                        <li>Certified translations for documents not issued in English.</li>
                    </ul>

                    <h5 class="mt-4 mb-3 fw-bold" style="color: var(--primary);">Before You Submit Your Application</h5>
                    <p class="text-muted mb-1">Ensure that:</p>
                    <ul class="text-muted">
                        <li>All information matches your passport and admission letter.</li>
                        <li>Your Student Pass application is correctly submitted through SOLAR+.</li>
                        <li>Financial documents clearly demonstrate sufficient funds.</li>
                        <li>Academic documents are complete and organised.</li>
                        <li>Medical examination requirements have been completed (if applicable).</li>
                        <li>All uploaded documents are clear and legible.</li>
                        <li>Original documents are available for verification if requested.</li>
                    </ul>

                    <h5 class="mt-4 mb-3 fw-bold" style="color: var(--primary);">After Student Pass Approval</h5>
                    <p class="text-muted mb-1">Carry the following documents while travelling:</p>
                    <ul class="text-muted">
                        <li>Passport</li>
                        <li>Student Pass In-Principle Approval (IPA) Letter</li>
                        <li>University Admission Letter</li>
                        <li>Tuition Fee Receipt</li>
                        <li>Financial Documents</li>
                        <li>Accommodation Details</li>
                        <li>Flight Ticket</li>
                        <li>Medical Reports (if applicable)</li>
                        <li>Academic Certificates</li>
                        <li>Emergency Contact Details</li>
                        <li>Copies of all important documents</li>
                    </ul>

                    <p class="text-muted mt-3 mb-1">After arriving in Singapore, students must:</p>
                    <ul class="text-muted mb-0">
                        <li>Complete Student Pass formalities with the Immigration & Checkpoints Authority (ICA).</li>
                        <li>Submit biometrics (if required).</li>
                        <li>Collect the Student Pass card as instructed by ICA and the institution. (ica.gov.sg)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </main>
  <?php include 'include/footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Mobile Menu Drawer
            const menuToggle = document.getElementById('mobile-menu-toggle');
            const menuClose = document.getElementById('mobile-menu-close');
            const mobileDrawer = document.getElementById('mobile-drawer');
            const overlay = document.getElementById('mobile-drawer-overlay');

            function toggleMenu() {
                mobileDrawer.classList.toggle('active');
                overlay.classList.toggle('active');
                document.body.style.overflow = mobileDrawer.classList.contains('active') ? 'hidden' : '';
            }

            if (menuToggle && menuClose && overlay) {
                menuToggle.addEventListener('click', toggleMenu);
                menuClose.addEventListener('click', toggleMenu);
                overlay.addEventListener('click', toggleMenu);
            }

            // Sticky Header Shadow
            const header = document.getElementById('main-header');
            if (header) {
                window.addEventListener('scroll', function () {
                    if (window.scrollY > 10) {
                        header.classList.add('scrolled');
                    } else {
                        header.classList.remove('scrolled');
                    }
                });
            }

            // Luxury Slider Logic
            window.toggleCard = function (event, btn) {
                event.preventDefault();
                const cardText = btn.previousElementSibling;
                cardText.classList.toggle('expanded');
                if (cardText.classList.contains('expanded')) {
                    btn.innerHTML = 'Read Less &uarr;';
                } else {
                    btn.innerHTML = 'Read More &rarr;';
                }
            };

            const track = document.getElementById('opp-track');
            const dots = document.querySelectorAll('.opp-pagination .dot');
            const totalSlides = document.querySelectorAll('.opp-slide').length;
            let currentSlide = 0;
            let slideInterval;

            function updateSlider() {
                if (!track) return;
                const slideWidth = document.querySelector('.opp-slide').offsetWidth;
                const maxScroll = Math.max(0, track.scrollWidth - track.parentElement.offsetWidth);

                let translation = currentSlide * slideWidth;
                if (translation > maxScroll) {
                    translation = maxScroll;
                }

                track.style.transform = `translateX(-${translation}px)`;

                dots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === currentSlide);
                });
            }

            window.moveSlide = function (direction) {
                const slideWidth = document.querySelector('.opp-slide').offsetWidth;
                const maxScroll = Math.max(0, track.scrollWidth - track.parentElement.offsetWidth);

                if (direction > 0 && currentSlide * slideWidth >= maxScroll) {
                    currentSlide = 0;
                } else if (direction < 0 && currentSlide === 0) {
                    currentSlide = Math.ceil(maxScroll / slideWidth);
                } else {
                    currentSlide += direction;
                }

                updateSlider();
                resetInterval();
            };

            window.goToSlide = function (index) {
                currentSlide = index;
                updateSlider();
                resetInterval();
            };

            function resetInterval() {
                clearInterval(slideInterval);
                slideInterval = setInterval(() => {
                    window.moveSlide(1);
                }, 5000);
            }

            if (track) {
                window.addEventListener('resize', updateSlider);
                resetInterval();
            }

            // Reel Slider Logic
            const reelTrack = document.getElementById('reel-track');
            const reelDots = document.querySelectorAll('#reel-pagination .dot');
            const totalReelSlides = document.querySelectorAll('.reel-slide').length;
            let currentReelSlide = 0;
            let reelSlideInterval;

            function updateReelSlider() {
                if (!reelTrack) return;
                const slideWidth = document.querySelector('.reel-slide').offsetWidth;
                const maxScroll = Math.max(0, reelTrack.scrollWidth - reelTrack.parentElement.offsetWidth);

                let translation = currentReelSlide * slideWidth;
                if (translation > maxScroll) {
                    translation = maxScroll;
                }

                reelTrack.style.transform = `translateX(-${translation}px)`;

                reelDots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === currentReelSlide);
                });
            }

            window.moveReelSlide = function (direction) {
                const slideWidth = document.querySelector('.reel-slide').offsetWidth;
                const maxScroll = Math.max(0, reelTrack.scrollWidth - reelTrack.parentElement.offsetWidth);

                if (direction > 0 && currentReelSlide * slideWidth >= maxScroll) {
                    currentReelSlide = 0;
                } else if (direction < 0 && currentReelSlide === 0) {
                    currentReelSlide = Math.ceil(maxScroll / slideWidth);
                } else {
                    currentReelSlide += direction;
                }

                updateReelSlider();
                resetReelInterval();
            };

            window.goToReelSlide = function (index) {
                currentReelSlide = index;
                updateReelSlider();
                resetReelInterval();
            };

            function resetReelInterval() {
                clearInterval(reelSlideInterval);
                reelSlideInterval = setInterval(() => {
                    window.moveReelSlide(1);
                }, 5000);
            }

            if (reelTrack) {
                window.addEventListener('resize', updateReelSlider);
                resetReelInterval();
            }
        });
    </script>
</body>

</html>


