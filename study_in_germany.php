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
      <h1>Study in<span class="accent-text" style="color:var(--accent);"> Germany</span></h1>
      <p>Benefit from world-leading engineering and technology programs, affordable tuition, and a strong economy in the heart of Europe.</p>
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
                        Study in Germany
                    </span>
                </nav>
            </div>
        </div>

        <!-- Section 2: Introduction -->
        <section class="canada-intro">
            <div class="layout-container intro-grid">
                <div class="intro-image">
                    <img src="img/germany-img.jpg"
                        alt="Students in Canada">
                </div>
                <div class="intro-content">
                    <span class="gold-label">Staying in Germany permanently | the global ties</span>

                    <!-- <h2 class="destinations-title">Study Abroad in Germany :</h2> -->
<h2 class="section-title">
          Study Abroad in 
            <span class="accent-text">Germany</span>
          </h2>
                    <p class="hero-description">
Start your international academic education in Germany in style. Germany is known for its practical curriculum, cutting-edge facilities and collaborative study environment. Students wanting an amazing life experience by learning a new language, as foreign students in Germany, can give us a shout. There are hundreds of Germany Universities that provide free or very low fee for international students to pursue their graduation.
<br>Advance your career by combining quality education and unique cultural experience. There are many who are craving for a degree from top German Universities.                    </p>
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
            <span class="accent-text">Germany</span>
          </h2>
            <p class="hero-description">
