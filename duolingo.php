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
      font-size: 1.2rem;
      color:#fff;
      max-width: 700px;
      margin: 0 auto;
      opacity: 0.9;
    }
    
    /* Section Formatting */
    .content-section {
      padding: 30px 0;
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
      color: rgba(255, 213, 79, 0.2); /* Using a bright yellow/gold to represent accent */
    }
    .process-icon-box {
      width: 80px;
      height: 80px;
      background: rgba(13, 110, 253, 0.05); /* Very light primary */
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
      <h1><span class="accent-text" style="color:var(--accent);">Duolingo</span> English Test</h1>
      <p>Achieve your target score with our expert-led Duolingo coaching. One hour. One laptop. Results in 48 hours.</p>
    </div>
  </section>

  <!-- About DET -->
  <section class="content-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6" data-aos="fade-right">
          <h2 class="section-title mb-4">About the <span class="accent-text">Duolingo Exam</span></h2>
          <p class="mt-4 text-muted" style="font-size: 1.1rem; line-height: 1.7;">The Duolingo English Test (DET) is a fully online AI-adaptive English proficiency test accepted by thousands of universities worldwide. It evaluates Reading, Writing, Listening, and Speaking in one continuous session lasting about 60 minutes.</p>
          <p class="mt-3 text-muted" style="font-size: 1.1rem; line-height: 1.7;">Designed for convenience and accessibility, the test provides certified results within 48 hours and allows for unlimited score sharing with institutions globally, making it a highly attractive option for prospective international students.</p>
        </div>
        <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left">
          <img src="img/hero_edu1.png" alt="Test Preparation" class="img-fluid rounded shadow-lg" style="object-fit:cover; height:400px; width:100%;">
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose DET -->
  <section class="content-section bg-light-alt">
    <div class="container text-center">
      <div class="section-header" data-aos="fade-up">
        <h2 class="section-title mb-5 text-center">Why Choose the <span class="accent-text">Duolingo Test?</span></h2>
      </div>
      <div class="row g-4">
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="info-card p-4 text-center h-100">
            <i class="fa-solid fa-house-laptop mb-3" style="font-size: 2.5rem; color: var(--primary);"></i>
            <h5 class="fw-bold mb-3">Truly Remote</h5>
            <p class="text-muted small mb-0">No test centre visits, no travel, no waiting for a seat � the test is taken from home, on your schedule, 24/7.</p>
          </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="info-card p-4 text-center h-100">
            <i class="fa-solid fa-bolt mb-3" style="font-size: 2.5rem; color: var(--primary);"></i>
            <h5 class="fw-bold mb-3">Fastest Results</h5>
            <p class="text-muted small mb-0">Certified scores in as little as 48 hours, ideal for rolling admissions and tight deadlines.</p>
          </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="info-card p-4 text-center h-100">
            <i class="fa-solid fa-hand-holding-dollar mb-3" style="font-size: 2.5rem; color: var(--primary);"></i>
            <h5 class="fw-bold mb-3">Most Affordable</h5>
            <p class="text-muted small mb-0">Roughly one-third the cost of IELTS or TOEFL.</p>
          </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
          <div class="info-card p-4 text-center h-100">
            <i class="fa-solid fa-stopwatch mb-3" style="font-size: 2.5rem; color: var(--primary);"></i>
            <h5 class="fw-bold mb-3">Short and Focused</h5>
            <p class="text-muted small mb-0">A single ~60-minute sitting, compared to 3+ hours for traditional exams.</p>
          </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="500">
          <div class="info-card p-4 text-center h-100">
            <i class="fa-solid fa-share-nodes mb-3" style="font-size: 2.5rem; color: var(--primary);"></i>
            <h5 class="fw-bold mb-3">Unlimited Score Sharing</h5>
            <p class="text-muted small mb-0">Send your score to as many universities as you like, at no extra cost.</p>
          </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="600">
          <div class="info-card p-4 text-center h-100">
            <i class="fa-solid fa-globe mb-3" style="font-size: 2.5rem; color: var(--primary);"></i>
            <h5 class="fw-bold mb-3">Rapidly Expanding Acceptance</h5>
            <p class="text-muted small mb-0">Recognised by thousands of institutions, including a growing share of top-ranked universities worldwide.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Exam Overview -->
  <section class="content-section">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <h2 class="section-title mb-4">Duolingo Exam <span class="accent-text">Overview</span></h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
          <div class="info-card" style="padding: 40px; background: white; border-radius: 15px; box-shadow: 0 15px 40px rgba(0,0,0,0.08); border-top: 5px solid var(--accent);">
            <div class="row g-4">
              <div class="col-md-6">
                <ul class="feature-list" style="font-size: 1.1rem; line-height: 1.6; margin: 0;">
                  <li style="margin-bottom: 20px; align-items: center;"><i class="fa-solid fa-check-circle" style="font-size: 1.4rem; margin-right: 15px; margin-top: 0;"></i> <div><strong>Conducted By:</strong><br><span class="text-muted">Duolingo</span></div></li>
                  <li style="margin-bottom: 20px; align-items: center;"><i class="fa-solid fa-check-circle" style="font-size: 1.4rem; margin-right: 15px; margin-top: 0;"></i> <div><strong>Test Type:</strong><br><span class="text-muted">Online Computer-Based (Adaptive)</span></div></li>
                  <li style="margin-bottom: 0; align-items: center;"><i class="fa-solid fa-check-circle" style="font-size: 1.4rem; margin-right: 15px; margin-top: 0;"></i> <div><strong>Score Range:</strong><br><span class="text-muted">10 � 160</span></div></li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="feature-list" style="font-size: 1.1rem; line-height: 1.6; margin: 0;">
                  <li style="margin-bottom: 20px; align-items: center;"><i class="fa-solid fa-check-circle" style="font-size: 1.4rem; margin-right: 15px; margin-top: 0;"></i> <div><strong>Total Duration:</strong><br><span class="text-muted">60 minutes</span></div></li>
                  <li style="margin-bottom: 20px; align-items: center;"><i class="fa-solid fa-check-circle" style="font-size: 1.4rem; margin-right: 15px; margin-top: 0;"></i> <div><strong>Validity:</strong><br><span class="text-muted">2 years</span></div></li>
                  <li style="margin-bottom: 0; align-items: center;"><i class="fa-solid fa-check-circle" style="font-size: 1.4rem; margin-right: 15px; margin-top: 0;"></i> <div><strong>Fee:</strong><br><span class="text-muted">USD 70 (approx.)</span></div></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Test Format -->
  <section class="content-section bg-light-alt">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <h2 class="section-title mb-4">Test Format <span class="accent-text">& Sections</span></h2>
        <p class="text-muted mt-1 text-center">Understanding the structure is the first step to mastering the exam.</p>
      </div>
      <div class="row g-4 justify-content-center">
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="process-card" data-step="01">
            <div class="process-icon-box"><i class="fa-solid fa-id-card"></i></div>
            <h4 class="text-center fw-bold">Section 1: Introduction</h4>
            <p class="text-center text-primary mb-2"><strong>Duration:</strong> 5 mins</p>
            <p class="text-muted text-center">System check, ID verification, and test rules setup.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="process-card" data-step="02">
            <div class="process-icon-box"><i class="fa-solid fa-brain"></i></div>
            <h4 class="text-center fw-bold">Section 2: Adaptive Test</h4>
            <p class="text-center text-primary mb-2"><strong>Duration:</strong> 45 mins</p>
            <p class="text-muted text-center">A series of graded questions evaluating Reading, Listening, Writing, and Speaking.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="process-card" data-step="03">
            <div class="process-icon-box"><i class="fa-solid fa-video"></i></div>
            <h4 class="text-center fw-bold">Section 3: Video Interview</h4>
            <p class="text-center text-primary mb-2"><strong>Duration:</strong> 10 mins</p>
            <p class="text-muted text-center">An unscored sample sent alongside your scores to institutions to showcase your abilities.</p>
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
                  <th class="py-3">DET Score</th>
                  <th class="py-3">CEFR Level</th>
                  <th class="py-3">Typical Use</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-3 fw-bold text-primary">55 � 85</td>
                  <td class="py-3">A2 � B1</td>
                  <td class="py-3 text-muted">Foundation / Pathway Programs</td>
                </tr>
                <tr>
                  <td class="py-3 fw-bold text-primary">90 � 115</td>
                  <td class="py-3">B1 � B2</td>
                  <td class="py-3 text-muted">Undergraduate Admissions</td>
                </tr>
                <tr>
                  <td class="py-3 fw-bold text-primary">115 � 130</td>
                  <td class="py-3">B2 � C1</td>
                  <td class="py-3 text-muted">Postgraduate Admissions</td>
                </tr>
                <tr>
                  <td class="py-3 fw-bold text-primary">130+</td>
                  <td class="py-3">C1 � C2</td>
                  <td class="py-3 text-muted">Top Tier Universities & Fellowships</td>
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
              <i class="fa-solid fa-list-check"></i>
            </div>
            <h5 class="fw-bold mb-3" style="color: var(--primary);">Week 1</h5>
            <p class="text-muted mb-0">Diagnostic test, format familiarization, and vocabulary building.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <div class="process-card text-center" data-step="02">
            <div class="process-icon-box">
              <i class="fa-solid fa-headphones"></i>
            </div>
            <h5 class="fw-bold mb-3" style="color: var(--primary);">Week 2</h5>
            <p class="text-muted mb-0">Intensive focus on reading comprehension and listening skills.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="process-card text-center" data-step="03">
            <div class="process-icon-box">
              <i class="fa-solid fa-pen-nib"></i>
            </div>
            <h5 class="fw-bold mb-3" style="color: var(--primary);">Week 3</h5>
            <p class="text-muted mb-0">Improving typing speed, writing samples, and speaking fluency.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <div class="process-card text-center" data-step="04">
            <div class="process-icon-box">
              <i class="fa-solid fa-laptop-file"></i>
            </div>
            <h5 class="fw-bold mb-3" style="color: var(--primary);">Week 4</h5>
            <p class="text-muted mb-0">Full-length mock tests, performance analysis, and time management.</p>
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
            <h4>Is DET accepted instead of IELTS?</h4>
            <p class="text-muted">Yes, many universities worldwide accept the Duolingo English Test for admission. However, visa requirements can vary depending on the destination country, so it is important to verify with the specific institution and immigration authority.</p>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="info-card">
            <h4>How long are the scores valid?</h4>
            <p class="text-muted">Your Duolingo English Test scores are valid for two years from the date you receive your results, similar to other major English proficiency tests.</p>
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
