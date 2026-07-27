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
    .tp-hero p {text-align: center;
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
      <h1><span class="accent-text" style="color:var(--accent);">German</span> Preparation</h1>
      <p>Achieve your target score with our expert-led German coaching. Comprehensive study materials, mock tests, and personalized feedback to guarantee your success.</p>
    </div>
  </section>

  <!-- What is the Test -->
  <section class="content-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6" data-aos="fade-right">
          <h2 class="section-title mb-4">About the <span class="accent-text">German Exam</span></h2>
          <p class="mt-4 text-muted" style="font-size: 1.1rem; line-height: 1.7;">The German is a globally recognized standardized test essential for international university admissions and professional registrations. It rigorously evaluates your proficiency and readiness for an academic or professional environment abroad.</p>
          <div class="row g-3 mt-3">
            <div class="col-md-12">
              <div class="info-card p-3">
                <h6 class="fw-bold mb-2"><i class="fa-solid fa-earth-americas text-primary me-2"></i> Global Acceptance</h6>
                <p class="text-muted small mb-0">Accepted by thousands of institutions worldwide.</p>
              </div>
            </div>
            <div class="col-md-12">
              <div class="info-card p-3">
                <h6 class="fw-bold mb-2"><i class="fa-solid fa-chart-bar text-primary me-2"></i> Comprehensive Assessment</h6>
                <p class="text-muted small mb-0">Accurately measures your core skills.</p>
              </div>
            </div>
            <div class="col-md-12">
              <div class="info-card p-3">
                <h6 class="fw-bold mb-2"><i class="fa-solid fa-calendar-check text-primary me-2"></i> Flexible Dates</h6>
                <p class="text-muted small mb-0">Available multiple times a year at various test centers.</p>
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
  <section class="content-section">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <h2 class="section-title mb-4">Exam <span class="accent-text">Pattern</span></h2>
        <p class="text-muted mt-3 text-center">Understanding the structure is the first step to mastering the exam.</p>
      </div>
      <div class="row g-4 justify-content-center">
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="info-card">
            <h4>1. Lesen (Reading)</h4>
            <p class="text-muted">Assesses your ability to understand everyday texts, advertisements, university documents, and complex articles.</p>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="info-card">
            <h4>2. Horen (Listening)</h4>
            <p class="text-muted">Evaluates your comprehension of spoken German through phone messages, public announcements, and academic interviews.</p>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="info-card">
            <h4>3. Schreiben (Writing)</h4>
            <p class="text-muted">Tests your ability to write short personal messages, formal emails, or structured essays depending on your CEFR level.</p>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="info-card">
            <h4>4. Sprechen (Speaking)</h4>
            <p class="text-muted">Measures your ability to introduce yourself, participate in group discussions, and present an argument in real-time.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Prepare With Us -->
  <section class="content-section">
    <div class="container text-center">
      <div class="section-header" data-aos="fade-up">
        <h2 class="section-title mb-2 text-center">Why Prepare <span class="accent-text">With Us?</span></h2>
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
        <h2 class="section-title mb-4">German Exams <span class="accent-text">Overview</span></h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
          <div class="info-card" style="padding: 40px; background: white; border-radius: 15px; box-shadow: 0 15px 40px rgba(0,0,0,0.08); border-top: 5px solid var(--accent);">
            <div class="row g-4">
              <div class="col-md-6">
                <ul class="feature-list" style="font-size: 1.1rem; line-height: 1.6; margin: 0;">
                  <li style="margin-bottom: 20px; align-items: center;"><i class="fa-solid fa-check-circle" style="font-size: 1.4rem; margin-right: 15px; margin-top: 0;"></i> <div><strong>Conducted By:</strong><br><span class="text-muted">Goethe-Institut & TestDaF-Institut</span></div></li>
                  <li style="margin-bottom: 20px; align-items: center;"><i class="fa-solid fa-check-circle" style="font-size: 1.4rem; margin-right: 15px; margin-top: 0;"></i> <div><strong>Test Types:</strong><br><span class="text-muted">Goethe-Zertifikat, TestDaF</span></div></li>
                  <li style="margin-bottom: 0; align-items: center;"><i class="fa-solid fa-check-circle" style="font-size: 1.4rem; margin-right: 15px; margin-top: 0;"></i> <div><strong>Score Range:</strong><br><span class="text-muted">CEFR A1 -  C2 / TDN 3, 4, 5</span></div></li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="feature-list" style="font-size: 1.1rem; line-height: 1.6; margin: 0;">
                  <li style="margin-bottom: 20px; align-items: center;"><i class="fa-solid fa-check-circle" style="font-size: 1.4rem; margin-right: 15px; margin-top: 0;"></i> <div><strong>Total Duration:</strong><br><span class="text-muted">Varies (1.5 to 3.5 hours)</span></div></li>
                  <li style="margin-bottom: 20px; align-items: center;"><i class="fa-solid fa-check-circle" style="font-size: 1.4rem; margin-right: 15px; margin-top: 0;"></i> <div><strong>Validity:</strong><br><span class="text-muted">Lifetime (Goethe-Zertifikat)</span></div></li>
                  <li style="margin-bottom: 0; align-items: center;"><i class="fa-solid fa-check-circle" style="font-size: 1.4rem; margin-right: 15px; margin-top: 0;"></i> <div><strong>Fee:</strong><br><span class="text-muted">Varies based on level</span></div></li>
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
        <h2 class="section-title mb-4">CEFR <span class="accent-text">Levels</span></h2>
      </div>
      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-8">
          <div class="table-responsive bg-white rounded shadow-sm p-4 border-top" style="border-top-color: var(--accent) !important; border-top-width: 4px !important;">
            <table class="table table-hover mb-0">
              <thead style="background-color: #f8f9fa;">
                <tr>
                  <th class="py-3">Level</th>
                  <th class="py-3">Title</th>
                  <th class="py-3">Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-3 fw-bold text-primary">A1 / A2</td>
                  <td class="py-3">Grundstufe (Basic)</td>
                  <td class="py-3 text-muted">Can understand basic phrases. Required for spouse visa / au pair.</td>
                </tr>
                <tr>
                  <td class="py-3 fw-bold text-primary">B1 / B2</td>
                  <td class="py-3">Mittelstufe (Independent)</td>
                  <td class="py-3 text-muted">B1/B2 is the standard requirement for most Bachelor's degrees and employment.</td>
                </tr>
                <tr>
                  <td class="py-3 fw-bold text-primary">C1 / C2</td>
                  <td class="py-3">Oberstufe (Proficient)</td>
                  <td class="py-3 text-muted">Advanced fluency. Required for medical professionals and highly specialized studies.</td>
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
        <h2 class="section-title mb-2">Our 4-Week <span class="accent-text">Preparation Plan</span></h2>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <div class="process-card text-center" data-step="01">
            <div class="process-icon-box">
              <i class="fa-solid fa-ear-listen"></i>
            </div>
            <h5 class="fw-bold mb-3" style="color: var(--primary);">Week 1</h5>
            <p class="text-muted mb-0">Horen (Listening): Understanding native speakers, radio broadcasts, and interviews.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <div class="process-card text-center" data-step="02">
            <div class="process-icon-box">
              <i class="fa-solid fa-book-open"></i>
            </div>
            <h5 class="fw-bold mb-3" style="color: var(--primary);">Week 2</h5>
            <p class="text-muted mb-0">Lesen (Reading): Comprehension of academic texts, news, and complex grammar.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="process-card text-center" data-step="03">
            <div class="process-icon-box">
              <i class="fa-solid fa-pen-nib"></i>
            </div>
            <h5 class="fw-bold mb-3" style="color: var(--primary);">Week 3</h5>
            <p class="text-muted mb-0">Schreiben (Writing): Drafting formal emails, expressing opinions, and essay writing.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <div class="process-card text-center" data-step="04">
            <div class="process-icon-box">
              <i class="fa-solid fa-comments"></i>
            </div>
            <h5 class="fw-bold mb-3" style="color: var(--primary);">Week 4</h5>
            <p class="text-muted mb-0">Sprechen (Speaking): Presentation skills, group discussions, and mock exams.</p>
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
            <h4>TestDaF vs Goethe-Zertifikat?</h4>
            <p class="text-muted">TestDaF is specifically aimed at academic studies and assesses B2-C1 levels. Goethe-Zertifikat offers modular exams for every level from A1 to C2 and is widely accepted for employment and visa purposes.</p>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="info-card">
            <h4>Do I need German to study in Germany?</h4>
            <p class="text-muted">If you are enrolling in a German-taught program, yes (usually B2/C1). For English-taught programs, German is not mandatory for admission, but having A1/A2 helps immensely with daily life and part-time jobs.</p>
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


