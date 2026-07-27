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

    .testimonial-card {
      background: white;
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.05);
      border-left: 4px solid var(--accent);
      height: 100%;
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
      <h1><span class="accent-text" style="color:var(--accent);">SAT</span> Preparation</h1>
      <p>Achieve your target score with our expert-led SAT coaching. Comprehensive study materials, mock tests, and personalized feedback to guarantee your success.</p>
    </div>
  </section>

  <!-- About SAT 2016 -->
  <section class="content-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6" data-aos="fade-right">
          <h2 class="section-title mb-4">About <span class="accent-text">SAT 2016</span></h2>
          <p class="mt-4 text-muted" style="font-size: 1.1rem; line-height: 1.7;">The College Board made content, format, and scoring changes to the SAT in 2016. The redesigned SAT test prioritizes content that reflects the kind of reading and math students will encounter in college and their future work lives. It was first administered in the spring of 2016.</p>
          <h4 class="mt-4" style="color: var(--primary);">Timeline of Changes for Test Takers</h4>
          <p class="text-muted" style="font-size: 1.1rem; line-height: 1.7;">The new SAT will have no bearing on students scheduled to graduate in 2015 or 2016. However, for students planning to graduate in 2017 or any year after, the new SAT exam will be the exam they have to take (assuming they would prefer to take the exam no sooner than spring of 2016).</p>
          <div class="row g-3 mt-3">
            <div class="col-md-6">
              <div class="info-card p-4 text-center">
                <i class="fa-solid fa-calendar text-primary mb-3" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">January 2016</h6>
                <p class="text-muted small mb-0">Old SAT was administered for the final time.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-card p-4 text-center">
                <i class="fa-solid fa-calendar-check text-primary mb-3" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">March 2016</h6>
                <p class="text-muted small mb-0">New SAT is administered for the first time.</p>
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

  <!-- Why Study SAT at The Global Ties -->
  <section class="content-section bg-light-alt">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <h2 class="section-title mb-4">Why to study SAT at <span class="accent-text">The Global Ties?</span></h2>
      </div>
      <div class="row">
        <div class="col-lg-12" data-aos="fade-up">
      <div class="row g-4">
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="info-card text-center" style="padding: 30px 20px;">
            <i class="fa-solid fa-chalkboard-user mb-3" style="font-size: 2rem; color: var(--primary);"></i>
            <h5 class="fw-bold mb-3">Specialist Faculty</h5>
            <p class="text-muted mb-0">Experienced and specialist faculty for SAT Verbal and Quants.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="info-card text-center" style="padding: 30px 20px;">
            <i class="fa-solid fa-trophy mb-3" style="font-size: 2rem; color: var(--primary);"></i>
            <h5 class="fw-bold mb-3">Best Track Record</h5>
            <p class="text-muted mb-0">Best track record of our SAT students for target scores and admissions.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="info-card text-center" style="padding: 30px 20px;">
            <i class="fa-solid fa-brain mb-3" style="font-size: 2rem; color: var(--primary);"></i>
            <h5 class="fw-bold mb-3">Adaptive Coaching</h5>
            <p class="text-muted mb-0">Adaptive SAT coaching tailoring student�s requirements and ability.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
          <div class="info-card text-center" style="padding: 30px 20px;">
            <i class="fa-solid fa-building mb-3" style="font-size: 2rem; color: var(--primary);"></i>
            <h5 class="fw-bold mb-3">Top Infrastructure</h5>
            <p class="text-muted mb-0">Best in class learning infrastructure and ambiance.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
          <div class="info-card text-center" style="padding: 30px 20px;">
            <i class="fa-solid fa-user-group mb-3" style="font-size: 2rem; color: var(--primary);"></i>
            <h5 class="fw-bold mb-3">One-on-One Classes</h5>
            <p class="text-muted mb-0">Dedicated SAT review sessions and one-on-one classes.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
          <div class="info-card text-center" style="padding: 30px 20px;">
            <i class="fa-solid fa-laptop-code mb-3" style="font-size: 2rem; color: var(--primary);"></i>
            <h5 class="fw-bold mb-3">Free Mock Tests</h5>
            <p class="text-muted mb-0">Get free 5 SAT online full length CBTs and 20 full length PBTs.</p>
          </div>
        </div>

      </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Old SAT vs New SAT Table -->
  <section class="content-section">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <h2 class="section-title mb-4">Old SAT vs. <span class="accent-text">New SAT (2016)</span></h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-10" data-aos="fade-up">
          <div class="table-responsive bg-white rounded shadow-sm p-4">
            <table class="table table-bordered table-striped mb-0">
              <thead style="background: var(--primary); color: white;">
                <tr>
                  <th style="width:20%">Feature</th>
                  <th style="width:40%">Old SAT</th>
                  <th style="width:40%">New SAT</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>Scoring</strong></td>
                  <td>600 - 2400</td>
                  <td>400 - 1600 (Subscore and Cross-test Scores available)</td>
                </tr>
                <tr>
                  <td><strong>Timing</strong></td>
                  <td>3 Hours 45 Minutes</td>
                  <td>3 Hours (+50 minute optional essay)</td>
                </tr>
                <tr>
                  <td><strong>Sections</strong></td>
                  <td>Critical Reading: 200-800<br>Writing: 200-800<br>Math: 200-800<br>Essay (included in Writing score)</td>
                  <td>Evidence-Based Reading and Writing: 200-800<br>Math: 200-800<br>Optional Essay (separately scored)</td>
                </tr>
                <tr>
                  <td><strong>Guessing Penalty</strong></td>
                  <td>1/4 guessing penalty</td>
                  <td>No guessing penalty</td>
                </tr>
                <tr>
                  <td><strong>Format</strong></td>
                  <td>Available in print</td>
                  <td>Available in print or on computer</td>
                </tr>
                <tr>
                  <td><strong>Section Details</strong></td>
                  <td>N/A</td>
                  <td>65-minute Reading section<br>35-minute Writing and Language section<br>25-minute No Calculator section<br>55-minute Calculator section</td>
                </tr>
                <tr>
                  <td><strong>Questions</strong></td>
                  <td>N/A</td>
                  <td>52 Questions (Reading)<br>44 Questions (Writing and Language)<br>20 Questions (No Calculator)<br>38 Questions (Calculator)</td>
                </tr>
                <tr>
                  <td><strong>Score Range</strong></td>
                  <td>200-800</td>
                  <td>200-800</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Exam Overview -->
  <section class="content-section">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <h2 class="section-title mb-4">SAT Exam <span class="accent-text">Overview</span></h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
          <div class="info-card" style="padding: 40px; background: white; border-radius: 15px; box-shadow: 0 15px 40px rgba(0,0,0,0.08); border-top: 5px solid var(--accent);">
            <div class="row g-4">
              <div class="col-md-6">
                <ul class="feature-list" style="font-size: 1.1rem; line-height: 1.6; margin: 0;">
                  <li style="margin-bottom: 20px; align-items: center;"><i class="fa-solid fa-check-circle" style="font-size: 1.4rem; margin-right: 15px; margin-top: 0;"></i> <div><strong>Conducted By:</strong><br><span class="text-muted">College Board</span></div></li>
                  <li style="margin-bottom: 20px; align-items: center;"><i class="fa-solid fa-check-circle" style="font-size: 1.4rem; margin-right: 15px; margin-top: 0;"></i> <div><strong>Test Type:</strong><br><span class="text-muted">Digital SAT (Computer-based)</span></div></li>
                  <li style="margin-bottom: 0; align-items: center;"><i class="fa-solid fa-check-circle" style="font-size: 1.4rem; margin-right: 15px; margin-top: 0;"></i> <div><strong>Score Range:</strong><br><span class="text-muted">400 - 1600 Points</span></div></li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="feature-list" style="font-size: 1.1rem; line-height: 1.6; margin: 0;">
                  <li style="margin-bottom: 20px; align-items: center;"><i class="fa-solid fa-check-circle" style="font-size: 1.4rem; margin-right: 15px; margin-top: 0;"></i> <div><strong>Total Duration:</strong><br><span class="text-muted">2 hours 14 minutes</span></div></li>
                  <li style="margin-bottom: 20px; align-items: center;"><i class="fa-solid fa-check-circle" style="font-size: 1.4rem; margin-right: 15px; margin-top: 0;"></i> <div><strong>Validity:</strong><br><span class="text-muted">Usually 5 years</span></div></li>
                  <li style="margin-bottom: 0; align-items: center;"><i class="fa-solid fa-check-circle" style="font-size: 1.4rem; margin-right: 15px; margin-top: 0;"></i> <div><strong>Fee:</strong><br><span class="text-muted">USD 103 (approx. incl. regional fee)</span></div></li>
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
        <h2 class="section-title mb-4">Score <span class="accent-text">Ranges</span></h2>
      </div>
      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-8">
          <div class="table-responsive bg-white rounded shadow-sm p-4 border-top" style="border-top-color: var(--accent) !important; border-top-width: 4px !important;">
            <table class="table table-hover mb-0">
              <thead style="background-color: #f8f9fa;">
                <tr>
                  <th class="py-3">SAT Total Score</th>
                  <th class="py-3">Percentile Estimate</th>
                  <th class="py-3">Competitiveness</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-3 fw-bold text-primary">1050 - 1290</td>
                  <td class="py-3">50th - 85th Percentile</td>
                  <td class="py-3 text-muted">Average to Good Universities</td>
                </tr>
                <tr>
                  <td class="py-3 fw-bold text-primary">1300 - 1440</td>
                  <td class="py-3">86th - 96th Percentile</td>
                  <td class="py-3 text-muted">Highly Competitive</td>
                </tr>
                <tr>
                  <td class="py-3 fw-bold text-primary">1450 - 1600</td>
                  <td class="py-3">97th - 99th+ Percentile</td>
                  <td class="py-3 text-muted">Top Tier Universities (Ivy League)</td>
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
              <i class="fa-solid fa-calculator"></i>
            </div>
            <h5 class="fw-bold mb-3" style="color: var(--primary);">Week 1</h5>
            <p class="text-muted mb-0">Math foundation: Heart of Algebra and Problem Solving strategies.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <div class="process-card text-center" data-step="02">
            <div class="process-icon-box">
              <i class="fa-solid fa-spell-check"></i>
            </div>
            <h5 class="fw-bold mb-3" style="color: var(--primary);">Week 2</h5>
            <p class="text-muted mb-0">Writing & Language: Grammar rules, punctuation, and expression of ideas.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="process-card text-center" data-step="03">
            <div class="process-icon-box">
              <i class="fa-solid fa-book-open-reader"></i>
            </div>
            <h5 class="fw-bold mb-3" style="color: var(--primary);">Week 3</h5>
            <p class="text-muted mb-0">Reading strategies: Evidence-based texts, literature, and historical passages.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <div class="process-card text-center" data-step="04">
            <div class="process-icon-box">
              <i class="fa-solid fa-laptop-code"></i>
            </div>
            <h5 class="fw-bold mb-3" style="color: var(--primary);">Week 4</h5>
            <p class="text-muted mb-0">Digital SAT mock tests (Bluebook app simulation), timing, and error analysis.</p>
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
            <h4>What is the Digital SAT?</h4>
            <p class="text-muted">The SAT is now fully digital. It is shorter, adaptive (the difficulty of the second module depends on your performance in the first), and you can use a built-in Desmos calculator for all math questions.</p>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="info-card">
            <h4>Is the essay still required?</h4>
            <p class="text-muted">No, the College Board discontinued the optional SAT Essay. Your focus should be entirely on the Evidence-Based Reading and Writing, and Math sections.</p>
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
