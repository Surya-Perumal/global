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
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
   <?php include 'include/header.php'; ?>

    <main>
<section class="about-hero">
    <div class="container aos-init aos-animate" data-aos="fade-up">
      <h1>Study in<span class="accent-text" style="color:var(--accent);"> Canada</span></h1>
      <p>Bridging the gap between your educational dreams and global realities. We are your trusted partners in international education and career advancement.</p>
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
                        Study in Canada
                    </span>
                </nav>
            </div>
        </div>

        <!-- Section 2: Introduction -->
        <section class="canada-intro">
    <div class="layout-container intro-grid">
        <div class="intro-image">
            <img src="img/STUDY.png"
                alt="Students in Canada">
        </div>

        <div class="intro-content">
            <span class="gold-label">Staying in Canada permanently | the global ties</span>

            <h2 class="section-title">
                Why Study in
                <span class="accent-text">CANADA </span>
            </h2>

            <p class="hero-description">
                Canada has one of the best and most respected education systems in the world. Every year, thousands of students from other countries pursue their educational goals in Canada.
                <br><br>
                With new ways to gain valuable Canadian work experience during and after your studies, the advantages of studying in Canada are great. There are also permanent immigration options for international students who have graduated from post-secondary programs in Canada.
            </p>

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
            <span class="accent-text">Canada</span>
          </h2>
                    <p class="hero-description">At The Global Ties, we provide end-to-end guidance throughout your study abroad journey from selecting the right university and program to application support, scholarship guidance, visa assistance, pre-departure preparation, and post-arrival support. Our experienced counsellors are dedicated to helping you make informed decisions and achieve your educational and career aspirations with confidence.</p>

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
                                            <h4>Working on campus</h4>
                                        </div>
                                    </div>
                                    <div class="card-divider"></div>
                                    <p class="card-text">If you have a valid study permit, you may be able to work on
                                        the campus of the institution you attend without a work permit. You can work for
                                        the institution itself, or for a private business located on the campus.</p>
                                    <a href="#" class="read-more-btn" onclick="toggleCard(event, this)">Read More
                                        &rarr;</a>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="opp-slide">
                                <div class="opp-card luxury-card">
                                    <div class="card-author-area">
                                        <div class="author-info">
                                            <h4>Working off campus</h4>
                                        </div>
                                    </div>
                                    <div class="card-divider"></div>

                                    <p class="card-text">To work off campus, you must have a work permit. Through the
                                        Off-Campus Work Permit Program, you can work part-time during regular academic
                                        sessions (20 hours per week) and full-time during scheduled breaks, such as
                                        winter and summer holidays, and spring break. You can work in any occupation,
                                        and you can change employers whenever you like.</p>
                                    <a href="#" class="read-more-btn" onclick="toggleCard(event, this)">Read More
                                        &rarr;</a>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="opp-slide">
                                <div class="opp-card luxury-card">
                                    <div class="card-author-area">
                                        <div class="author-info">
                                            <h4>Working after graduation</h4>
                                        </div>
                                    </div>
                                    <div class="card-divider"></div>

                                    <p class="card-text">The Post-Graduation/Diploma Work Permit Program allows you to
                                        gain valuable Canadian work experience after you have completed your studies in
                                        Canada. This can help you apply to become a permanent resident of Canada.</p>
                                    <a href="#" class="read-more-btn" onclick="toggleCard(event, this)">Read More
                                        &rarr;</a>
                                </div>
                            </div>
                            <!-- Card 4 -->
                            <div class="opp-slide">
                                <div class="opp-card luxury-card">
                                    <div class="card-author-area">
                                        <div class="author-info">
                                            <h4>Staying permanently</h4>
                                        </div>
                                    </div>
                                    <div class="card-divider"></div>

                                    <p class="card-text">If you want to make Canada your permanent home, there are a
                                        number of ways to apply. In most cases, you will not need to leave Canada.</p>
                                    <a href="#" class="read-more-btn" onclick="toggleCard(event, this)">Read More
                                        &rarr;</a>
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
                    <h2 class="destinations-titles">Why International Students Choose Canada</h2>
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
            <p class="hero-description mx-auto" style="max-width: 700px;">
                Tuition fee comparison by programme level in Canada.
            </p>
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
                        <td style="padding: 15px;">CAD 18,000 – CAD 40,000 / year</td>
                        <td style="padding: 15px;">Fees vary depending on university and program.</td>
                    </tr>

                    <tr>
                        <td style="padding: 15px; font-weight: 500;">Postgraduate Master's</td>
                        <td style="padding: 15px;">CAD 17,000 – CAD 35,000 / year</td>
                        <td style="padding: 15px;">MBA and professional programs generally cost more.</td>
                    </tr>

                    <tr>
                        <td style="padding: 15px; font-weight: 500;">MBA</td>
                        <td style="padding: 15px;">CAD 30,000 – CAD 70,000+</td>
                        <td style="padding: 15px;">Top business schools charge premium tuition fees.</td>
                    </tr>

                    <tr>
                        <td style="padding: 15px; font-weight: 500;">PhD / Doctoral</td>
                        <td style="padding: 15px;">CAD 7,000 – CAD 20,000 / year</td>
                        <td style="padding: 15px;">Many universities offer scholarships and research funding.</td>
                    </tr>

                    <tr>
                        <td style="padding: 15px; font-weight: 500;">Diploma / Advanced Diploma</td>
                        <td style="padding: 15px;">CAD 14,000 – CAD 25,000 / year</td>
                        <td style="padding: 15px;">Popular option at public colleges with strong career outcomes.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Cost of Living Section -->
