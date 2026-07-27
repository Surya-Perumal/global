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
      <h1>Study in<span class="accent-text" style="color:var(--accent);"> the USA</span></h1>
      <p>Unlock your potential with access to cutting-edge research, diverse programs, and some of the world's highest-ranked universities.</p>
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
                        Study in USA
                    </span>
                </nav>
            </div>
        </div>

        <!-- Section 2: Introduction -->
        <section class="canada-intro">
            <div class="layout-container intro-grid">
                <div class="intro-image">
                    <img src="img/day-time.webp"
                        alt="Students in Canada">
                </div>
                <div class="intro-content">
                    <span class="gold-label">Staying in USA permanently | the global ties</span>

<h2 class="section-title">
Why Study in
            <span class="accent-text">USA</span>
          </h2>
                    <p class="hero-description">
                        The United States has established itself as one of the world’s most preferred study destinations, offering a globally recognized education system, innovative learning methods, and excellent career opportunities. American universities are known for their academic excellence, advanced research facilities, diverse programs, and strong connections with global industries.

Some of the key advantages of choosing the USA for higher education include:

Globally Recognized Education System

A degree from a US university is highly valued and respected worldwide. American institutions maintain high academic standards and provide students with internationally recognized qualifications that enhance career opportunities across the globe.
</p>   

                    
                    <div>
                        <a href="javascript:void(0);" class="cta-btn" data-bs-toggle="modal" data-bs-target="#contactModal">
                           Read more
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
            <span class="accent-text">the USA</span>
          </h2>
            <p class="hero-description">
               The USA offers world-class education, globally recognized degrees, outstanding career opportunities, cutting-edge research facilities, practical training programs, financial assistance, and flexible study options that help students build successful international careers. Home to many of the world's top-ranked universities, the USA is one of the most preferred destinations for international students.
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
                                    <h4>Global Recognition</h4>
                                </div>
                            </div>
                            <div class="card-divider"></div>
                            <p class="card-text">
                                U.S. degrees enjoy the highest international acceptability and reputation. As an
                                investment in your future, a U.S. education offers excellent value, with a wide range
                                of tuition options, living costs, and financial support available through universities.
                            </p>
                            <a href="#" class="read-more-btn" onclick="toggleCard(event, this)">Read More
                                &rarr;</a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="opp-slide">
                        <div class="opp-card luxury-card">
                            <div class="card-author-area">
                                <div class="author-info">
                                    <h4>Flexible Learning</h4>
                                </div>
                            </div>
                            <div class="card-divider"></div>

                            <p class="card-text">
                                Students have the freedom to choose from various courses and even transfer between
                                institutions. Beyond academics, universities encourage leadership, creativity, and
                                personal growth through social, cultural, and sports activities.
                            </p>
                            <a href="#" class="read-more-btn" onclick="toggleCard(event, this)">Read More
                                &rarr;</a>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="opp-slide">
                        <div class="opp-card luxury-card">
                            <div class="card-author-area">
                                <div class="author-info">
                                    <h4>Top Universities & Training</h4>
                                </div>
                            </div>
                            <div class="card-divider"></div>
                            <p class="card-text">
                                Nearly half of the world's top 100 universities are located in the USA. Students also
                                benefit from practical training opportunities during or after their studies, gaining
                                valuable industry experience and improving career prospects.
                            </p>
                            <a href="#" class="read-more-btn" onclick="toggleCard(event, this)">Read More
                                &rarr;</a>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="opp-slide">
                        <div class="opp-card luxury-card">
                            <div class="card-author-area">
                                <div class="author-info">
                                    <h4>Work & Stay Back Options</h4>
                                </div>
                            </div>
                            <div class="card-divider"></div>

                            <p class="card-text">
                                International students can work up to 20 hours per week during studies and 40 hours
                                during vacations, earning approximately $9–15 per hour. F-1 students may also qualify
                                for up to 12 months of post-completion practical training after graduation.
                            </p>
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
                    <h2 class="destinations-titles">Why International Students Choose the USA</h2>
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
            <h2 class="section-title">
                Cost of Study & <span class="accent-text">Tuition Fees</span>
            </h2>
            <p class="hero-description mx-auto" style="max-width:700px;">
                Estimated annual tuition fees for international students studying in the United States.
            </p>
        </div>

        <div class="table-responsive" data-aos="fade-up" data-aos-delay="100">

            <table class="table table-hover table-bordered shadow-sm"
                style="background:#fff;border-radius:10px;overflow:hidden;">

                <thead style="background:var(--primary);color:#fff;">
                    <tr>
                        <th style="padding:15px;">Programme Level</th>
                        <th style="padding:15px;">Typical Annual Fee</th>
                        <th style="padding:15px;">Notes</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td style="padding:15px;font-weight:500;">Undergraduate (Bachelor's)</td>
                        <td style="padding:15px;">USD 20,000 – USD 45,000 / year</td>
                        <td style="padding:15px;">Fees vary by public and private universities.</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">Postgraduate (Master's)</td>
                        <td style="padding:15px;">USD 20,000 – USD 50,000 / year</td>
                        <td style="padding:15px;">STEM, Business, and Engineering programmes generally cost more.</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">MBA</td>
                        <td style="padding:15px;">USD 35,000 – USD 80,000+ / year</td>
                        <td style="padding:15px;">Top business schools have significantly higher tuition fees.</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">PhD / Doctoral</td>
                        <td style="padding:15px;">USD 20,000 – USD 50,000 / year</td>
                        <td style="padding:15px;">Many students receive research assistantships or scholarships.</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">Medicine / Clinical Programs</td>
                        <td style="padding:15px;">USD 40,000 – USD 70,000+ / year</td>
                        <td style="padding:15px;">Professional medical programmes are among the most expensive.</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>
</section>

<!-- Cost of Living Section -->
<section class="cost-living-section" style="padding:30px 0;background:#f8f9fa;">

    <div class="layout-container">

        <div class="section-header text-center mb-2" data-aos="fade-up">

            <span class="section-subtitle">STUDENT EXPENSES</span>

            <h2 class="section-title">
                Cost of Living <span class="accent-text">by City</span>
            </h2>

            <p class="hero-description mx-auto" style="max-width:700px;">
                Estimated monthly living expenses for international students in the USA.
            </p>

        </div>

        <div class="table-responsive" data-aos="fade-up" data-aos-delay="100">

            <table class="table table-hover table-bordered shadow-sm"
                style="background:#fff;border-radius:10px;overflow:hidden;">

                <thead style="background:var(--primary);color:#fff;">
                    <tr>
                        <th style="padding:15px;">City / Region</th>
                        <th style="padding:15px;">Monthly Living Cost</th>
                        <th style="padding:15px;">Representative Universities</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td style="padding:15px;font-weight:500;">New York City</td>
                        <td style="padding:15px;">USD 1,800 – USD 2,800</td>
                        <td style="padding:15px;">Columbia University, NYU, CUNY</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">Boston</td>
                        <td style="padding:15px;">USD 1,600 – USD 2,500</td>
                        <td style="padding:15px;">Harvard, MIT, Boston University</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">California (Los Angeles / San Francisco)</td>
                        <td style="padding:15px;">USD 1,700 – USD 2,700</td>
                        <td style="padding:15px;">UCLA, Stanford, UC Berkeley, USC</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">Chicago / Dallas</td>
                        <td style="padding:15px;">USD 1,200 – USD 2,000</td>
                        <td style="padding:15px;">University of Chicago, Northwestern, UT Dallas</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">Midwest & Southern States</td>
                        <td style="padding:15px;">USD 900 – USD 1,500</td>
                        <td style="padding:15px;">Purdue, Iowa State, Kansas State, University of Alabama</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</section>

        <!-- Section 5: Instagram Reels -->
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
<section class="work-opportunities-section" style="padding: 27px 0 0px 0; background-color: #f8f9fa;">
    <div class="layout-container">

        <div class="section-header text-center mb-5" data-aos="fade-up">
            <span class="section-subtitle">CAREER & EARNINGS</span>
            <h2 class="section-title">
                Part-Time Jobs & <span class="accent-text">Work Opportunities</span> in USA
            </h2>
        </div>

        <div class="row g-5 align-items-center mb-5">

            <div class="col-lg-6" data-aos="fade-right">

                <h4 class="fw-bold mb-3" style="color: var(--primary);">
                    Part-Time Jobs in USA
                </h4>

                <p class="text-muted" style="line-height:1.8;">
                    The United States provides international students with opportunities to gain valuable work experience while pursuing their academic studies. Students holding an F-1 visa can work on-campus during their studies and may be eligible for practical training opportunities related to their field of study.
                </p>

                <p class="text-muted" style="line-height:1.8;">
                    International students can explore on-campus employment opportunities such as library assistants, research assistants, teaching assistants, administrative roles, campus service jobs, computer lab assistants, and student support positions. These opportunities help students develop professional skills while adapting to the American work environment.
                </p>

                <p class="text-muted" style="line-height:1.8;">
                    Working while studying helps students gain practical exposure, improve communication skills, build professional networks, manage living expenses, and enhance their career prospects after graduation.
                </p>

            </div>

            <div class="col-lg-6" data-aos="fade-left">

                <div class="position-relative">

                    <img src="img/part-time.webp"
                        alt="Work in USA"
                        class="img-fluid rounded-4 shadow-lg w-100"
                        style="object-fit:cover;height:400px;">

                    <div class="position-absolute bottom-0 start-0 w-100 p-4 rounded-bottom-4"
                        style="background:linear-gradient(to top,rgba(9,30,62,.9),transparent);">

                        <h5 class="text-white fw-bold mb-1">
                            Post-Study Work Opportunities
                        </h5>

                        <p class="text-white opacity-75 mb-0" style="font-size:.9rem;">
                            Gain professional experience through OPT and career opportunities in the USA.
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
                        Post-Study Work Opportunities
                    </h4>

                    <p class="text-muted mb-4">
                        After completing their studies, international graduates in the USA may be eligible for Optional Practical Training (OPT), which allows them to gain practical work experience related to their academic field. Students in eligible STEM programs may qualify for an extended STEM OPT period, providing additional opportunities to build professional expertise.
                    </p>

                    <p class="text-muted mb-0">
                        The USA offers excellent career opportunities across industries including Information Technology, Engineering, Healthcare, Biotechnology, Finance, Business Management, Data Science, Artificial Intelligence, Research, Education, and many other professional fields.
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
                            Gain valuable international work experience.
                        </span>
                    </li>

                    <li class="d-flex align-items-start mb-3">
                        <div class="me-3 mt-1" style="color:var(--accent);">
                            <i class="fas fa-check-circle fs-5"></i>
                        </div>
                        <span class="text-muted fw-bold">
                            Earn income to support personal expenses.
                        </span>
                    </li>

                    <li class="d-flex align-items-start mb-3">
                        <div class="me-3 mt-1" style="color:var(--accent);">
                            <i class="fas fa-check-circle fs-5"></i>
                        </div>
                        <span class="text-muted fw-bold">
                            Improve communication and workplace skills.
                        </span>
                    </li>

                    <li class="d-flex align-items-start mb-3">
                        <div class="me-3 mt-1" style="color:var(--accent);">
                            <i class="fas fa-check-circle fs-5"></i>
                        </div>
                        <span class="text-muted fw-bold">
                            Build professional connections and networks.
                        </span>
                    </li>

                    <li class="d-flex align-items-start mb-3">
                        <div class="me-3 mt-1" style="color:var(--accent);">
                            <i class="fas fa-check-circle fs-5"></i>
                        </div>
                        <span class="text-muted fw-bold">
                            Develop skills valued by global employers.
                        </span>
                    </li>

                    <li class="d-flex align-items-start">
                        <div class="me-3 mt-1" style="color:var(--accent);">
                            <i class="fas fa-check-circle fs-5"></i>
                        </div>
                        <span class="text-muted fw-bold">
                            Increase career opportunities after graduation.
                        </span>
                    </li>

                </ul>

            </div>


            <div class="col-lg-6" data-aos="fade-left">

                <div class="bg-primary text-white p-5 rounded-4 h-100 d-flex flex-column justify-content-center position-relative overflow-hidden"
                    style="background:var(--primary)!important;">

                    <div class="position-absolute"
                        style="top:-20px;right:-20px;opacity:.1;font-size:150px;">
                        <i class="fas fa-globe-americas"></i>
                    </div>

                    <h4 class="fw-bold mb-4 position-relative z-1 text-white">
                        How The Global Ties Can Help
                    </h4>

                    <p class="mb-4 position-relative z-1 text-light"
                        style="line-height:1.8;opacity:.9;">

                        The Global Ties provides complete guidance for students planning to study in the USA. Our experienced counsellors assist with university selection, admission applications, document verification, F-1 visa guidance, financial documentation, scholarship support, accommodation assistance, pre-departure orientation, and post-arrival support. We also help students understand work regulations, OPT opportunities, and career pathways to achieve their professional goals.

                    </p>


                    <div class="p-3 rounded-3 position-relative z-1"
                        style="background:rgba(255,255,255,.1);border-left:3px solid var(--accent);">

                        <p class="mb-0 small" style="opacity:.85;">

                            <strong>Note:</strong> International students must follow F-1 visa employment regulations. Work authorization requirements, permitted working hours, OPT eligibility, and other immigration rules are governed by U.S. immigration authorities and may change over time.

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
                    <p class="hero-description">The Global Ties provides comprehensive end-to-end support for students planning to study in the United States. Our experienced counsellors offer personalized guidance to help you select the right university, program, and study destination based on your academic background, career aspirations, financial plans, and future goals.

Our services include university selection, course and program guidance, profile evaluation, admission application assistance, document verification, Statement of Purpose (SOP) guidance, recommendation letter support, scholarship guidance, education loan assistance, financial documentation support, F-1 student visa application assistance, visa interview preparation, and complete application management.
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
                    <h4 class="modal-title fw-bold" id="contactModalLabel" style="color: var(--primary);">USA Student Visa (F-1 Visa) Checklist</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4" style="line-height: 1.6; font-size: 0.95rem;">
                    <h5 class="mb-3 fw-bold" style="color: var(--accent);">Complete Student Visa Document Checklist | The Global Ties</h5>
                    <p class="text-muted mb-4">The United States is one of the world's leading destinations for higher education, offering internationally recognised degrees, cutting-edge research opportunities, and outstanding career prospects. To study in the USA, international students must obtain an F-1 Student Visa. Careful preparation of all required documents is essential for a successful visa application and interview.</p>

                    <h5 class="mt-4 mb-3 fw-bold" style="color: var(--primary);">Mandatory Documents</h5>
                    
                    <div class="mb-3">
                        <strong class="text-dark">1. Valid Passport</strong>
                        <ul class="text-muted mt-2">
                            <li>Original passport valid for at least six months beyond your intended stay in the USA.</li>
                            <li>Previous passports (if applicable).</li>
                            <li>Ensure your passport details match all visa application documents.</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">2. Form I-20 (Certificate of Eligibility)</strong>
                        <ul class="text-muted mt-2">
                            <li>Original Form I-20 issued by your SEVP-approved U.S. institution.</li>
                            <li>Student must sign the I-20 before attending the visa interview.</li>
                            <li>Verify that your personal details and course information are correct.</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">3. SEVIS Fee Payment Receipt (Form I-901)</strong>
                        <ul class="text-muted mt-2">
                            <li>Proof of payment of the SEVIS I-901 Fee.</li>
                            <li>Carry the printed payment confirmation during your visa interview.</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">4. DS-160 Confirmation Page</strong>
                        <ul class="text-muted mt-2">
                            <li>Completed online DS-160 Non-Immigrant Visa Application.</li>
                            <li>Printed confirmation page with barcode.</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">5. Visa Appointment Confirmation</strong>
                        <ul class="text-muted mt-2">
                            <li>Visa interview appointment confirmation letter.</li>
                            <li>MRV fee payment receipt (if applicable).</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">6. University Admission Letter</strong>
                        <ul class="text-muted mt-2">
                            <li>Official admission or acceptance letter from your U.S. university.</li>
                            <li>Keep both printed and digital copies available.</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">7. Proof of Financial Support</strong>
                        <p class="text-muted mt-2 mb-1">Provide documents demonstrating sufficient funds to cover:</p>
                        <ul class="text-muted">
                            <li>Tuition Fees</li>
                            <li>Living Expenses</li>
                            <li>Health Insurance</li>
                            <li>Other educational expenses</li>
                        </ul>
                        <p class="text-muted mt-2 mb-1">Accepted financial documents include:</p>
                        <ul class="text-muted">
                            <li>Recent Bank Statements</li>
                            <li>Education Loan Sanction Letter</li>
                            <li>Scholarship Award Letter</li>
                            <li>Affidavit of Financial Support (Sponsor)</li>
                            <li>Income Tax Returns (if applicable)</li>
                            <li>Salary Slips of Sponsor</li>
                            <li>Fixed Deposit Certificates (if applicable)</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">8. Academic Documents</strong>
                        <ul class="text-muted mt-2">
                            <li>10th Mark Sheet & Certificate</li>
                            <li>12th Mark Sheet & Certificate</li>
                            <li>Bachelor's Degree (for Master's applicants)</li>
                            <li>Consolidated Mark Sheets</li>
                            <li>Degree/Provisional Certificate</li>
                            <li>Transfer Certificate (if applicable)</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">9. Standardised Test Scores</strong>
                        <p class="text-muted mt-2 mb-1">Carry original score reports if applicable:</p>
                        <ul class="text-muted">
                            <li>IELTS Academic</li>
                            <li>TOEFL iBT</li>
                            <li>PTE Academic</li>
                            <li>SAT</li>
                            <li>ACT</li>
                            <li>GRE</li>
                            <li>GMAT</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">10. Passport-Size Photographs</strong>
                        <p class="text-muted mt-2 mb-0">Recent photographs meeting U.S. visa photo specifications.</p>
                    </div>

                    <h5 class="mt-4 mb-3 fw-bold" style="color: var(--primary);">Additional Supporting Documents (If Applicable)</h5>
                    <ul class="text-muted">
                        <li>Resume / Curriculum Vitae (CV)</li>
                        <li>Statement of Purpose (SOP)</li>
                        <li>Research Proposal (for research programmes)</li>
                        <li>Employment Experience Letters</li>
                        <li>Internship Certificates</li>
                        <li>Previous U.S. Visa Copies</li>
                        <li>Scholarship Letters</li>
                        <li>Assistantship Letters</li>
                        <li>Property Documents (if supporting financial or home ties)</li>
                        <li>Family Relationship Documents</li>
                    </ul>

                    <h5 class="mt-4 mb-3 fw-bold" style="color: var(--primary);">Before Your Visa Interview</h5>
                    <p class="text-muted mb-1">Ensure that:</p>
                    <ul class="text-muted">
                        <li>All information matches your passport and Form I-20.</li>
                        <li>Financial documents clearly demonstrate your ability to fund your education.</li>
                        <li>Academic records are complete and organised.</li>
                        <li>You are familiar with your chosen university, course, and career plans.</li>
                        <li>You are prepared to explain your intention to return to your home country after completing your studies.</li>
                    </ul>

                    <h5 class="mt-4 mb-3 fw-bold" style="color: var(--primary);">After Visa Approval</h5>
                    <p class="text-muted mb-1">Carry the following documents in your hand luggage:</p>
                    <ul class="text-muted">
                        <li>Passport with F-1 Visa</li>
                        <li>Original Form I-20</li>
                        <li>University Admission Letter</li>
                        <li>SEVIS Fee Receipt</li>
                        <li>Financial Documents</li>
                        <li>Accommodation Details</li>
                        <li>Flight Ticket</li>
                        <li>Health Insurance Documents (if available)</li>
                        <li>Emergency Contact Details</li>
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


