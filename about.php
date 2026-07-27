<?php require_once 'site-config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'include/header.php'; ?>
<head>
  <style>
    /* Hero Section */
    .about-hero {
      background: linear-gradient(rgba(10, 30, 50, 0.8), rgba(10, 30, 50, 0.8)), url('img/hero_edu2.png') center/cover no-repeat;
        padding: 120px 0 80px;
      text-align: center;
    }
    .about-hero h1 {
      color: white;
      font-size: 3.5rem;
      font-weight: 700;
      margin-bottom: 20px;
    }
    .about-hero p {
      font-size: 1.2rem;
      max-width: 700px;
      margin: 0 auto;
      color:#fff;
      opacity: 0.9;
    }
    
    /* Section Formatting */
    .about-section {
      padding: 50px 0;
    }
    .bg-light-alt {
      background-color: var(--light-bg);
    }
    .section-header {
      margin-bottom: 20px;
      text-align: center;
    }
    .section-header h2 {
      font-weight: 700;
      position: relative;
      display: inline-block;
      padding-bottom: 15px;
    }
    
    /* Value Cards */
    .value-card {
      background: white;
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.05);
      height: 100%;
      transition: transform 0.3s ease;
      text-align: center;
    }
    .value-card:hover {
      transform: translateY(-10px);
    }
    .value-icon {
      font-size: 2rem;
      color: var(--primary);
    }
    
    /* Track Record */
    .stat-box {
      text-align: center;
      padding: 30px;
      background: var(--primary);
      color: white;
      border-radius: 12px;
      margin-bottom: 30px;
    }
    .stat-number {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 10px;
      font-family: var(--font-h);
    }
    
    /* Team */
    .team-card {
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 15px 35px rgba(9, 30, 62, 0.08);
      margin-bottom: 40px;
      background: white;
      transition: all 0.4s ease;
      position: relative;
    }
    .team-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(9, 30, 62, 0.15);
    }
    .team-img-wrapper {
      position: relative;
      overflow: hidden;
    }
    .team-img {
      height: 405px;
      background-color: #e2e8f0;
      background-position: top center;
      background-size: cover;
      transition: transform 0.5s ease;
    }
    .team-card:hover .team-img {
      transform: scale(1.05);
    }
    .team-info {
      padding: 25px;
      text-align: center;
      background: white;
      position: relative;
      z-index: 2;
    }
    .team-info h4 {
      margin-bottom: 5px;
      font-size: 1.35rem;
      font-weight: 700;
      color: var(--primary);
    }
    .team-info p {
      color: var(--accent);
      font-weight: 600;
      margin-bottom: 15px;
      font-size: 0.95rem;
      text-align: center;
      text-transform: uppercase;
      letter-spacing: 1px;
    }
    .team-socials {
      display: flex;
      justify-content: center;
      gap: 12px;
      opacity: 0;
      transform: translateY(10px);
      transition: all 0.4s ease;
    }
    .team-card:hover .team-socials {
      opacity: 1;
      transform: translateY(0);
    }
    .team-socials a {
      width: 35px;
      height: 35px;
      border-radius: 50%;
      background: rgba(9, 30, 62, 0.05);
      color: var(--primary);
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      transition: all 0.3s ease;
    }
    .team-socials a:hover {
      background: var(--accent);
      color: white;
    }
    
    /* Enquiry Form */
    .enquiry-wrapper {
      background: white;
      border-radius: 12px;
      padding: 40px;
      box-shadow: 0 15px 40px rgba(0,0,0,0.08);
    }
    .form-control {
      padding: 12px 20px;
      border-radius: 8px;
      margin-bottom: 20px;
      border: 1px solid var(--border);
    }
    .btn-submit {
      background: var(--accent);
      color: white;
      padding: 12px 30px;
      border-radius: 8px;
      border: none;
      font-weight: 600;
      width: 100%;
      transition: background 0.3s;
    }
    .btn-submit:hover {
      background: #d97706;
      color: white;
    }
    .fs-4 {
        font-size: 1rem !important;
    }
  </style>