German universities provide industry-focused programs, state-of-the-art research facilities, and strong collaborations with leading global companies, enabling students to gain valuable practical experience through internships, research projects, and professional training. Students benefit from internationally recognized qualifications that are highly respected by employers around the world.
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
                        Cost of education in Germany is low for international students, almost in all top universities.
                        Students can access world-class education while significantly reducing overall study expenses.
                    </p>
                    <a href="#" class="read-more-btn" onclick="toggleCard(event, this)">Read More &rarr;</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="opp-slide">
                <div class="opp-card luxury-card">
                    <div class="card-author-area">
                        <div class="author-info">
                            <h4>Quality Education</h4>
                        </div>
                    </div>
                    <div class="card-divider"></div>

                    <p class="card-text">
                        Germany offers top-notch education with highly qualified faculty members and internationally
                        recognized universities. Students benefit from advanced learning facilities and research-driven
                        academic programs.
                    </p>
                    <a href="#" class="read-more-btn" onclick="toggleCard(event, this)">Read More &rarr;</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="opp-slide">
                <div class="opp-card luxury-card">
                    <div class="card-author-area">
                        <div class="author-info">
                            <h4>Culture & Career</h4>
                        </div>
                    </div>
                    <div class="card-divider"></div>
                    <p class="card-text">
                        Germany is an intriguing country to explore cultural diversity. Native speakers help students
                        hone their linguistic skills, while graduates are provided with excellent working opportunities
                        after completing their studies.
                    </p>
                    <a href="#" class="read-more-btn" onclick="toggleCard(event, this)">Read More &rarr;</a>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="opp-slide">
                <div class="opp-card luxury-card">
                    <div class="card-author-area">
                        <div class="author-info">
                            <h4>Free Education Pathway</h4>
                        </div>
                    </div>
                    <div class="card-divider"></div>

                    <p class="card-text">
                        Native Germans, Europeans, and Non-Europeans can study at public universities without tuition
                        fees. International students need a valid residence permit and must complete their studies in
                        Germany to enjoy these benefits.
                    </p>
                    <a href="#" class="read-more-btn" onclick="toggleCard(event, this)">Read More &rarr;</a>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="opp-slide">
                <div class="opp-card luxury-card">
                    <div class="card-author-area">
                        <div class="author-info">
                            <h4>Student Support</h4>
                        </div>
                    </div>
                    <div class="card-divider"></div>

                    <p class="card-text">
                        Students from Coimbatore, Tiruppur, Erode and Ooty have increased opportunities of securing
                        admission in German universities through our guidance. We assist with course selection, fee
                        structures, work permits, and visa requirements.
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
                    <h2 class="destinations-titles">Why International Students Choose Germany</h2>
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
                Tuition fee comparison by programme level in Germany.
            </p>
        </div>

        <div class="table-responsive" data-aos="fade-up" data-aos-delay="100">
            <table class="table table-hover table-bordered shadow-sm" style="background:white;border-radius:10px;overflow:hidden;">
                <thead style="background:var(--primary);color:#fff;">
                    <tr>
                        <th style="padding:15px;">Programme Level</th>
                        <th style="padding:15px;">Typical Annual Fee</th>
                        <th style="padding:15px;">Notes</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td style="padding:15px;font-weight:500;">Public Universities (Bachelor's & Master's)</td>
                        <td style="padding:15px;">€0 – €1,500 / year</td>
                        <td style="padding:15px;">Most public universities charge only semester contribution fees.</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">Private Universities</td>
                        <td style="padding:15px;">€5,000 – €20,000 / year</td>
                        <td style="padding:15px;">Fees vary based on university and programme.</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">MBA</td>
                        <td style="padding:15px;">€15,000 – €40,000+</td>
                        <td style="padding:15px;">Premium business schools have higher tuition fees.</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">PhD / Doctoral</td>
                        <td style="padding:15px;">Mostly Tuition-Free</td>
                        <td style="padding:15px;">Many doctoral candidates receive funded research positions.</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">Semester Contribution</td>
                        <td style="padding:15px;">€150 – €350 / semester</td>
                        <td style="padding:15px;">Covers administration, student services, and public transport in many cities.</td>
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
            <h2 class="section-title">Cost of Living <span class="accent-text">by City</span></h2>
            <p class="hero-description mx-auto" style="max-width:700px;">
                Estimated monthly living expenses for international students in Germany.
            </p>
        </div>

        <div class="table-responsive" data-aos="fade-up" data-aos-delay="100">

            <table class="table table-hover table-bordered shadow-sm" style="background:white;border-radius:10px;overflow:hidden;">

                <thead style="background:var(--primary);color:white;">
                    <tr>
                        <th style="padding:15px;">City</th>
                        <th style="padding:15px;">Monthly Living Cost</th>
                        <th style="padding:15px;">Representative Universities</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td style="padding:15px;font-weight:500;">Munich</td>
                        <td style="padding:15px;">€1,200 – €1,600</td>
                        <td style="padding:15px;">Technical University of Munich, LMU Munich</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">Berlin</td>
                        <td style="padding:15px;">€950 – €1,300</td>
                        <td style="padding:15px;">Humboldt University, Free University Berlin, TU Berlin</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">Frankfurt</td>
                        <td style="padding:15px;">€950 – €1,300</td>
                        <td style="padding:15px;">Goethe University Frankfurt</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">Hamburg</td>
                        <td style="padding:15px;">€900 – €1,250</td>
                        <td style="padding:15px;">University of Hamburg, Hamburg University of Technology</td>
                    </tr>

                    <tr>
                        <td style="padding:15px;font-weight:500;">Leipzig / Dresden</td>
                        <td style="padding:15px;">€750 – €1,000</td>
                        <td style="padding:15px;">Leipzig University, TU Dresden</td>
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
            <h2 class="section-title">Part-Time Jobs & <span class="accent-text">Work Opportunities</span> in Germany</h2>
        </div>

        <div class="row g-5 align-items-center mb-5">

            <div class="col-lg-6" data-aos="fade-right">

                <h4 class="fw-bold mb-3" style="color: var(--primary);">
                    Part-Time Jobs in Germany
                </h4>

                <p class="text-muted" style="line-height:1.8;">
                    Germany offers international students excellent opportunities to gain valuable work experience while pursuing their studies. Eligible students can work part-time alongside their academic programs, allowing them to earn additional income while developing practical workplace skills.
                </p>

                <p class="text-muted" style="line-height:1.8;">
                    Students can find part-time employment in retail, hospitality, logistics, warehouses, supermarkets, restaurants, customer service, research institutions, university campuses, administration, and manufacturing industries. These opportunities help students gain real-world experience while adapting to Germany's professional work environment.
                </p>

                <p class="text-muted" style="line-height:1.8;">
                    Working during your studies improves communication skills, builds professional networks, enhances your resume, and prepares you for rewarding career opportunities after graduation.
                </p>

            </div>

            <div class="col-lg-6" data-aos="fade-left">

                <div class="position-relative">

                    <img src="img/part-time.webp"
                        alt="Work in Germany"
                        class="img-fluid rounded-4 shadow-lg w-100"
                        style="object-fit:cover;height:400px;">

                    <div class="position-absolute bottom-0 start-0 w-100 p-4 rounded-bottom-4"
                        style="background:linear-gradient(to top,rgba(9,30,62,.9),transparent);">

                        <h5 class="text-white fw-bold mb-1">
                            Post-Study Work Opportunities
                        </h5>

                        <p class="text-white opacity-75 mb-0" style="font-size:.9rem;">
                            Build your career with valuable German work experience.
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
                        After completing an eligible qualification, international graduates can explore post-study employment opportunities to gain valuable professional experience in Germany. This practical experience enhances career prospects, strengthens employability, and helps graduates establish successful careers in Europe's largest economy.
                    </p>

                    <p class="text-muted mb-0">
                        Germany offers excellent career opportunities across high-demand sectors including Engineering, Information Technology, Automotive, Artificial Intelligence, Healthcare, Manufacturing, Renewable Energy, Business, Finance, Data Science, and Skilled Trades.
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
                            Gain valuable German work experience.
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
                            Develop professional and communication skills.
                        </span>
                    </li>

                    <li class="d-flex align-items-start mb-3">
                        <div class="me-3 mt-1" style="color:var(--accent);">
                            <i class="fas fa-check-circle fs-5"></i>
                        </div>
                        <span class="text-muted fw-bold">
                            Build a strong resume and international work profile.
                        </span>
                    </li>

                    <li class="d-flex align-items-start mb-3">
                        <div class="me-3 mt-1" style="color:var(--accent);">
                            <i class="fas fa-check-circle fs-5"></i>
                        </div>
                        <span class="text-muted fw-bold">
                            Increase career opportunities after graduation.
                        </span>
                    </li>

                    <li class="d-flex align-items-start mb-3">
                        <div class="me-3 mt-1" style="color:var(--accent);">
                            <i class="fas fa-check-circle fs-5"></i>
                        </div>
                        <span class="text-muted fw-bold">
                            Experience Germany's professional and multicultural workplace.
                        </span>
                    </li>

                    <li class="d-flex align-items-start">
                        <div class="me-3 mt-1" style="color:var(--accent);">
                            <i class="fas fa-check-circle fs-5"></i>
                        </div>
                        <span class="text-muted fw-bold">
                            Improve employability through practical international experience.
                        </span>
                    </li>

                </ul>

            </div>

            <div class="col-lg-6" data-aos="fade-left">

                <div class="bg-primary text-white p-5 rounded-4 h-100 d-flex flex-column justify-content-center position-relative overflow-hidden"
                    style="background: var(--primary) !important;">

                    <div class="position-absolute"
                        style="top:-20px; right:-20px; opacity:.1; font-size:150px;">
                        <i class="fas fa-globe-europe"></i>
                    </div>

                    <h4 class="fw-bold mb-4 position-relative z-1 text-white">
                        How The Global Ties Can Help
                    </h4>

                    <p class="mb-4 position-relative z-1 text-light"
                        style="line-height:1.8; opacity:.9;">
                        The Global Ties provides comprehensive guidance for students planning to study in Germany. Our experienced counsellors assist with university selection, admission processing, profile evaluation, document verification, blocked account guidance, student visa applications, financial documentation, accommodation support, pre-departure orientation, and post-arrival assistance. We also guide students on work opportunities, career planning, and post-study employment pathways to help them build a successful future in Germany.
                    </p>

                    <div class="p-3 rounded-3 position-relative z-1"
                        style="background:rgba(255,255,255,.1); border-left:3px solid var(--accent);">

                        <p class="mb-0 small" style="opacity:.85;">
                            <strong>Note:</strong> Student work rights, employment regulations, and post-study residence permit eligibility are governed by the German authorities and may change over time. Students should always refer to the latest official immigration guidelines before making employment or visa-related decisions.
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
                        The Global Ties provides comprehensive end-to-end support for students planning to study in Germany. Our experienced counsellors offer personalized guidance to help you choose the right university, program, and study destination based on your academic qualifications, career goals, and budget.

