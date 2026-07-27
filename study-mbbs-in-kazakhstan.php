<?php require_once 'site-config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'include/header.php'; ?>
<head>
  <style>
    /* Hero Section */
    .mbbs-hero {
      background: linear-gradient(rgba(10, 30, 50, 0.7), rgba(10, 30, 50, 0.7)), url('img/hero_edu2.png') center / cover;
      padding: 120px 0 80px;
      text-align: center;
      color: white;
    }
    .mbbs-hero h1 {
      font-size: 3.5rem;
      font-weight: 700;
      margin-bottom: 20px;
      color: white;
    }
    .mbbs-hero p {
      font-size: 1.2rem;
      max-width: 800px;
      margin: 0 auto;
      opacity: 0.9;
            color:#fff;
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

    /* Cards */
    .feature-card {
      background: white;
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.05);
      height: 100%;
      transition: transform 0.3s ease;
      text-align: center;
    }
    .feature-card:hover {
      transform: translateY(-10px);
    }
    .feature-icon {
      /* font-size: 2.5rem removed to unify heading sizes */
      color: var(--accent);
      margin-bottom: 20px;
    }

    /* List styling */
    .custom-list {
      list-style: none;
      padding-left: 0;
    }
    .custom-list li {
      margin-bottom: 15px;
      position: relative;
      padding-left: 30px;
    }
    .custom-list li::before {
      content: '\f058';
      font-family: 'Font Awesome 6 Free';
      font-weight: 900;
      color: var(--accent);
      position: absolute;
      left: 0;
      top: 2px;
    }

    /* Table */
    .custom-table th {
      background-color: var(--primary);
      color: white;
      padding: 15px;
    }
    .custom-table td {
      padding: 15px;
      vertical-align: middle;
    }
  </style>
</head>
<body>

  <!-- Hero Section -->
  <section class="mbbs-hero">
    <div class="container" data-aos="fade-up">
      <h1>Study MBBS in <span class="accent-text" style="color:var(--accent);">Kazakhstan</span></h1>
      <p>Kazakhstan offers an excellent balance of affordable tuition and advanced clinical training in state-of-the-art national hospitals.</p>
    </div>
  </section>

  <!-- Why Study MBBS -->
  <section class="content-section">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <h2 class="section-title">Why Study MBBS in <span class="accent-text">Kazakhstan?</span></h2>
        <p class="text-muted mt-3">Kazakhstan offers international students highly qualified teaching staff and deep clinical engagement in modern multi-specialty hospitals.</p>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <div class="feature-card">
            <i class="fa-solid fa-graduation-cap feature-icon"></i>
            <h4>Global Recognition</h4>
            <p class="text-muted text-sm mt-2">Universities recognized by NMC, WHO, FAIMER, and other global medical councils.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <div class="feature-card">
            <i class="fa-solid fa-wallet feature-icon"></i>
            <h4>Affordable Fees</h4>
            <p class="text-muted text-sm mt-2">Highly subsidized education compared to private colleges in India or the West.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="feature-card">
            <i class="fa-solid fa-language feature-icon"></i>
            <h4>English Medium</h4>
            <p class="text-muted text-sm mt-2">Courses are taught entirely in English, making it easier for international students.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <div class="feature-card">
            <i class="fa-solid fa-microscope feature-icon"></i>
            <h4>Advanced Infrastructure</h4>
            <p class="text-muted text-sm mt-2">State-of-the-art laboratories, modern hospitals, and practical clinical exposure.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Top Universities -->
  <section class="content-section bg-light-alt">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6" data-aos="fade-right">
          <h2 class="section-title">Top Medical Universities in <span class="accent-text">Kazakhstan</span></h2>
          <p class="mt-4 text-muted">These prestigious medical universities in Kazakhstan offer high-quality education and a comprehensive MBBS program which includes academic training and clinical internships.</p>
          <ul class="custom-list mt-4">
            <li>Asfendiyarov Kazakh National Medical University</li>
            <li>Semey State Medical University</li>
            <li>Karaganda State Medical University</li>
            <li>West Kazakhstan Marat Ospanov State Medical University</li>
            <li>Astana Medical University</li>
          </ul>
        </div>
        <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left">
          <img src="img/kazakhstan.png" alt="Medical Students" class="img-fluid rounded shadow-lg" style="object-fit:cover; height:400px; width:100%;">
        </div>
      </div>
    </div>
  </section>

  <!-- Eligibility & Admission Process -->
  <section class="content-section">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6" data-aos="fade-up">
          <h2 class="section-title mb-4">Eligibility <span class="accent-text">Criteria</span></h2>
          <div class="p-4 border rounded shadow-sm bg-white">
            <ul class="custom-list">
              <li><strong>Age:</strong> Must be at least 17 years old by 31st December of the admission year.</li>
              <li><strong>Academics:</strong> 50% aggregate marks in Physics, Chemistry, and Biology (PCB) in 12th standard (40% for reserved categories).</li>
              <li><strong>NEET:</strong> Qualifying NEET score is mandatory for Indian students intending to practice in India.</li>
              <li><strong>Language:</strong> No IELTS or TOEFL required, but basic English proficiency is expected.</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <h2 class="section-title mb-4">Admission <span class="accent-text">Process</span></h2>
          <div class="p-4 border rounded shadow-sm bg-white">
            <ul class="custom-list">
              <li><strong>Step 1:</strong> Choose a university and submit the application form along with 10th/12th mark sheets and passport copy.</li>
              <li><strong>Step 2:</strong> Receive the Admission Letter from the university within 3-5 working days.</li>
              <li><strong>Step 3:</strong> Apply for the official Invitation Letter from the Ministry of Education and Science, Kazakhstan.</li>
              <li><strong>Step 4:</strong> Apply for the Student Visa at the Kazakhstan Embassy.</li>
              <li><strong>Step 5:</strong> Book flights and prepare for departure with our pre-departure briefing.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- Cost of Living & Fee Structure -->
  <section class="content-section bg-light-alt">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6" data-aos="fade-right">
          <h2 class="section-title mb-4">Cost of Living <span class="accent-text">& Fee Structure</span></h2>
          <p class="text-muted mb-4">Planning your finances is an important step. Here is a general breakdown of the fee structure including tuition, hostel, and mess charges.</p>
          
          <div class="table-responsive bg-white rounded shadow-sm mb-4">
            <table class="table table-hover custom-table mb-0 text-center">
              <thead style="background-color: var(--primary); color: white;">
                <tr>
                  <th class="py-3">Particulars</th>
                  <th class="py-3">Estimated Cost (Per Year)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-3 fw-bold">Tuition Fee</td>
                  <td class="py-3 text-muted">Varies by University</td>
                </tr>
                <tr>
                  <td class="py-3 fw-bold">Hostel Charges</td>
                  <td class="py-3 text-muted">Varies by University</td>
                </tr>
                <tr>
                  <td class="py-3 fw-bold">Mess / Food</td>
                  <td class="py-3 text-muted">Varies by University</td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <h4 class="mt-4 mb-3" style="color:var(--primary); font-weight:700;">Cost of Living</h4>
          <p class="text-muted">The average cost of living for international students is highly affordable. It typically covers accommodation, food, local transportation, and basic utilities, ensuring a comfortable stay while pursuing your MBBS degree.</p>
        </div>
        <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left">
          <img src="img/medium-shot-graduate-student.jpg" alt="Cost of Living and Fee Structure" class="img-fluid rounded shadow-lg" style="object-fit:cover; height:450px; width:100%;">
        </div>
      </div>
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