</head>
<body>

  <!-- 01 Hero Section -->
  <section class="about-hero">
    <div class="container" data-aos="fade-up">
      <h1>About <span class="accent-text" style="color:var(--accent);">The Global Ties</span></h1>
      <p>Bridging the gap between your educational dreams and global realities. We are your trusted partners in international education and career advancement.</p>
    </div>
  </section>

  <!-- 02 Who We Are -->
  <section class="about-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6" data-aos="fade-right">
      <h2 class="section-title">
        Who <span class="accent-text">We Are</span>
    </h2>
          <p class="mt-4">The Global Ties is a leading professionaly managed Overseas Education Consulting company. Our team of young professionals is lead by expert advisers. We assist Indian students seeking admissions in globaly recognized education programs offered by famous academic institutions a l over the world. We are a leading Overseas Education service provider with immense experience in guiding students to get admissions to their desired universities across the globe.  Our recruitment team works hand-in-hand with institutions to reach their goals. The Global Ties have a decade of experience in Career Guidance, Test Preparatory Classes, and Overseas Education Consulting. </p>
        </div>
        <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left">
          <img src="img/hero_edu2.png" alt="Who We Are" class="img-fluid rounded shadow-lg" style="object-fit:cover; height:400px; width:100%;">
        </div>
      </div>
    </div>
  </section>

  <!-- 03 Our Vision & 04 Our Mission -->
  <section class="about-section bg-light-alt">
    <div class="container">
      <div class="row g-4">
        <!-- 03 Our Vision -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="value-card text-start p-5">
            <div class="d-flex align-items-center mb-3">
    <i class="fa-solid fa-eye value-icon me-3"></i>
    <h3 class="mb-0">Our Vision</h3>
  </div>
            <p class="mt-3">Our vision is to make overseas education accessible to every student and provide dedicated support in nurturing students and provide seamless services. The Global Ties prepares students and assist them in enrolling in the top universities of their choice around the world. We are committed to providing individual attention to students and help them shape their career. We are extremely futuristic driven by a passion to guide students in their overseas education journey and bring their dreams to reality.</p>
          </div>
        </div>
        <!-- 04 Our Mission -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="value-card text-start p-5">
            <div class="d-flex align-items-center mb-3">
    <i class="fa-solid fa-bullseye value-icon me-3"></i>
    <h3 class="mb-0">Our Mission</h3>
  </div>
            <p class="mt-3">To deliver high-quality service that enables people to meet their goals in life more effectively. Our mission is to source internationally academic institutions providing modern learning programs leading to bright international careers and assist Indian students to gain easy access to such learning opportunities. We strive hard to make Overseas Education accessible to  students from tier 2 and tier 3 cities and create an awareness among them on importance of studying abroad that unlocks their future .</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 06 Proven Track Record -->
  <section class="about-section bg-light-alt">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
     <h2 class="section-title">
        Proven <span class="accent-text">Track Record</span>
    </h2>    
      </div>
      <div class="row g-4">
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <div class="stat-box">
            <div class="stat-number">10+</div>
            <div>Years Experience</div>
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <div class="stat-box">
            <div class="stat-number">5K+</div>
            <div>Successful Visas</div>
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="stat-box">
            <div class="stat-number">200+</div>
            <div>University Partners</div>
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <div class="stat-box">
            <div class="stat-number">15+</div>
            <div>Destination Countries</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 05 Objectives -->
  <section class="about-section">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
     <h2 class="section-title">
        Our <span class="accent-text">Objectives</span>
    </h2>    
      </div>
      <div class="row text-center g-4">
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="p-4 border rounded bg-white shadow-sm h-100">
            <h4 class="mb-3">IELTS Coaching</h4>
            <p> We provide comprehensive IELTS coaching designed to help students achieve the scores required for admission to top universities and successful visa applications. Our experienced trainers focus on developing all four language skills Listening, Reading, Writing, and Speaking through structured lessons, practical exercises, and regular mock tests.</p>
          </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="p-4 border rounded bg-white shadow-sm h-100">
            <h4 class="mb-3">Test Preparation</h4>
            <p>We offer expert test preparation programs designed to help students achieve outstanding scores in internationally recognized entrance and language proficiency exams. Our structured coaching, experienced faculty, and personalized learning approach ensure that students are fully prepared to meet the admission requirements of leading universities worldwide.</p>
          </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="p-4 border rounded bg-white shadow-sm h-100">
            <h4 class="mb-3">University Partnerships</h4>
            <p>We have established partnerships with reputed universities and colleges across the globe to help students access world-class education opportunities. Our extensive network of partner institutions ensures that students receive expert guidance in selecting the right university based on their academic background, career goals, and budget.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Why The Global Ties? -->
  <section class="about-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6" data-aos="fade-right">
          <img src="img/university_img.webp" alt="Why Choose Us" class="img-fluid rounded shadow-lg" style="object-fit:cover; height:450px; width:100%;">
        </div>
        <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left">
          <h2 class="section-title">
            Why <span class="accent-text">The Global Ties?</span>
          </h2>  
          <ul class="list-unstyled mt-4" style="font-size: 1.05rem;">
            <li class="mb-3 d-flex">
              <i class="fa-solid fa-check-circle text-accent fs-4 me-3" style="color:var(--accent); margin-top: 3px;"></i>
              <div>
                <p class="text-muted mb-0"><strong>Direct Interaction:</strong> University representatives will have direct interaction with the applicants.</p>
              </div>
            </li>
            <li class="mb-3 d-flex">
              <i class="fa-solid fa-check-circle text-accent fs-4 me-3" style="color:var(--accent); margin-top: 3px;"></i>
              <div>
                <p class="text-muted mb-0"><strong>Scholarships:</strong> We offer a lot of courses with scholarships.</p>
              </div>
            </li>
            <li class="mb-3 d-flex">
              <i class="fa-solid fa-check-circle text-accent fs-4 me-3" style="color:var(--accent); margin-top: 3px;"></i>
              <div>
                <p class="text-muted mb-0"><strong>Global Network:</strong> Official Representative of more than 500 World-class Educational Institutions around the globe.</p>
              </div>
            </li>
            <li class="mb-3 d-flex">
              <i class="fa-solid fa-check-circle text-accent fs-4 me-3" style="color:var(--accent); margin-top: 3px;"></i>
              <div>
                <p class="text-muted mb-0"><strong>Unbiased Services:</strong> We give the best and unbiased services suitable according to the needs of the students aspiring to study in various countries across the globe.</p>
              </div>
            </li>
            <li class="mb-3 d-flex">
              <i class="fa-solid fa-check-circle text-accent fs-4 me-3" style="color:var(--accent); margin-top: 3px;"></i>
              <div>
                <p class="text-muted mb-0"><strong>Future Ready:</strong> We help prepare students to face the future with confidence themselves.</p>
              </div>
            </li>
            <li class="d-flex">
              <i class="fa-solid fa-check-circle text-accent fs-4 me-3" style="color:var(--accent); margin-top: 3px;"></i>
              <div>
                <p class="text-muted mb-0"><strong>Expert Trainers:</strong> All our Test Preparatory Course trainers and Consultants are fully experienced, Professionally trained by trusted University Partners.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>


