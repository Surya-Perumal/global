<?php require_once 'site-config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'include/header.php'; ?>
<head>
  <style>
    /* Hero Section */
    .tp-hero {
      background: linear-gradient(rgba(10, 30, 50, 0.8), rgba(10, 30, 50, 0.8)), url('img/hero_edu2.png') center/cover no-repeat;
      padding: 100px 0 70px;
      text-align: center;
      color: white;
    }
    .tp-hero h1 {
      font-size: 3.5rem;
      font-weight: 700;
      margin-bottom: 20px;
      color: white;
    }
    .tp-hero p {
      color:#fff;
      font-size: 1.2rem;
      max-width: 700px;
      margin: 0 auto;
      opacity: 0.9;
    }
    
    /* Section Formatting */
    .content-section {
      padding: 80px 0;
    }
    .bg-light-alt {
      background-color: var(--light-bg);
    }
    .section-header {
      margin-bottom: 20px;
      text-align: center;
    }
    .section-header h2 {
      /* font-size: 2.5rem removed to unify heading sizes */
      font-weight: 700;
      position: relative;
      display: inline-block;
      padding-bottom: 15px;
      
    }
    .section-header h2::after {
      content: '';
      position: absolute;
      width: 60px;
      height: 4px;
      background: var(--accent);
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      border-radius: 2px;
    }

    /* Info Cards */
    .info-card {
      background: white;
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.05);
      border-top: 4px solid var(--accent);
      height: 100%;
    }
    .info-card h4 {
      color: var(--primary);
      font-weight: 700;
      margin-bottom: 15px;
    }
    
    /* Feature List */
    .feature-list {
      list-style: none;
      padding-left: 0;
    }
    .feature-list li {
      margin-bottom: 15px;
      display: flex;
      align-items: flex-start;
    }
    .feature-list li i {
      color: var(--accent);
      margin-top: 5px;
      margin-right: 15px;
      font-size: 1.2rem;
    }
    
    /* Process Cards */
    .process-card {
      background: white;
      border-radius: 15px;
      padding: 40px 30px;
      position: relative;
      z-index: 1;
      overflow: hidden;
      transition: all 0.3s ease;
      box-shadow: 0 10px 30px rgba(0,0,0,0.05);
      border: 1px solid rgba(0,0,0,0.05);
      height: 100%;
    }
    .process-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 40px rgba(0,0,0,0.1);
      border-color: var(--accent);
    }
    .process-card::before {
      content: attr(data-step);
      position: absolute;
      top: -20px;
      right: -10px;
      font-size: 8rem;
      font-weight: 800;
      color: rgba(0,0,0,0.03);
      z-index: -1;
      transition: all 0.3s ease;
    }
    .process-card:hover::before {
      color: rgba(255, 213, 79, 0.2);
    }
    .process-icon-box {
      width: 80px;
      height: 80px;
      background: rgba(13, 110, 253, 0.05);
      color: var(--primary);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 25px;
      font-size: 2rem;
      transition: all 0.3s ease;
    }
    .process-card:hover .process-icon-box {
      background: var(--primary);
      color: white;
    }
  </style>