<section class="cost-living-section" style="padding: 30px 0; background-color: #f8f9fa;">
    <div class="layout-container">

        <div class="section-header text-center mb-2" data-aos="fade-up">
            <span class="section-subtitle">STUDENT EXPENSES</span>
            <h2 class="section-title">Cost of Living <span class="accent-text">by City</span></h2>
            <p class="hero-description mx-auto" style="max-width:700px;">
                Estimated monthly living expenses for international students in Canada.
            </p>
        </div>

        <div class="table-responsive" data-aos="fade-up" data-aos-delay="100">
            <table class="table table-hover table-bordered shadow-sm" style="background:white;border-radius:10px;overflow:hidden;">
                <thead style="background:var(--primary);color:white;">
                    <tr>
                        <th style="padding:15px;">City / Province</th>
                        <th style="padding:15px;">Monthly Living Cost</th>
                        <th style="padding:15px;">Representative Universities</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td style="padding:15px;font-weight:500;">Toronto, Ontario</td>
                        <td style="padding:15px;">CAD 1,800 – CAD 2,800</td>
                        <td style="padding:15px;">University of Toronto, Toronto Metropolitan University, York University</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">Vancouver, British Columbia</td>
                        <td style="padding:15px;">CAD 1,700 – CAD 2,700</td>
                        <td style="padding:15px;">University of British Columbia, Simon Fraser University</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">Montreal, Quebec</td>
                        <td style="padding:15px;">CAD 1,200 – CAD 2,000</td>
                        <td style="padding:15px;">McGill University, Concordia University</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">Calgary / Edmonton, Alberta</td>
                        <td style="padding:15px;">CAD 1,200 – CAD 2,000</td>
                        <td style="padding:15px;">University of Calgary, University of Alberta</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">Ottawa / Winnipeg / Halifax</td>
                        <td style="padding:15px;">CAD 1,100 – CAD 1,800</td>
                        <td style="padding:15px;">University of Ottawa, University of Manitoba, Dalhousie University</td>
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
                    <h2 class="section-title">Part-Time Jobs & <span class="accent-text">Work Opportunities</span> in Canada</h2>
                </div>
                
                <div class="row g-5 align-items-center mb-5">
                    <div class="col-lg-6" data-aos="fade-right">
                        <h4 class="fw-bold mb-3" style="color: var(--primary);">Part-Time Jobs in Canada</h4>
                        <p class="text-muted" style="line-height: 1.8;">Canada offers international students excellent opportunities to gain valuable work experience while pursuing their studies. Eligible students can work part-time during academic sessions and full-time during scheduled breaks, helping them develop professional skills, build industry connections, and contribute toward their living expenses.</p>
                        <p class="text-muted" style="line-height: 1.8;">Part-time jobs are available across a wide range of industries, including retail, hospitality, customer service, restaurants, warehouses, administration, healthcare support, and campus-based roles. These opportunities allow students to improve their communication skills, gain Canadian workplace experience, and enhance their resumes while balancing their academic commitments.</p>
                        <p class="text-muted" style="line-height: 1.8;">Working during your studies not only provides financial support but also helps you adapt to Canadian workplace culture, build confidence, and prepare for future career opportunities after graduation.</p>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="position-relative">
                            <img src="img/part-time.webp" alt="Work in Canada" class="img-fluid rounded-4 shadow-lg w-100" style="object-fit: cover; height: 400px;">
                            <div class="position-absolute bottom-0 start-0 w-100 p-4 rounded-bottom-4" style="background: linear-gradient(to top, rgba(9, 30, 62, 0.9), transparent);">
                                <h5 class="text-white fw-bold mb-1">Post-Graduation Work Opportunities</h5>
                                <p class="text-white opacity-75 mb-0" style="font-size: 0.9rem;">Establish yourself in Canada's competitive job market.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4 mb-5" data-aos="fade-up">
                    <div class="col-12">
                        <div class="bg-white p-5 rounded-4 shadow-sm" style="border-left: 5px solid var(--accent);">
                            <h4 class="fw-bold mb-4" style="color: var(--primary);">Post-Graduation Work Opportunities</h4>
                            <p class="text-muted mb-4">After successfully completing an eligible program, many international graduates may qualify for post-graduation work opportunities, allowing them to gain valuable Canadian work experience. This experience can strengthen career prospects, improve employability, and help graduates establish themselves in Canada's competitive job market.</p>
                            <p class="text-muted mb-0">Canada's growing industries—including Information Technology, Engineering, Healthcare, Finance, Business, Construction, Hospitality, and Skilled Trades—offer excellent employment opportunities for qualified graduates.</p>
                        </div>
                    </div>
                </div>

                <div class="row g-5 mb-5">
                    <div class="col-lg-6" data-aos="fade-right">
                        <h4 class="fw-bold mb-4" style="color: var(--primary);">Benefits of Working While Studying</h4>
                        <div class="row g-3">
                            <div class="col-12">
                                <ul class="list-unstyled mb-0" style="line-height: 2;">
                                    <li class="d-flex align-items-start mb-3">
                                        <div class="me-3 mt-1" style="color: var(--accent);"><i class="fas fa-check-circle fs-5"></i></div>
                                        <span class="text-muted fw-bold">Gain valuable Canadian work experience.</span>
                                    </li>
                                    <li class="d-flex align-items-start mb-3">
                                        <div class="me-3 mt-1" style="color: var(--accent);"><i class="fas fa-check-circle fs-5"></i></div>
                                        <span class="text-muted fw-bold">Earn income to help with living expenses.</span>
                                    </li>
                                    <li class="d-flex align-items-start mb-3">
                                        <div class="me-3 mt-1" style="color: var(--accent);"><i class="fas fa-check-circle fs-5"></i></div>
                                        <span class="text-muted fw-bold">Develop communication and professional skills.</span>
                                    </li>
                                    <li class="d-flex align-items-start mb-3">
                                        <div class="me-3 mt-1" style="color: var(--accent);"><i class="fas fa-check-circle fs-5"></i></div>
                                        <span class="text-muted fw-bold">Build a strong resume and professional network.</span>
                                    </li>
                                    <li class="d-flex align-items-start mb-3">
                                        <div class="me-3 mt-1" style="color: var(--accent);"><i class="fas fa-check-circle fs-5"></i></div>
                                        <span class="text-muted fw-bold">Improve employment opportunities after graduation.</span>
                                    </li>
                                    <li class="d-flex align-items-start mb-3">
                                        <div class="me-3 mt-1" style="color: var(--accent);"><i class="fas fa-check-circle fs-5"></i></div>
                                        <span class="text-muted fw-bold">Gain exposure to Canadian workplace culture.</span>
                                    </li>
                                    <li class="d-flex align-items-start">
                                        <div class="me-3 mt-1" style="color: var(--accent);"><i class="fas fa-check-circle fs-5"></i></div>
                                        <span class="text-muted fw-bold">Enhance career prospects through practical experience.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="bg-primary text-white p-5 rounded-4 h-100 d-flex flex-column justify-content-center position-relative overflow-hidden" style="background: var(--primary) !important;">
                            <div class="position-absolute" style="top: -20px; right: -20px; opacity: 0.1; font-size: 150px;">
                                <i class="fas fa-globe-americas"></i>
                            </div>
                            <h4 class="fw-bold mb-4 position-relative z-1 text-white">How The Global Ties Can Help</h4>
                            <p class="mb-4 position-relative z-1 text-light" style="line-height: 1.8; opacity: 0.9;">At The Global Ties, we guide students throughout their Canadian education journey. Our experienced counsellors provide assistance with university selection, admissions, study permit applications, financial documentation, and pre-departure preparation. We also offer guidance on understanding student work eligibility, post-study work opportunities, and career planning, helping you make informed decisions and maximize your international education experience.</p>
                            <div class="p-3 rounded-3 position-relative z-1" style="background: rgba(255,255,255,0.1); border-left: 3px solid var(--accent);">
                                <p class="mb-0 small" style="opacity: 0.8;"><strong>Note:</strong> Work eligibility, the number of hours students may work, and post-graduation work permit requirements are determined by the Canadian government and may change over time. Students should always ensure they meet the latest eligibility requirements and follow current immigration regulations.</p>
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
The Global Ties provides comprehensive end-to-end support for students planning to study in Canada, ensuring a smooth and stress-free journey from the initial consultation to successful settlement. Our experienced counsellors offer personalized guidance to help you choose the right university, program, and study destination based on your academic qualifications, career aspirations, and budget.