Our services include university selection, admission processing, profile evaluation, document verification, Statement of Purpose (SOP) guidance, blocked account assistance, financial documentation, student visa application support, scholarship guidance, interview preparation, accommodation assistance, pre-departure orientation, travel guidance, and post-arrival support. We ensure a smooth, transparent, and hassle-free process from your first consultation to your successful arrival in Germany, helping you achieve your international education goals with confidence.
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
              <form onsubmit="event.preventDefault(); alert('Request submitted successfully! Our counselors will contact you soon.');">
                <div class="form-row">
                  <input type="text" class="custom-input" placeholder="Full Name" required="">
                  <input type="tel" class="custom-input" placeholder="Phone Number" required="">
                </div>
                <input type="email" class="custom-input" placeholder="Email Address" required="">
                <select class="custom-input" required="">
                  <option value="" disabled="" selected="">Select Course Interested In</option>
                  <option>B.Tech Computer Science</option>
                  <option>MBA</option>
                  <option>B.Des UI/UX</option>
                  <option>Other</option>
                </select>
                <input type="text" class="custom-input" placeholder="City">
                <textarea class="custom-input" rows="3" placeholder="Any specific questions?"></textarea>
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
                    <h4 class="modal-title fw-bold" id="contactModalLabel" style="color: var(--primary);">Germany Student Visa (National D Visa) Checklist</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4" style="line-height: 1.6; font-size: 0.95rem;">
                    <h5 class="mb-3 fw-bold" style="color: var(--accent);">Complete Student Visa Document Checklist | The Global Ties</h5>
                    <p class="text-muted mb-4">Germany is one of the world's leading destinations for higher education, known for its high-quality universities, affordable tuition fees, research excellence, and outstanding career opportunities. International students planning to study in Germany for more than 90 days must apply for a German National Student Visa (Type D) before travelling. After arrival, students must register their residence and obtain a residence permit from the local Foreigners' Office (Ausl�nderbeh�rde). (make-it-in-germany.com)</p>

                    <h5 class="mt-4 mb-3 fw-bold" style="color: var(--primary);">Mandatory Documents</h5>
                    
                    <div class="mb-3">
                        <strong class="text-dark">1. Valid Passport</strong>
                        <ul class="text-muted mt-2">
                            <li>Original passport valid for the entire duration of your intended stay.</li>
                            <li>Passport should have at least two blank visa pages.</li>
                            <li>Copies of previous passports (if applicable).</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">2. University Admission Letter</strong>
                        <ul class="text-muted mt-2">
                            <li>Official Letter of Admission (Zulassungsbescheid) from a recognised German university or higher education institution.</li>
                            <li>If applicable, a conditional admission letter for preparatory or language courses.</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">3. National Student Visa Application Form</strong>
                        <ul class="text-muted mt-2">
                            <li>Completed and signed German National Visa (Type D) application form.</li>
                            <li>Declaration of accuracy and supporting documents as required by the German Embassy or Consulate.</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">4. Passport-Size Biometric Photographs</strong>
                        <ul class="text-muted mt-2">
                            <li>Recent biometric passport-size photographs.</li>
                            <li>Must comply with German visa photo specifications.</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">5. Proof of Financial Resources</strong>
                        <p class="text-muted mt-2 mb-1">Applicants must demonstrate sufficient financial means to cover living expenses during their stay in Germany.</p>
                        <p class="text-muted mt-2 mb-1">Accepted financial documents include:</p>
                        <ul class="text-muted">
                            <li>Blocked Account (Sperrkonto) confirmation</li>
                            <li>Scholarship Award Letter</li>
                            <li>Formal Sponsorship (Verpflichtungserkl�rung)</li>
                            <li>Education Loan Sanction Letter</li>
                            <li>Recent Bank Statements (where applicable)</li>
                        </ul>
                        <p class="text-muted mb-0">The required minimum financial proof is determined by the German authorities and is subject to periodic updates. (make-it-in-germany.com)</p>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">6. Proof of Tuition Fee Payment (If Applicable)</strong>
                        <ul class="text-muted mt-2">
                            <li>Tuition fee payment receipt (for private universities).</li>
                            <li>Admission deposit receipt, if required by the institution.</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">7. Academic Documents</strong>
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
                        <strong class="text-dark">8. Language Proficiency</strong>
                        <p class="text-muted mt-2 mb-1">Depending on your programme, provide valid language certificates:</p>
                        <p class="text-muted mt-2 mb-1"><strong>English-Taught Programmes</strong></p>
                        <ul class="text-muted">
                            <li>IELTS Academic</li>
                            <li>TOEFL iBT</li>
                            <li>PTE Academic</li>
                            <li>Other accepted English language qualifications</li>
                        </ul>
                        <p class="text-muted mt-2 mb-1"><strong>German-Taught Programmes</strong></p>
                        <ul class="text-muted">
                            <li>TestDaF</li>
                            <li>DSH</li>
                            <li>Goethe-Zertifikat</li>
                            <li>telc Deutsch</li>
                            <li>Other recognised German language certificates</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">9. Motivation Letter / Statement of Purpose</strong>
                        <p class="text-muted mt-2 mb-1">A professionally written motivation letter explaining:</p>
                        <ul class="text-muted">
                            <li>Why you chose Germany.</li>
                            <li>Why you selected your university and programme.</li>
                            <li>Your academic achievements.</li>
                            <li>Future career goals.</li>
                            <li>Your intention to comply with German immigration regulations.</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">10. Curriculum Vitae (CV)</strong>
                        <p class="text-muted mt-2 mb-1">Updated CV detailing:</p>
                        <ul class="text-muted">
                            <li>Educational qualifications</li>
                            <li>Employment history</li>
                            <li>Internships</li>
                            <li>Research experience (if applicable)</li>
                            <li>Extracurricular achievements</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">11. Health Insurance</strong>
                        <ul class="text-muted mt-2">
                            <li>Proof of valid health insurance acceptable in Germany.</li>
                            <li>Students may be required to obtain German statutory or approved private health insurance before enrolment.</li>
                        </ul>
                    </div>

                    <div class="mb-3">
                        <strong class="text-dark">12. Accommodation Details</strong>
                        <p class="text-muted mt-2 mb-1">Provide proof of accommodation, such as:</p>
                        <ul class="text-muted">
                            <li>Student Hostel Confirmation</li>
                            <li>Rental Agreement</li>
                            <li>University Accommodation Letter</li>
                            <li>Temporary Accommodation Booking</li>
                        </ul>
                    </div>

                    <h5 class="mt-4 mb-3 fw-bold" style="color: var(--primary);">Additional Supporting Documents (If Applicable)</h5>
                    <ul class="text-muted">
                        <li>APS Certificate (mandatory for applicants from certain countries, where applicable)</li>
                        <li>Previous Schengen Visa Copies</li>
                        <li>Scholarship Award Letter</li>
                        <li>Sponsorship Letter</li>
                        <li>Employment Experience Certificates</li>
                        <li>Internship Certificates</li>
                        <li>Research Proposal (for PhD applicants)</li>
                        <li>Marriage Certificate (if applicable)</li>
                        <li>Name Change Affidavit</li>
                        <li>Certified translations for documents not issued in English or German.</li>
                    </ul>

                    <h5 class="mt-4 mb-3 fw-bold" style="color: var(--primary);">Before You Submit Your Application</h5>
                    <p class="text-muted mb-1">Ensure that:</p>
                    <ul class="text-muted">
                        <li>All information matches your passport and admission letter.</li>
                        <li>Financial documents meet current German visa requirements.</li>
                        <li>Academic documents are complete and organised.</li>
                        <li>Your Motivation Letter is original and professionally written.</li>
                        <li>Health insurance is valid.</li>
                        <li>All scanned documents are clear and legible.</li>
                        <li>Original documents are available for verification during your visa appointment.</li>
                    </ul>

                    <h5 class="mt-4 mb-3 fw-bold" style="color: var(--primary);">After Visa Approval</h5>
                    <p class="text-muted mb-1">Carry the following documents while travelling:</p>
                    <ul class="text-muted">
                        <li>Passport with German National Student Visa</li>
                        <li>University Admission Letter</li>
                        <li>Proof of Financial Resources</li>
                        <li>Health Insurance Certificate</li>
                        <li>Accommodation Details</li>
                        <li>Flight Ticket</li>
                        <li>Academic Certificates</li>
                        <li>Emergency Contact Details</li>
                        <li>Copies of all important documents</li>
                    </ul>

                    <p class="text-muted mt-3 mb-1">After arriving in Germany, students must:</p>
                    <ul class="text-muted mb-0">
                        <li>Register their residential address (Anmeldung) at the local registration office.</li>
                        <li>Open a German bank account (if required).</li>
                        <li>Obtain a Student Residence Permit from the Ausl�nderbeh�rde before the visa expires.</li>
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