<section class="section-padding" id="sec">
    <div class="container">
      <div class="text-center mb-5">
        <span class="section-subtitle">Our Core Values</span>
        <h2 class="section-title">
            The Principles That <span class="accent-text">Drive Us</span>
        </h2>
      </div>
      <!-- Features -->
      <div class="row g-4">

        <div class="col-lg-3 col-md-6">
          <div class="feature-card text-center">
            <div class="feature-icon mx-auto">
              <i class="fas fa-handshake"></i>
            </div>
            <h5>Integrity</h5>
            <p>
              Maintaining complete honesty and transparency in every interaction and process.
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="feature-card text-center">
            <div class="feature-icon mx-auto">
              <i class="fas fa-lightbulb"></i>
            </div>
            <h5>Innovation</h5>
            <p>
              Continuously embracing new ideas to simplify the overseas education journeys.
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="feature-card text-center">
            <div class="feature-icon mx-auto">
              <i class="fas fa-heart"></i>
            </div>
            <h5>Empathy</h5>
            <p>
              Deeply understanding and prioritizing the dreams and concerns of every student.
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="feature-card text-center">
            <div class="feature-icon mx-auto">
              <i class="fas fa-award"></i>
            </div>
            <h5>Excellence</h5>
            <p>
              Consistently driving for the best possible outcomes and continuous improvement.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- 08 What We Do -->
  <section class="about-section bg-light-alt">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2" data-aos="fade-left">
         <h2 class="section-title">
        What <span class="accent-text">We Do</span>
    </h2>  
          <ul class="list-unstyled mt-4">
            <li class="mb-4 d-flex">
              <i class="fa-solid fa-check-circle text-accent fs-4 me-3" style="color:var(--accent);"></i>
              <div>
                <h5>Career & Course Counseling</h5>
                <p class="text-muted">Personalized sessions to identify the right course and career path tailored to your profile.</p>
              </div>
            </li>
            <li class="mb-4 d-flex">
              <i class="fa-solid fa-check-circle text-accent fs-4 me-3" style="color:var(--accent);"></i>
              <div>
                <h5>University Admissions</h5>
                <p class="text-muted">End-to-end assistance with applications, SOP drafting, and scholarship guidance.</p>
              </div>
            </li>
            <li class="mb-4 d-flex">
              <i class="fa-solid fa-check-circle text-accent fs-4 me-3" style="color:var(--accent);"></i>
              <div>
                <h5>Visa Processing</h5>
                <p class="text-muted">Expert mock interviews, financial documentation support, and visa filing.</p>
              </div>
            </li>
            <li class="d-flex">
              <i class="fa-solid fa-check-circle text-accent fs-4 me-3" style="color:var(--accent);"></i>
              <div>
                <h5>Post-Departure Support</h5>
                <p class="text-muted">Assistance with accommodation, flights, and connecting with alumni.</p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-lg-6 order-lg-1 mt-5 mt-lg-0" data-aos="fade-right">
          <img src="img/what-we-do.png" alt="What We Do" class="img-fluid rounded shadow-lg" style="object-fit:cover; height:450px; width:100%;">
        </div>
      </div>
    </div>
  </section>



  <!-- 09 Our Team -->
  <section class="about-section bg-light-alt">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
     <h2 class="section-title">
        Founder  <span class="accent-text">Details</span>
    </h2>    
      </div>
      <div class="row align-items-center">
        <!-- Team Member 1 -->
        <div class="col-lg-4 col-md-5 mb-4" data-aos="fade-right">
          <div class="team-card" style="margin: 0 auto; max-width: 400px;">
            <div class="team-img-wrapper">
                <div class="team-img" style="background-image: url('img/founder-img.jpeg');"></div>
            </div>
            <div class="team-info">
              <h4>Ms. Nandini Ramesh</h4>
              <p>Founder & CEO </p>
              <div class="team-socials">
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-7" data-aos="fade-left">
          <p class="text-muted mb-3" style="font-size: 1.1rem; line-height: 1.7; text-align: justify;"><strong>Ms. Nandini Ramesh</strong> is the Founder and Chief Executive Officer of The Global Ties. She holds a postgraduate degree in Business Administration and has more than a decade of experience in the field of HR, Recruitment, Training, Overseas higher Education Consulting, and Financial Consulting. She is specialized in recruiting suitable people for different sectors, especially in middle and senior-level management.</p>
          <p class="text-muted mb-3" style="font-size: 1.1rem; line-height: 1.7; text-align: justify;">She had attended several conferences and workshops in India and abroad related to Overseas Education. She has participated in a professional exchange program organized by the rotary international to the USA. She has conducted many training programs for students and faculties of various colleges. She has also served as the secretary of the Junior Chamber International.</p>
          <p class="text-muted mb-3" style="font-size: 1.1rem; line-height: 1.7; text-align: justify;">Nandini is also a qualified international career coach assisting many students on their higher education journey. She is a motivational speaker and has conducted many skill development workshops in colleges. She has assisted more than 1500 students in career counseling, university selection, admission process, visa assistance as well as post landing services pertaining to education abroad. This encompasses under-graduation, postgraduation as well as research-based programs and had helped many aspirants' dreams come true.</p>
          <p class="text-muted mb-0" style="font-size: 1.1rem; line-height: 1.7; text-align: justify;">The Global Ties is recognized and authorized by many reputed universities and institutions all over the world for its excellence. The Global Ties is also a certified training provider for IELTS, TOEFL, PTE, GRE, GMAT and SAT.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 11 Footer -->
  <?php include 'include/footer.php'; ?>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800,
      once: true
    });
  </script>
</body>
</html>