Our services include university and college admissions, profile evaluation, course selection, document verification, application preparation, Statement of Purpose (SOP) review, Letter of Recommendation (LOR) guidance, resume preparation, study permit application assistance, financial documentation support, education loan guidance, scholarship assistance, biometric appointment support, medical examination guidance, visa interview preparation, and continuous application tracking.</p>                 

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
                    <h4 class="modal-title fw-bold" id="contactModalLabel" style="color: var(--primary);">Canada Student Visa (Study Permit) Checklist</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4" style="line-height: 1.6; font-size: 0.95rem;">
                    <h5 class="mb-3 fw-bold" style="color: var(--accent);">Complete Document Checklist | The Global Ties</h5>
                    <p class="text-muted mb-4">Applying for a Canadian Study Permit requires accurate documentation and careful preparation. Missing or incomplete documents can lead to delays or refusal of your application. The Global Ties provides complete guidance to help students prepare a strong and successful visa application.</p>

                    <h5 class="mt-4 mb-3 fw-bold" style="color: var(--primary);">Mandatory Documents</h5>
                    
                    <div class="mb-3">
                        <strong class="text-dark">1. Valid Passport</strong>
                        <ul class="text-muted mt-2">
                            <li>Original passport valid for the duration of your studies.</li>
                            <li>At least one blank page.</li>
                            <li>Copies of previous passports (if applicable).</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">2. Letter of Acceptance (LOA)</strong>
                        <ul class="text-muted mt-2">
                            <li>Official Letter of Acceptance from a Canadian Designated Learning Institution (DLI).</li>
                            <li>The LOA must include your program details, start date, tuition fees, and DLI number.</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">3. Provincial Attestation Letter (PAL) / Territorial Attestation Letter (TAL)</strong>
                        <ul class="text-muted mt-2">
                            <li>Required for most international students applying for a Canadian Study Permit.</li>
                            <li>Students studying in Quebec may need a Quebec Acceptance Certificate (CAQ) instead.</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">4. Completed Study Permit Application</strong>
                        <ul class="text-muted mt-2">
                            <li>Complete the online Study Permit application through the IRCC portal.</li>
                            <li>Ensure all information matches your passport and Letter of Acceptance.</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">5. Proof of Financial Support</strong>
                        <p class="text-muted mt-2 mb-1">Provide evidence that you can cover:</p>
                        <ul class="text-muted">
                            <li>Tuition fees</li>
                            <li>Living expenses</li>
                            <li>Return transportation costs (if applicable)</li>
                        </ul>
                        <p class="text-muted mt-2 mb-1">Accepted financial documents include:</p>
                        <ul class="text-muted">
                            <li>Recent bank statements</li>
                            <li>Education loan sanction letter</li>
                            <li>Guaranteed Investment Certificate (GIC), where applicable</li>
                            <li>Scholarship or sponsorship letter</li>
                            <li>Tuition fee payment receipt</li>
                            <li>Income documents of sponsor/parents</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">6. Academic Documents</strong>
                        <ul class="text-muted mt-2">
                            <li>10th Mark Sheet & Certificate</li>
                            <li>12th Mark Sheet & Certificate</li>
                            <li>Bachelor's Degree (for postgraduate applicants)</li>
                            <li>Consolidated Mark Sheets</li>
                            <li>Degree/Provisional Certificate</li>
                            <li>Backlog Certificate (if applicable)</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">7. English Language Test Score</strong>
                        <p class="text-muted mt-2 mb-1">If required by your institution:</p>
                        <ul class="text-muted">
                            <li>IELTS Academic</li>
                            <li>PTE Academic</li>
                            <li>TOEFL iBT</li>
                            <li>Other accepted English language tests</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">8. Letter of Explanation (Statement of Purpose)</strong>
                        <p class="text-muted mt-2 mb-1">A well-written Letter of Explanation should clearly explain:</p>
                        <ul class="text-muted">
                            <li>Why you chose Canada</li>
                            <li>Why you selected the institution and program</li>
                            <li>Your academic and career goals</li>
                            <li>Your intention to comply with study permit conditions</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">9. Passport-Size Photographs</strong>
                        <p class="text-muted mt-2 mb-0">Recent photographs meeting IRCC photo specifications.</p>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">10. Medical Examination</strong>
                        <p class="text-muted mt-2 mb-1">If required:</p>
                        <ul class="text-muted">
                            <li>Immigration Medical Examination (IME)</li>
                            <li>Conducted only by an IRCC-approved Panel Physician.</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">11. Biometrics</strong>
                        <p class="text-muted mt-2 mb-1">Most applicants are required to provide:</p>
                        <ul class="text-muted">
                            <li>Fingerprints</li>
                            <li>Digital Photograph at an authorized Visa Application Centre (VAC).</li>
                        </ul>
                    </div>

                    <h5 class="mt-4 mb-3 fw-bold" style="color: var(--primary);">Additional Supporting Documents (If Applicable)</h5>
                    <ul class="text-muted">
                        <li>Police Clearance Certificate (if requested)</li>
                        <li>Scholarship Award Letter</li>
                        <li>Sponsorship Letter</li>
                        <li>Marriage Certificate</li>
                        <li>Name Change Affidavit</li>
                        <li>Previous Canadian Visa Copies</li>
                        <li>Employment Experience Letters</li>
                        <li>Resume/CV (for postgraduate applicants)</li>
                    </ul>

                    <h5 class="mt-4 mb-3 fw-bold" style="color: var(--primary);">Before You Submit Your Application</h5>
                    <p class="text-muted mb-1">Ensure that:</p>
                    <ul class="text-muted">
                        <li>All information matches your passport and Letter of Acceptance.</li>
                        <li>Financial documents satisfy current IRCC requirements.</li>
                        <li>Documents not in English or French are translated by a certified translator.</li>
                        <li>All uploaded copies are clear and legible.</li>
                        <li>Original documents are available upon request.</li>
                    </ul>

                    <h5 class="mt-4 mb-3 fw-bold" style="color: var(--primary);">After Study Permit Approval</h5>
                    <p class="text-muted mb-1">Carry the following documents while travelling:</p>
                    <ul class="text-muted">
                        <li>Passport</li>
                        <li>Port of Entry (POE) Letter of Introduction</li>
                        <li>Valid Temporary Resident Visa (TRV) or Electronic Travel Authorization (eTA), if applicable</li>
                        <li>Letter of Acceptance</li>
                        <li>Tuition Fee Receipt</li>
                        <li>Proof of Funds</li>
                        <li>Accommodation Details</li>
                        <li>Flight Ticket</li>
                        <li>Medical Insurance (recommended)</li>
                        <li>Copies of all important documents</li>
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