</head>
<body>

  <!-- Hero Section -->
  <section class="tp-hero">
    <div class="container" data-aos="fade-up">
      <h1><span class="accent-text" style="color:var(--accent);">OET</span> Preparation</h1>
      <p>Achieve your target score with our expert-led OET coaching. Comprehensive study materials, mock tests, and personalized feedback to guarantee your success.</p>
    </div>
  </section>

  <!-- What is the Test -->
  <section class="content-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6" data-aos="fade-right">
          <h2 class="section-title mb-4">About the <span class="accent-text">OET Exam</span></h2>
          <p class="mt-4 text-muted" style="font-size: 1.1rem; line-height: 1.7;">The Occupational English Test (OET) is an international English language test specifically designed for the healthcare sector. It assesses the language communication skills of healthcare professionals who seek to register and practise in an English-speaking environment.</p>
          <div class="row g-3 mt-3">
            <div class="col-md-12">
              <div class="info-card p-3">
                <h6 class="fw-bold mb-2"><i class="fa-solid fa-stethoscope text-primary me-2"></i> Healthcare Specific</h6>
                <p class="text-muted small mb-0">Uses real healthcare scenarios so you'll feel more confident on test day.</p>
              </div>
            </div>
            <div class="col-md-12">
              <div class="info-card p-3">
                <h6 class="fw-bold mb-2"><i class="fa-solid fa-earth-americas text-primary me-2"></i> Global Acceptance</h6>
                <p class="text-muted small mb-0">Recognized by healthcare boards and councils in the UK, Ireland, Australia, New Zealand, and more.</p>
              </div>
            </div>
            <div class="col-md-12">
              <div class="info-card p-3">
                <h6 class="fw-bold mb-2"><i class="fa-solid fa-id-card text-primary me-2"></i> Professional Registration</h6>
                <p class="text-muted small mb-0">Essential for doctors, nurses, dentists, and other allied health professionals aiming to work abroad.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left">
          <img src="img/exam.jpg" alt="Test Preparation" class="img-fluid rounded shadow-lg" style="object-fit:cover; height:400px; width:100%;">
        </div>
      </div>
    </div>
  </section>

  <!-- Test Format -->
  <section class="content-section bg-light-alt">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <h2 class="section-title mb-4">Test Format <span class="accent-text">& Sections</span></h2>
        <p class="text-muted mt-3">Understanding the structure is the first step to mastering the exam.</p>
      </div>
      <div class="row g-4 justify-content-center">
        <div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-delay="100">
          <div class="process-card" data-step="01">
            <div class="process-icon-box"><i class="fa-solid fa-ear-listen"></i></div>
            <h4 class="text-center fw-bold">Section 1: Listening</h4>
            <p class="text-muted text-center">Assesses your ability to follow and understand a range of health-related spoken materials such as patient consultations and lectures.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-delay="200">
          <div class="process-card" data-step="02">
            <div class="process-icon-box"><i class="fa-solid fa-book-open-reader"></i></div>
            <h4 class="text-center fw-bold">Section 2: Reading</h4>
            <p class="text-muted text-center">Evaluates your ability to read and understand different types of texts on health-related subjects, from policy documents to medical journals.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-delay="300">
          <div class="process-card" data-step="03">
            <div class="process-icon-box"><i class="fa-solid fa-pen-nib"></i></div>
            <h4 class="text-center fw-bold">Section 3: Writing</h4>
            <p class="text-muted text-center">The task is specific to your profession, typically requiring you to write a referral letter or discharge summary based on case notes.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-delay="400">
          <div class="process-card" data-step="04">
            <div class="process-icon-box"><i class="fa-solid fa-comments"></i></div>
            <h4 class="text-center fw-bold">Section 4: Speaking</h4>
            <p class="text-muted text-center">Takes the form of a one-on-one role-play using typical workplace situations tailored to your specific healthcare profession.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Prepare With Us -->
  <section class="content-section">
    <div class="container text-center">
      <div class="section-header" data-aos="fade-up">
        <h2 class="section-title mb-5 text-center">Why Prepare <span class="accent-text">With Us?</span></h2>
      </div>
      <div class="row g-4">
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="info-card p-4 text-center">
            <i class="fa-solid fa-chalkboard-user mb-3" style="font-size: 3rem; color: var(--primary);"></i>
            <h5 class="fw-bold mb-3">Expert Trainers</h5>
            <p class="text-muted mb-0">Learn from certified instructors with years of experience and proven track records.</p>
          </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="info-card p-4 text-center">
            <i class="fa-solid fa-book-open mb-3" style="font-size: 3rem; color: var(--primary);"></i>
            <h5 class="fw-bold mb-3">Extensive Materials</h5>
            <p class="text-muted mb-0">Access hundreds of practice questions, mock tests, and comprehensive study guides.</p>
          </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="info-card p-4 text-center">
            <i class="fa-solid fa-chart-line mb-3" style="font-size: 3rem; color: var(--primary);"></i>
            <h5 class="fw-bold mb-3">Performance Tracking</h5>
            <p class="text-muted mb-0">Regular assessments and personalized feedback to identify and improve weak areas.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Exam Overview -->
  <section class="content-section">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <h2 class="section-title mb-4">OET Exam <span class="accent-text">Overview</span></h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
          <div class="info-card" style="padding: 40px; background: white; border-radius: 15px; box-shadow: 0 15px 40px rgba(0,0,0,0.08); border-top: 5px solid var(--accent);">
            <div class="row g-4">
              <div class="col-md-6">
                <ul class="feature-list" style="font-size: 1.1rem; line-height: 1.6; margin: 0;">
                  <li style="margin-bottom: 20px; align-items: center;"><i class="fa-solid fa-check-circle" style="font-size: 1.4rem; margin-right: 15px; margin-top: 0;"></i> <div><strong>Conducted By:</strong><br><span class="text-muted">CBLA (Cambridge Boxhill Language Assessment)</span></div></li>
                  <li style="margin-bottom: 20px; align-items: center;"><i class="fa-solid fa-check-circle" style="font-size: 1.4rem; margin-right: 15px; margin-top: 0;"></i> <div><strong>Test Type:</strong><br><span class="text-muted">Paper-based, Computer-based, or OET@Home</span></div></li>
                  <li style="margin-bottom: 0; align-items: center;"><i class="fa-solid fa-check-circle" style="font-size: 1.4rem; margin-right: 15px; margin-top: 0;"></i> <div><strong>Score Range:</strong><br><span class="text-muted">0 � 500 Points (Grades A to E)</span></div></li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="feature-list" style="font-size: 1.1rem; line-height: 1.6; margin: 0;">
                  <li style="margin-bottom: 20px; align-items: center;"><i class="fa-solid fa-check-circle" style="font-size: 1.4rem; margin-right: 15px; margin-top: 0;"></i> <div><strong>Total Duration:</strong><br><span class="text-muted">Approx. 2 hours 45 minutes</span></div></li>
                  <li style="margin-bottom: 20px; align-items: center;"><i class="fa-solid fa-check-circle" style="font-size: 1.4rem; margin-right: 15px; margin-top: 0;"></i> <div><strong>Validity:</strong><br><span class="text-muted">Typically 2 years</span></div></li>
                  <li style="margin-bottom: 0; align-items: center;"><i class="fa-solid fa-check-circle" style="font-size: 1.4rem; margin-right: 15px; margin-top: 0;"></i> <div><strong>Fee:</strong><br><span class="text-muted">AUD 587 (approx.)</span></div></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Score Bands -->
  <section class="content-section bg-light-alt">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <h2 class="section-title mb-4">Score <span class="accent-text">Bands</span></h2>
      </div>
      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-8">
          <div class="table-responsive bg-white rounded shadow-sm p-4 border-top" style="border-top-color: var(--accent) !important; border-top-width: 4px !important;">
            <table class="table table-hover mb-0">
              <thead style="background-color: #f8f9fa;">
                <tr>
                  <th class="py-3">OET Score</th>
                  <th class="py-3">OET Grade</th>
                  <th class="py-3">Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-3 fw-bold text-primary">450 � 500</td>
                  <td class="py-3">Grade A</td>
                  <td class="py-3 text-muted">Very high level of performance. Can communicate fluently.</td>
                </tr>
                <tr>
                  <td class="py-3 fw-bold text-primary">350 � 440</td>
                  <td class="py-3">Grade B</td>
                  <td class="py-3 text-muted">High level of performance. Standard for most registrations.</td>
                </tr>
                <tr>
                  <td class="py-3 fw-bold text-primary">200 � 340</td>
                  <td class="py-3">Grade C / C+</td>
                  <td class="py-3 text-muted">Good level. May be accepted by some councils.</td>
                </tr>
                <tr>
                  <td class="py-3 fw-bold text-primary">0 � 190</td>
                  <td class="py-3">Grade D / E</td>
                  <td class="py-3 text-muted">Moderate to Low level. Below standard requirements.</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Preparation Plan -->
  <section class="content-section">
    <div class="container text-center">
      <div class="section-header" data-aos="fade-up">
        <h2 class="section-title mb-5">Our 4-Week <span class="accent-text">Preparation Plan</span></h2>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <div class="process-card text-center" data-step="01">
            <div class="process-icon-box">
              <i class="fa-solid fa-user-doctor"></i>
            </div>
            <h5 class="fw-bold mb-3" style="color: var(--primary);">Week 1</h5>
            <p class="text-muted mb-0">Listening focus: Understanding patient consultations and medical lectures.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <div class="process-card text-center" data-step="02">
            <div class="process-icon-box">
              <i class="fa-solid fa-file-medical"></i>
            </div>
            <h5 class="fw-bold mb-3" style="color: var(--primary);">Week 2</h5>
            <p class="text-muted mb-0">Reading strategies: Skimming and scanning hospital policies and medical journals.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="process-card text-center" data-step="03">
            <div class="process-icon-box">
              <i class="fa-solid fa-pen-clip"></i>
            </div>
            <h5 class="fw-bold mb-3" style="color: var(--primary);">Week 3</h5>
            <p class="text-muted mb-0">Writing practice: Drafting accurate referral letters and discharge summaries.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <div class="process-card text-center" data-step="04">
            <div class="process-icon-box">
              <i class="fa-solid fa-comments"></i>
            </div>
            <h5 class="fw-bold mb-3" style="color: var(--primary);">Week 4</h5>
            <p class="text-muted mb-0">Speaking role-plays, handling anxious patients, and full mock exams.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQs -->
  <section class="content-section bg-light-alt">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <h2 class="section-title mb-4">Frequently Asked <span class="accent-text">Questions</span></h2>
      </div>
      <div class="row g-4 justify-content-center">
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="info-card">
            <h4>Who recognizes OET?</h4>
            <p class="text-muted">OET is recognized by healthcare boards and councils in the UK, Ireland, Australia, New Zealand, Dubai, and Singapore among others, for professional registration.</p>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="info-card">
            <h4>Is OET easier than IELTS?</h4>
            <p class="text-muted">Many healthcare professionals find OET easier than IELTS because the test scenarios are based on real healthcare situations that they are already familiar with.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer CTA -->
  <section class="py-5 text-center text-white" style="background: linear-gradient(135deg, var(--primary), #1a365d);">
    <div class="container" data-aos="fade-up">
      <h2 class="mb-4 text-white">Ready to Achieve Your Target Score?</h2>
      <p class="mb-4 text-center text-white" style="font-size: 1.1rem; opacity: 0.9;">Book a free counselling session or take a free practice test with The Global Ties.</p>
      <a href="contact" class="btn btn-light btn-lg px-5 py-3 rounded-pill fw-bold" style="color: var(--primary);">Book Free Counselling</a>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'include/footer.php'; ?>
  
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


